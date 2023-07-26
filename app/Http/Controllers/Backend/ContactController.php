<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function inboxMessage(){
        $messages = Contact::get();
        return view('backend.inbox.index',compact('messages'));
    }
    public function delete($id){
        $data = Contact::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Message deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function inboxStatus(Request $request, $id)
    {
        $data = Contact::find($id);
        if($request->seen == 1){
            $data->seen = $request->seen;
        }else{
            $data->seen = 0;
        }

        $data->save();

        $notification = array(
            'message' => 'Status changed successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
