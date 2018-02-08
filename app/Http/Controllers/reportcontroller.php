<?php

namespace App\Http\Controllers;

use App\addride;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Sodium\add;

class reportcontroller extends Controller
{
    public function Reports(){




        $report['report']=DB::table('report')->get();

        $user['user']=DB::table('users')->orderBy('id', 'desc')->first();
        $post['post']=DB::table('new_trip')->orderBy('id', 'desc')->first();




        if (count($report)>0){

            return view('superadmin.viewreport',$report,['user'=>$user,'post'=>$post]);
        }
        else{


            return view('superadmin.viewreport');


        }







    }


}
