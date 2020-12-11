<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\congvangui;
use App\Models\member;
use App\Models\congvan;
use Illuminate\Support\Facades\DB;

class congvanguiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(! session('user')){
        return redirect('/login');
        }else{
            return view('qlcongvan');
        }
           
        //  return view('qlcongvan')->with('teacher',$congvangui);
    }

    public function getcongvanBySession()
    {
        if(! session('user')){
        return redirect('/login');
        }else{
            $session = session('user')[0]['id'];
            $member = member::where('id',$session)->get();
            $congvangui =   congvangui::where('bomon',$member[0]['mabomon'])->pluck('idconvan');
            $congvan = congvan::whereIn('id',$congvangui)->get();
            echo $congvan;
        }
           
        //  return view('qlcongvan')->with('teacher',$congvangui);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $re)
    {
        $arrToSend = request('data');
        congvangui::insert($arrToSend);
        dd($arrToSend);
         return redirect('/convan');
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
