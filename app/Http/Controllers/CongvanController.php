<?php

namespace App\Http\Controllers;
use App\Models\congvan;
use Illuminate\Http\Request;

class CongvanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $congvans  = congvan::all()->toArray();
        return view('congvan')->with('congvan',$congvans );
    }
     public function getdataCongvan()
    {
          $congvans = congvan::all();
        echo (string)$congvans;
    }

    public function saveconvan(Request $request)
    {

       $file = $request->filesTest;
       $file->move('upload', $file->getClientOriginalName());
       $congvans  = new congvan();
       $congvans->file = $file->getClientOriginalName();
       $congvans->Mota = $request->des;
       $congvans->loaivb = $request->loaivb;
       $congvans->linhvuc = $request->linhvuc;
       $congvans->ngaybanh = $request->ngaybanh;
       $congvans->ngayhieuluc = $request->ngayhieuluc;
       $congvans->status = 'active';
       $congvans->save();
       return redirect('/convan');
        
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
        //
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
        //
    }
}
