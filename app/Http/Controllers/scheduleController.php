<?php
use Illuminate\Support\Facades\Auth;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject1;
use App\Models\lop;
use App\Models\schedule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class scheduleController extends Controller
{
    
    public function index()
    {
        return view('xemlichday');
    }
    public function view()
    {
        if(! session('user')){
        return redirect('/login');
        }else{
            $session = session('user')[0]['id'];
            $chedule = schedule::where('idgv',$session)->where('status', 'active')->get();
            return view('xemlich')->with('chedule',$chedule);
        }
    }
    public function index1()
    {
        return view('themlichday');
    }
    public function viewSchedule()
    {
        return view('themlichday');
    }
    public function getmonhoc()
    {
        $subject1 = subject1::all();
        echo (string)$subject1;
    }
     public function getlophoc()
    {
        $classss = lop::all();
        echo (string)$classss;
    }
     public function saveSchedule(Request $re)
    {
         $arrToSend = request('data');
         schedule::insert($arrToSend);
         return redirect('/member');
    }
    public function testsession(Request $request)
    {
       $request->session()->put('key', 'value');
       
    }
    public function gettestsession()
    {
        $user = Auth::user();
        dd($user);
    }
}
