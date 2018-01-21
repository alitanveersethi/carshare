<?php

namespace App\Http\Controllers;


use App\query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class admin_querycontroller extends Controller
{

    public function index()
    {
        //
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
        $query=new query();
        $query->sender_email=$request->sender_email;
        $query->sender_subject=$request->sender_subject;

        $query->sender_name=$request->sender_name;
        $query->message=$request->message;
        $query->user_id=$request->user_id;

        $query->save();
        return redirect('admin');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $query['query']=DB::table('query')->get();
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
        $query->sender_email=$request->sender_email;
        $query->sender_subject=$request->sender_subject;
        $query->destination_city=$request->destination_city;
        $query->sender_name=$request->sender_name;
        $query->message=$request->message;
        $query->user_id=$request->user_id;





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
        return redirect('admin_viewquery');

    }

}
