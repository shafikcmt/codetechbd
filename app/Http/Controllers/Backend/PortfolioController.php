<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rules\Unique;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->get();
        return view("backend.portfolio.index-portfolio",compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.portfolio.create-portfolio");
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
            'portfolio_name'=>'required',
            'portfolio'=>'required',
            'link'=>'required'
        ]);

        $data = new Portfolio();
        $data->project_name = $request->portfolio_name;
        $data->project_link = $request->link;

        $image = $request->file("portfolio");
        if(!empty($image)){
            $imageName = time().'_'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploaded/portfolio'),$imageName);
            $data->project_image = '/uploaded/portfolio/'.$imageName;
        }

        $data->save();

        $notification = array(
            'message'=>'Portfolio added successflly!',
            'alert-type'=>'success'
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
        //
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
        $this->validate($request,[
            'portfolio_name'=>'required',
            'portfolio'=>'required',
            'link'=>'required'
        ]);

        $data = new Portfolio();
        $data->project_name = $request->portfolio_name;
        $data->project_link = $request->link;

        $image = $request->file("portfolio");
        if(!empty($image)){
            $imageName = time().'_'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploaded/portfolio'),$imageName);
            $data->project_image = '/uploaded/portfolio/'.$imageName;
        }

        $data->save();

        $notification = array(
            'message'=>'Portfolio added successflly!',
            'alert-type'=>'success'
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
        //
    }
    public function status(Request $request, $id){
        $data  = Portfolio::find($id);
        if($request->status == 1){
            $data->status = $request->status;

        }else{
            $data->status = 0;
        }

    }
}
