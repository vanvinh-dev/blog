<?php

namespace App\Http\Controllers;
use App\Models\khoa;
use Illuminate\Http\Request;

class khoacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hienthi()
    {
        $khoa = khoa::all()->toArray();
        return view('khoa')->with('khoa',$khoa);
    }
    public function themkhoa()
    {
        $khoa = khoa::all()->toArray();
        return view('themkhoa')->with('khoa',$khoa);
    }
    public function suakhoa($id)
    {   
        $khoa = khoa::find($id);
        return view('suakhoa')->with('khoa',$khoa);
    }
     public function postsuakhoa(Request $request,$id)
    {
        $khoa = khoa::find($id);
        $khoa->tenkhoa = $request->input('tenkhoa');
        $khoa->makhoa = $request->input('makhoa');
        $khoa->save();
        return redirect('/khoa');
    }
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sp  = new khoa();
        $sp->tenkhoa = $request->input('tenkhoa');
        $sp->makhoa = $request->input('makhoa');
        $sp->save();
        return redirect('/khoa');
    }
    public function them(Request $request)
    {
       
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
        $khoa = khoa::destroy($id);
        return redirect('/khoa');
    }
}
