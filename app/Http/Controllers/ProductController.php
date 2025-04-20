<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request): \Illuminate\Contracts\View\View
    {
        return view('index');
    }

    public function list(Request $request): \Illuminate\Contracts\View\View
    {
        return view('catalog');
    }
}
