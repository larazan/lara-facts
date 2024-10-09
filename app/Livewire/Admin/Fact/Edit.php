<?php

namespace App\Livewire\Admin\Fact;

use App\Models\Fact;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Laravel\Facades\Image;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    use WithFileUploads;

    public $bgselect;
    public $colorselect;
    public $showMessage = false;
    public $parentCategoryId;
    public $parentId;
    public $title;
	public $description;
	public $body;
    public $authorId;
    public $categoryId;
    public $factId;
    public $factTags;
    public $tags = [];
    public $bgColor = '#7f60be';
    public $color = '#fff';
    public $historyTime;
    public $file;
    public $oldImage;
    public $factType = 'single';
    public $types = [
        'single',
        'series',
    ];
    public $status;
    public $factStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive',
    ];

    #[Validate('required|min:3|unique:categories,name')]
    public $categoryItem;

    public $bgs = [
        '#f64849',
        '#fcb446',
        '#ff8110',
        '#44b776',
        '#1cacb7',
        '#9db255',
        '#525389',
        '#3e9cd0',
        '#ff914c',
        '#7f60be',
        '#37a5e4',
        '#f8be43',
        '#734828',
        '#e03c3d',
        '#31dbf4',
        '#1d9fac',
        '#1f9fac',
        '#0399d6',
        '#323a4d',
        '#fad02c',
        '#f86146',
        '#c86cab',
        '#a75cc5',
        '#fa6928',
        '#2478c1',
        '#00b34d',
        '#37c451',
        '#f97d7f',
        '#93e1ed',
        '#f3cf95',
        '#f4d8a6',
        '#f5ad41',
        '#e7ce40',
        '#72aaa9',
        '#6f9bcc',
        '#e85858',
        '#3e808c',
        '#59595b',
        '#ab8262',
        '#faf3e9',
        '#850655',
        '#2d3563',
        '#7a46e6',
    ];

    public $colors = [
        '#fff',
        '#000',
        '#fc9598',
        '#ff8459',
        '#dbba0c',
        '#95c9a8',
        '#425fa6',
        '#a5abe4',
        '#a088f6',
        '#93caaa',
        '#fa8764',
        '#99b84e',
        '#fc8c47',
        '#febe96',
        '#fef5e4',
        '#dbf0d3',
        '#ffe6f2',
        '#ffffb3',
        '#df775a',
        '#436460',
        '#f7b1ab',
        '#d8c338',
        '#f2c4c4',
        '#8eb19c',
        '#d4c058',
        '#f9c095',
        '#ffa8d5',
        '#c3ae0b',
        '#86c8f4',
        '#ff9752',
        '#fef5e4',
        '#da6737',
        '#223679',
        '#cda0c6',
        '#fd9e7e',
        '#227a65',
        '#8ba4dd',
        '#fdf4e0',
        '#70723d',
        '#406653',
        '#e26b46',
        '#3b86c4',
        '#a5442c',
        '#1c4255',
    ];

    public $sort = 'asc';

    protected $rules = [
        'title' => 'required|min:3',
        // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function mount($factId)
    {
        // $this->fact = Fact::findOrFail($fact);
        $this->factId = $factId;
        $fact = Fact::find($factId);
        $this->parentId = $fact->parent_id;
        $this->factType = $fact->type;
        $this->categoryId = $fact->category_id;
        $this->title = $fact->title;
        $this->body = $fact->description;
        $this->bgColor = $fact->bgColor ? $fact->bgColor : $this->bgColor;
        $this->color = $fact->color ? $fact->color : $this->color;
        $this->historyTime = $fact->history_time;
        $this->factTags = $fact->tags;
        $this->tags = isset($this->factTags) ? explode(',', $this->factTags) : [];
        $this->authorId = $fact->author_id;
        $this->oldImage = $fact->small;
        $this->factStatus = $fact->status;
    }

    public function updated()
    {
        $this->bgColor = $this->bgselect ? $this->bgselect : $this->bgColor;
        $this->color = $this->colorselect ? $this->colorselect : $this->color;
    }

    public function showEditModal($factId)
    {
        $this->reset(['title']);
        $this->factId = $factId;
        $fact = Fact::find($factId);
        $this->categoryId = $fact->category_id;
        $this->title = $fact->title;
        $this->body = $fact->description;
        $this->bgColor = $fact->bgColor;
        $this->color = $fact->color;
        $this->factTags = $fact->tags;
        $this->tags = isset($this->factTags) ? explode(',', $this->factTags) : [];
        $this->authorId = $fact->author_id;
        $this->oldImage = $fact->small;
        $this->factStatus = $fact->status;

    }
    
    public function updateFact()
    {
        $this->validate();

        $fact = Fact::findOrFail($this->factId);
  
        $new = Str::slug($this->title) . '_' . time();
        
        if ($this->factId) {
            if ($fact) {
                $fact->parent_id = $this->parentId;
                // $fact->rand_id = Str::random(10);
                $fact->category_id = $this->categoryId;
                $fact->type = $this->factType;
                $fact->author_id = isset($this->author) ? $this->author : Auth::user()->id;
                $fact->title = $this->title;
                $fact->slug = Str::slug($this->title);
                $fact->description = $this->body;
                $fact->bgColor = $this->bgColor;
                $fact->color = $this->color;
                $fact->history_time = $this->historyTime;
                $fact->tags = implode(',', $this->tags);
                $fact->status = $this->factStatus;

                if (!empty($this->file)) {
                    // delete image
                    $this->deleteImage($this->factId);

                    $filename = $new . '.' . $this->file->getClientOriginalName();
                    $filePath = $this->file->storeAs(Fact::UPLOAD_DIR, $filename, 'public');
                    $resizedImage = $this->_resizeImage($this->file, $filename, Fact::UPLOAD_DIR);

                    $fact->original = $filePath;
                    $fact->small = $resizedImage['small'];
                    $fact->medium = $resizedImage['medium'];
                }

                $fact->save();
            }
        }

        $this->reset();
        
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Fact updated successfully']);
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        $parentCategory = Category::OrderBy('name', $this->sort)->where('parent_id', null)->get();
        return view('livewire.admin.fact.edit')->with([
            'categories' => Category::OrderBy('name', $this->sort)->get(),
            'parentCategory' => $parentCategory,
        ]);
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', Fact::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		$mediumImageFilePath = $folder . '/medium/' . $fileName;
		$size = explode('x', Fact::MEDIUM);
		list($width, $height) = $size;

		$mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
			$resizedImage['medium'] = $mediumImageFilePath;
		}

        // LARGE
		// $largeImageFilePath = $folder . '/large/' . $fileName;
		// $size = explode('x', Fact::LARGE);
		// list($width, $height) = $size;

		// $largeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
		// 	$resizedImage['large'] = $largeImageFilePath;
		// }

        // EXTRA_LARGE
		// $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		// $size = explode('x', Fact::EXTRA_LARGE);
		// list($width, $height) = $size;

		// $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
		// 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
		// }

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $factImage = Fact::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$factImage->original)) {
            Storage::delete($path.$factImage->original);
		}
		
        if (Storage::exists($path.$factImage->small)) {
            Storage::delete($path.$factImage->small);
        }   

		if (Storage::exists($path.$factImage->medium)) {
            Storage::delete($path.$factImage->medium);
        }
             
        return true;
    }

    public function categoryAdd()
    {   
        // rules name category has unique value
        $validated = $this->validate();
        Category::create([
            'parent_id' => $this->parentCategoryId,
            'name' => $this->categoryItem,
            'slug' => Str::slug($this->categoryItem),
        ]);

        $this->reset('categoryItem');
        // $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Category created successfully']);
    }
}
