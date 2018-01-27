<?php

namespace App\Http\Controllers;
use Auth;
use App\addride;
use App\query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class admin_querycontroller extends Controller
{

    public function index($id)
    {
        $ride=addride::find($id);


        return view('admin.admin_addquery',['ride'=>$ride]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {



        //$users = User::find(Auth::user()->id);
        $ride['ride']=DB::table('new_trip')->where('user_id', Auth::id())->get();
        if (count($ride)>0){

            return view('admin.admin_query',$ride);
        }
        else{


            return view('admin.admin_query');


        }




    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request  )

    {


        $query=new query();
        $query->sender_email=Auth::User()->email;


        $query->post_id=$request->post_id;
        $query->sender_name=Auth::User()->name;
        $query->message=$request->message;
        $query->user_id=Auth::User()->id;
        $query->save();

        return redirect('admin');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {

        $query['query']=DB::table('query')->where('post_id',$id)->get();
        if (count($query)>0){

            return view('admin.admin_viewquery',$query);
        }
        else{


            return view('admin.admin_viewquery');


        }



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $query=query::find($id);
        return view('admin.admin_editquery',['ride'=>$query]);

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
        $query=new query();



        $query->message=$request->message;






        $query->save();

        return redirect('admin_viewquery');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('query')->where('id',$id)->delete();
        return redirect()->back();

    }

}
