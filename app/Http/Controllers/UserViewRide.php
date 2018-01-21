<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\addride;

class UserViewRide extends Controller
{
    public function show()
    {

        $ride['ride']=DB::table('new_trip')->get();
        if (count($ride)>0){

            return view('user.user_ride',$ride);
        }
        else{


            return view('user.user_ride');
        }


        }
    public function showhome()
    {

        $ride['ride']=DB::table('new_trip')->get();
        if (count($ride)>0){

            return view('user.layout',$ride);
        }
        else{


            return view('user.layout');
        }


    }
    public function postview($id)
    {
        $ride=addride::find($id);
        return view('user.postview',['ride'=>$ride]);


    }
}
