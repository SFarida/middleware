<?php

namespace App\Http\Controllers;
use App\Agency;

use Illuminate\Http\Request;

class AgencyController extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
*/
    public function musangoAgency(Request $request){
            $musango = Agency::find(1);
            return view('musango');
        
    }

    public function mondialAgency(){
        $mondial = Agency::find(2);
        return view('mondial');
    }

    public function diamondAgency(){
        $diamond = Agency::find(3);
        return view('diamond');
    }
}
