<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FrontController extends Controller
{
    function index()
    {
        return view('front.index');
    }
    function product($id)
    {
        return view('front.product');
    }
    function category($id)
    {
        return view('front.category');
    }
}
