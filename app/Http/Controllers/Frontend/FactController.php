<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Fact;
use App\Models\Tag;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FactController extends Controller
{
    //
    public function index()
    {
        $facts = Fact::orderBy('id', 'ASC');

        $this->data['title'] = "Facts";
        $this->data['facts'] = $facts->paginate(20);
		return $this->loadTheme('facts.index', $this->data);
    }

    public function show($id)
    {
        $fact = Fact::where('id', $id)->first();

        if (!$fact) {
			return redirect('facts');
		}

        // build breadcrumb data array
		$breadcrumbs_data['current_page_title'] = $fact->title;
		$breadcrumbs_data['breadcrumbs_array'] = $this->_generate_breadcrumbs_array($id);
		$this->data['breadcrumbs_data'] = $breadcrumbs_data;

        $tags = $fact->tags;
        if($tags)
        {
            $arrTags = explode(',', $fact->tags);
        } else {
            $arrTags = $tags;
        }
        
        $this->data['title'] = $fact->title;
		$this->data['fact'] = $fact;
		$this->data['id'] = $id;
		$this->data['tags'] = $arrTags;
        $this->data['slug'] = $fact->slug;
		return $this->loadTheme('facts.detail', $this->data);
    }

    public function showByTag($tag)
    {
        $facts = Fact::where('tags', 'like', "%{$tag}%");

        $this->data['title'] = "Topic: " . ucfirst($tag);
        $this->data['facts'] = $facts->paginate(20);
        $this->data['tag'] = $tag;
		return $this->loadTheme('facts.index', $this->data);
    }


    public function customize($id)
    {
        $fact = Fact::where('id', $id)->first();

        if (!$fact) {
			return redirect('facts');
		}

        // build breadcrumb data array
		$breadcrumbs_data['current_page_title'] = $fact->title;
		$breadcrumbs_data['breadcrumbs_array'] = $this->_generate_breadcrumbs_array($id);
		$this->data['breadcrumbs_data'] = $breadcrumbs_data;

        $tags = $fact->tags;
        if($tags)
        {
            $arrTags = explode(',', $fact->tags);
        } else {
            $arrTags = $tags;
        }
        
		$this->data['title'] = $fact->title;
		$this->data['fact'] = $fact;
		$this->data['id'] = $id;
		$this->data['tags'] = $arrTags;
        $this->data['slug'] = $fact->slug;
		return $this->loadTheme('facts.customize', $this->data);
    }

    public function _generate_breadcrumbs_array($id) {
		// $homepage_url = url('/');
		// $breadcrumbs_array[$homepage_url] = 'Home';
		
		// get sub cat title
		$sub_cat_title = 'Facts';
		// get sub cat url
		$sub_cat_url = url('facts');
	
		$breadcrumbs_array[$sub_cat_url] = $sub_cat_title;
		return $breadcrumbs_array;
	}

}
