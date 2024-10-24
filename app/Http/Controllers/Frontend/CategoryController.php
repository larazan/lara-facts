<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $this->data['title'] = "Categories";
        $this->data['categories'] = Category::all();
		return $this->loadTheme('category.index', $this->data);
    }

    public function detail()
    {
        $this->data['title'] = "Detail";
		return $this->loadTheme('category.detail', $this->data);
    }
    
}
