<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject1;

class scheduleController extends Controller
{
    
    public function index()
    {
        return view('xemlich');
    }
    public function index1()
    {
        return view('themlichday');
    }
    public function getmonhoc()
    {
        $subject1 = subject1::all();
        echo (string)$subject1;
    }
}
