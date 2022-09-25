<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.index');
    }
    public function categoryForm(){
        return view('admin.forms');
    }
    public function categoryList(){
        return view('admin.tables');
    }
    public function productForm(){
        return view('admin.forms');
    }
    public function productList(){
        return view('admin.tables');
    }
}
