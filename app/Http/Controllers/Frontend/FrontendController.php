<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Repositories\ContactRepository;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // Get Home Page
    public function index()
    {
        return view('frontend.index');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function contactStore(ContactRequest $request){
        (new ContactRepository)->storeByRequest($request);
        return redirect()->back()->with('success','Successfully Send');

    }
}
