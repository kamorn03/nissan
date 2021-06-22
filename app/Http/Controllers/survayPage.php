<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
class survayPage extends Controller
{

    public function survayProduct(Request $request , $type)
    {
        return view('questionnaire.product' ,compact('type'));    
    }

    public function survayLocation(Request $request)
    {
        return view('questionnaire.location');    
    }

    public function survayBrand(Request $request)
    {
        return view('questionnaire.brand');    
    }

    public function survayPeriod(Request $request)
    {
        return view('questionnaire.period');    
    }


    public function survayPersonal(Request $request)
    {
        return view('questionnaire.personal');    
    }


    public function finalPageSurvay(Request $request)
    {
        return view('questionnaire.final');    
    }

}
