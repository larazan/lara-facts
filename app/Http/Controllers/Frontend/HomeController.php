<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $this->data['title'] = 'Home';
        return $this->loadTheme('home', $this->data);
    }
}
