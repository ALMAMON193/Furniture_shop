<?php

namespace App\Http\Controllers\Web\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('backend.admin.product.index');
    }

    public function create(){
        return view('backend.admin.product.create');
    }
}
