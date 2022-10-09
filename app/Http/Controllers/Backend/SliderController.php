<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sliders'] = Slider::latest()->get();
        return view('backend.slider.index-slider',$data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.create-slider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'slider_image'=>'required'
        ]);
        $data = new Slider();
        $image = $request->file('slider_image');
        if($image){
            $imageName = time().'_'.Uniqid().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploaded/slider'),$imageName);
            $data->image = '/uploaded/slider/'.$imageName;
        }
        $data->save();
        $notification = array(
            'message' => 'Slider Inserted!.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Slider::find($id);
        return view('backend.slider.edit-slider',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->validate($request,[
        //     'slider_image'=>'required'
        // ]);
        $data = Slider::find($id);
        $image = $request->file('slider_image');
        if($image){
            $imageName = time().'_'.Uniqid().'.'.$image->getClientOriginalExtension();
            $imagepath = $data->image;
            @unlink(public_path($imagepath));
            $image->move(public_path('uploaded/slider'),$imageName);
            $data->image = '/uploaded/slider/'.$imageName;
        }
        $data->save();
      
        $notification = array(
            'message' => 'Slider Updated!.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Slider::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Slider Deleted!.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }
    public function status(Request $request, $id)
    {
        $data = Slider::find($id);
        if($request->status == 1){
            $data->status = $request->status;
        }else{
            $data->status = 0;
        }

        $data->save();

        $notification = array(
            'message' => 'Status changed successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
