<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $this->data['title'] = "Categories";
		return $this->loadTheme('category.index', $this->data);
    }
}
