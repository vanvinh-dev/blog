<?php

namespace App\Http\Controllers;
use App\Models\schedule;

use Illuminate\Http\Request;

class xacnhanlichController extends Controller
{
    public function index()
    {
         return view('xacnhanlich');
    }
}
