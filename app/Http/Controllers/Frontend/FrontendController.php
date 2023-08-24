<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

=======
use App\Http\Requests\ContactRequest;
use App\Repositories\ContactRepository;
use Illuminate\Http\Request;
>>>>>>> c5b7ee35f7187edf8e8bf1db70752554ac336c1c

class FrontendController extends Controller
{
    // Get Home Page
    public function index()
    {
<<<<<<< HEAD
        //echo(Hash::make(1928374655));
		return view('frontend.index');
=======
        return view('frontend.index');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function contactStore(ContactRequest $request){
        (new ContactRepository)->storeByRequest($request);
        return redirect()->back()->with('message','Successfully Send');

>>>>>>> c5b7ee35f7187edf8e8bf1db70752554ac336c1c
    }
}
