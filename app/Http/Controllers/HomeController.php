<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //home page
    public function homePage()
    {
        return view('admin.home');
    }
}
