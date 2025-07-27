<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
