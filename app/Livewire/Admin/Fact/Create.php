<?php

namespace App\Livewire\Admin\Fact;

use App\Models\Fact;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Laravel\Facades\Image;
use Livewire\WithFileUploads;
use Livewire\Component;

class Create extends Component
{
    use WithFileUploads;

    public $showMessage = false;
    public $parentId;
    public $title;
	public $description;
	public $body;
    public $authorId;
    public $categoryId;
    public $factId;
    public $factTags;
    public $tags = [];
    public $bgColor;
    public $color;
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
    public $categoryItem;

    public $sort = 'asc';

    protected $rules = [
        'title' => 'required|min:3',
        // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function mount()
    {
        $this->tags = isset($this->factTags) ? explode(',', $this->factTags) : [];
    }

    public function createFact()
    {
        // dd($this->tags);
        // dd($this->body);
        $this->validate();
  
        $new = Str::slug($this->title) . '_' . time();

        $fact = new Fact();
        $fact->parent_id = $this->parentId;
        // $fact->rand_id = Str::random(10);
        $fact->type = $this->factType;
        $fact->category_id = $this->categoryId;
        $fact->author_id = Auth::user()->id;
        $fact->title = $this->title;
        $fact->slug = Str::slug($this->title);
        $fact->description = $this->body;
        $fact->bgColor = $this->bgColor;
        $fact->color = $this->color;
        $fact->history_time = $this->historyTime;
        $fact->tags = implode(',', $this->tags);
        $fact->status = $this->factStatus;

        if (!empty($this->file)) {
            $filename = $new . '.' . $this->file->getClientOriginalName();
            $filePath = $this->file->storeAs(Fact::UPLOAD_DIR, $filename, 'public');
            $resizedImage = $this->_resizeImage($this->file, $filename, Fact::UPLOAD_DIR);

            $fact->original = $filePath;
            $fact->small = $resizedImage['small'];
            $fact->medium = $resizedImage['medium'];
        }

        $fact->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Fact created successfully']);
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.fact.create')->with([
            'categories' => Category::OrderBy('name', $this->sort)->get(),
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
        Category::create([
          'name' => $this->categoryItem,
          'slug' => Str::slug($this->categoryItem),
        ]);

        $this->reset('categoryItem');
        // $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Category created successfully']);
    }
}
