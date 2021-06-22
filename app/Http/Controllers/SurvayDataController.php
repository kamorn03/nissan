<?php

namespace App\Http\Controllers;

use App\Models\SurvayData;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Yajra\Datatables\Datatables;


class SurvayDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.manage-survey.index');
    }


    public function storeProduct(Request $request)
    {
        //
        // dd($request);
        // $data
        // session()->regenerate();
        Session::put('type', $request->type);
        Session::put('product', $request->product_text);
        return redirect()->route('survay.location');
    }

    public function storeLocation(Request $request)
    {
        //
        // dd($request);
        // $data
        Session::put('location', $request->location);
        return redirect()->route('survay.brand');
    }

    public function storeBrand(Request $request)
    {
        Session::put('brand', $request->selected_brand);
        return redirect()->route('survay.personal');
    }
    
    public function storePeriod(Request $request)
    {
        Session::put('period', $request->period);
        return redirect()->route('survay.personal');
    }

    public function confirmStorePersonal(Request $request)
    {
        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'time' => $request->time,
        ];

        Session::put('name', $request->name);
        Session::put('phone', $request->phone);
        Session::put('time', $request->time);

        // Session::get('type');
        $data = SurvayData::create([
            'type' => Session::get('type'),
            'product' => Session::get('product'),
            'location' => Session::get('location'),
            'brand' => Session::get('brand'),
            'period' => Session::get('period'),
            'name' => $request->name,
            'time' => $request->time,
            'phone' => $request->phone,
        ]);
        //  save to db
        return redirect()->route('survay.personal')->with('success' , 'save data success!');
    }


    public function surveyList()
    {
        return Datatables::of(SurvayData::query()->orderBy('created_at', 'ASC'))->make(true);
    }

    // clear
    public function clearSurvey()
    {
        Session::flush();
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
     * @param  \App\Models\SurvayData  $survayData
     * @return \Illuminate\Http\Response
     */
    public function show(SurvayData $survayData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SurvayData  $survayData
     * @return \Illuminate\Http\Response
     */
    public function edit(SurvayData $survayData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SurvayData  $survayData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SurvayData $survayData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SurvayData  $survayData
     * @return \Illuminate\Http\Response
     */
    public function destroy(SurvayData $survayData)
    {
        //
    }
}
