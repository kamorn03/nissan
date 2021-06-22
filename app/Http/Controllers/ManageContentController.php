<?php

namespace App\Http\Controllers;

use App\Models\ManageContent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = ManageContent::first();
        return view('admin.manage-content.index' ,compact('content'));
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
     * @param  \App\Models\ManageContent  $manageContent
     * @return \Illuminate\Http\Response
     */
    public function show(ManageContent $manageContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManageContent  $manageContent
     * @return \Illuminate\Http\Response
     */
    public function edit(ManageContent $manageContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ManageContent  $manageContent
     * @return \Illuminate\Http\Response
     */
    // ManageContent $manageContent
    public function update(Request $request ,$id)
    {
        // dd($request);
        // $this->validate($request, [
        //     'email' => 'required',
        // ]);
        $content = ManageContent::find($id);
        // $contact = [
        //     'location' => $request->location,
        //     'latitude' => $request->latitude,
        //     'longitude' => $request->longitude,
        //     'phone' => $request->phone,
        //     'email' => $request->email,
        //     'time' => $request->time,
        // ];

        $fileName1 = null;
        $fileName2 = null;
        if($request->file() && $request->image1) {
            $fileName1 = time().'_'.$request->image1->getClientOriginalName();
            if(!$request->image1->move(public_path('/img/content'), $fileName1)) {
                return false;
            }
        }
        if($request->file() && $request->image2) {
            $fileName2 = time().'_'.$request->image2->getClientOriginalName();
            if(!$request->image2->move(public_path('/img/content'), $fileName2)) {
                return false;
            }
        }
        $image_path_1 = null;
        $image_path_2 = null;
        if(isset($content)){
            $image_path_1 = $content->image_path_1;
            $image_path_2 = $content->image_path_2;
        }

        $insert = [
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keyword,
            "home_text_1" => $request->editor1,
            "home_text_2" => $request->editor2,
            "home_text_3" => $request->editor3,
            'image_path_1' => $fileName1 ? $fileName1 : $image_path_1,
            'image_path_2' => $fileName2 ? $fileName2 : $image_path_2,
            "facebook_link" =>  $request->facebook,
            "youtube_link" =>  $request->youtube,
            "instagram_link" =>  $request->instagram,
            "line_link" =>  $request->line,
            "global_link" =>  $request->global,
            "phone_footer" =>  $request->phone,
            "company_footer" => $request->company,
            "address_footer" => $request->address,
            "road_footer" => $request->road,
            "district_footer" => $request->district,
            "city_footer" => $request->city,
            "province_footer" => $request->province,
            "zipcode_footer" => $request->zipcode,
        ];

        if(isset($content)){
            $content->update($insert);
        }else{
            ManageContent::insertGetId($insert);
        }

        return redirect()->route('admin.content', ['cms' =>  $id])
            ->with('success','บันทึกข้อมูลสำเร็จ');   
      
        // ManageContent
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManageContent  $manageContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManageContent $manageContent)
    {
        //
    }
}
