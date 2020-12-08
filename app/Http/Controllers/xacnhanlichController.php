<?php

namespace App\Http\Controllers;
use App\Models\schedule;

use Illuminate\Http\Request;

class xacnhanlichController extends Controller
{
    public function index()
    {     $chedule = schedule::where('status', 'pending')->get();
         return view('xacnhanlich')->with('chedule',$chedule);
    }
    public function editSchedule(Request $request,$id)
    {    
        $chedule = schedule::find($id);
        $chedule->status  = 'active';
        $chedule->save();
        return redirect('/confirmSchedule');
    }
}
