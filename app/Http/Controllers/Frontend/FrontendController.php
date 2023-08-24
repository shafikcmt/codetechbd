<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class FrontendController extends Controller
{
    // Get Home Page
    public function index()
    {
        //echo(Hash::make(1928374655));
		return view('frontend.index');
    }
}
