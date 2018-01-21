<?php

namespace App\Http\Controllers;
use App\addride;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class search extends Controller
{
    public function search(Request $req){

        if(!empty($req)){

            $data['data'] =DB::table('new_trip')->where([
                ['source_city','like',$req->source_city.'%'],
                ['destination_city','=',$req->destination_city]
            ])->get();
            // $myarray=['info'=>$data];
            // return Response::json($myarray);

            return view('user.search',$data);
        }
        if(empty($req)){

            $data="data Not Found";
            return view('user.search');
        }
    }
}
