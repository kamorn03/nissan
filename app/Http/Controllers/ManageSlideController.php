<?php

namespace App\Http\Controllers;

use App\Models\ManageSlide;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageSlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = ManageSlide::all();
        return view('admin.manage-slide.index', compact('slide'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ManageSlide  $manageSlide
     * @return \Illuminate\Http\Response
     */
    public function show(ManageSlide $manageSlide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManageSlide  $manageSlide
     * @return \Illuminate\Http\Response
     */
    public function edit(ManageSlide $manageSlide)
    {
        //
    }

    public function upload(Request $request)
    {
        $image = $request->file('file');

        $imageName = time() .$image->getClientOriginalName(). '.' . $image->extension();

        $image->move(public_path('images/slide/'), $imageName);

        ManageSlide::create([
            'image_path' => "images/slide/".$imageName,
            'line_title' => "1",
            'description' => "1",
        ]);

        return response()->json(['success' => $imageName]);
    }

    public function fetch()
    {
        // where id 
        // $images = \File::allFiles(public_path('images\title'));
        $main = ManageSlide::all();
        $output = '<div class="row">';
        $number = 1;
        foreach($main as $image)
        {
        $output .= '
                <div class="col-md-3" style="margin-bottom:16px;" align="center">
                    <div>
                        <label for="" class="col-sm-2 col-form-label text-left"><b> '.$number.' . </b></label>
                        <img src="'.asset($image->image_path).'" class="img-thumbnail" width="175" height="175" style="height:175px;" />
                    </div>
                    <div>
                    <div class="form-group row mt-3">
                        <div class="row">
                            <button type="button" class="btn btn-primary remove_image" id="'.$image->id.'">Remove</button>
                        </div>
                    </div>
                    </div>
                </div>
        ';
        $number ++;
        }
        $output .= '</div>';
        echo $output; // dont forget sweet alert !!!!
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ManageSlide  $ManageSlide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManageSlide $manageSlide)
    {
        $id = $request->get('id');

        $main_title = ManageSlide::where('id',$id)->update([
            // 'image_path' => "images/title/".$imageName,
            'link' => $request->get('link')
        ]);
        // dd($request->get('link'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManageSlide  $manageSlide
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManageSlide $manageSlide)
    {
        //
    }

    function delete(Request $request)
    {
        $title = ManageSlide::where('id' , $request->get('id'))->first();
        $title->delete();
    }

}
