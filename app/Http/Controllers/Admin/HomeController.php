<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;

class HomeController extends Controller
{   
    public function index(){
        return view('admin.home');
    }
}
