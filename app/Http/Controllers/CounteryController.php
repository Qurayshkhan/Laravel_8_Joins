<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\countery;

class CounteryController extends Controller
{
    //
    public function index(){

        $data=countery::join('states','states.country_id','=','counterys.id')->join('cities','cities.state_id','=','states.id')->get(['counterys.country_name','states.state_name','cities.city_name']);
        return view('joins',['data'=>$data]);
    }

}
