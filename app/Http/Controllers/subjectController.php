<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject;
use App\Models\khoa;

class subjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $subject = subject::all()->toArray();
         return view('subject')->with('subject',$subject);
        // return view('subject',['$subject'=>$subject,'layout'=>'index']);
    }
    public function themmon()
    {
        $khoa  = khoa::all()->toArray();
        return view('themmon')->with('khoa',$khoa );
    }

    public function getdatabomon()
    {
          $subject = subject::all();
        echo (string)$subject;
    }

     public function suamon($id)
    {   
        $subject = subject::find($id);
        $khoa  = khoa::all()->toArray();
        return view('suamon')->with('subject',$subject)->with('khoa',$khoa );
    }
     public function postsuamon(Request $request,$id)
    {
        $subject = subject::find($id);
        $subject->mamh = $request->input('mamh');
        $subject->name = $request->input('name');
         $subject->tinchi = $request->input('tinchi');
          $subject->khoa = $request->input('khoa');
        $subject->save();
        return redirect('/qlmonhoc');
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
        $Subject  = new subject();
        $Subject->mamh = $request->input('mamh');
        $Subject->name = $request->input('name');
        $Subject->khoa = $request->input('khoa');
        $Subject->tinchi = $request->input('tinchi');
        $Subject->save();
        return redirect('/qlmonhoc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = subject::destroy($id);
        return redirect('/qlmonhoc');
    }
}
