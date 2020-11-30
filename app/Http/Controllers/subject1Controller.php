<?php

namespace App\Http\Controllers;
use App\Models\subject;
use App\Models\subject1;
use App\Models\khoa;

use Illuminate\Http\Request;

class subject1Controller extends Controller
{
     public function index()
    {
         $subject = subject1::all()->toArray();
         return view('subject1')->with('subject',$subject);
        // return view('subject',['$subject'=>$subject,'layout'=>'index']);
    }
    public function themmon()
    {
        $subject  = subject::all()->toArray();
        return view('themmons')->with('subject',$subject );
    }

     public function suamon($id)
    {   
        $subject = subject1::find($id);
        $subjects  = subject::all()->toArray();
        return view('suamons')->with('subject',$subject)->with('subjects',$subjects );
    }
     public function postsuamon(Request $request,$id)
    {
        $subject = subject1::find($id);
       $subject->mamh = $request->input('mamh');
        $subject->name = $request->input('name');
        $subject->tinchi = $request->input('tinchi');
        $subject->chungchi = $request->input('chungchi');
        $subject->sotiethoc = $request->input('sotiethoc');
        $subject->mabomon = $request->input('mabomon');
        $subject->save();
        return redirect('/qlmonhocs');
    }
    
   
    public function store(Request $request)
    {
        $Subject  = new subject1();
        $Subject->mamh = $request->input('mamh');
        $Subject->name = $request->input('name');
        $Subject->tinchi = $request->input('tinchi');
        $Subject->chungchi = $request->input('chungchi');
        $Subject->sotiethoc = $request->input('sotiethoc');
        $Subject->mabomon = $request->input('mabomon');
        $Subject->save();
        return redirect('/qlmonhocs');
    }

    
    public function destroy($id)
    {
        $subject = subject1::destroy($id);
        return redirect('/qlmonhocs');
    }
}
