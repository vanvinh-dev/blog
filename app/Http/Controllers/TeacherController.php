<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\member;
use App\Models\subject;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $member = member::where('chucvu','gv')->get();
         return view('teacher')->with('teacher',$member);
    }
    
    public function login()
    {

         return view('login');
    }
     public function themlich()
    {

         return view('themlichday');
    }
     public function postlogin(Request $re)
    {

        $matchThese = ['email' => $re->input('email'), 'password' => $re->input('password')];
        $results = member::where($matchThese)->get();
        if(count($results)>0){
             $re->session()->put('user',$results);
            if($results[0]['chucvu']=='gv'){
                return redirect('/themlich');        
            }else if($results[0]['chucvu']=='tbm'){
                        return redirect('/confirmSchedule');
                    }
        }else{
            echo 'Tài khoản bạn nhập không chính xác';
        }
       
        
         
    }
     public function suagv($id)
    {   
        $member = member::find($id);
        $subject = subject::all()->toArray();
        return view('suagv')->with('member',$member)->with('subject', $subject);
    }
      public function indexoff()
    {
        //  $member = member::where('type','gv')->toArray();
         return view('index');
    }
    public function postsuagv(Request $request,$id)
        {
   
            $member = member::find($id);
            $member ->ma = $request->input('ma');
            // $member ->bachoc = $request->input('bachoc');
            // $member ->bachoc =  $request->input('ten');
            $member ->mabomon = $request->input('mabomon');
            $member ->heso = $request->input('heso');
            $member ->phucap = $request->input('phucap');
            // $member ->chucvu = $request->input('chucvu');
            $member-> save();
            return redirect('/member');
        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher = Teacher::all();
        return view('teacher',['$teacher'=>$teacher,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher = new Teacher();
        $teacher ->name = $request->input('name');
        $teacher ->age = $request->input('age');
        $teacher ->faculty = $request->input('faculty');
        $teacher ->subject = $request->input('subject');
        $teacher-> save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher =  Teacher::find($id);
        $teacher = Teacher::all();
        return view('teacher',['$teacher'=>$teacher,'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $teacher =  Teacher::find($id);
        $teacher = Teacher::all();
        return view('teacher',['$teacher'=>$teacher,'layout'=>'edit']);
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
        $teacher =  Teacher::find($id);
       
        $teacher ->name = $request->input('name');
        $teacher ->age = $request->input('age');
        $teacher ->faculty = $request->input('faculty');
        $teacher ->subject = $request->input('subject');
        $teache-> save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
         $member = member::destroy($id);
        return redirect('/member');
    }
}
