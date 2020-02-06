<?php

namespace App\Http\Controllers;
use App\model\time;
use App\model\timeEnd;
use App\model\timebreak;
use Illuminate\Http\Request;

class timeController extends Controller
{
    // function index
    function index(){
        $times = time::all();
        return view('timeHome', compact('times'));
    }

    // function insert
    function insert(Request $request){
        $time = new time($request->all());
        $time->save();
        return $this->index();
    }
    // 
    function createTime(Request $request){
        $time = new time($request->id);
        $time->save();
        return $this->index();
    }
// ---------------------------------------------------
    // time end
    function timeEnd(){
        $times = timeEnd::all();
        return view('timeHome', compact('times'));
    }
    // time 
    function timeDisplay(Request $request){
        $time = new timeEnd($request->all());
        $time->save();
        return $this->timeEnd();
    }
// ---------------------------------------------------
    // break time
    function breaktime(Request $request){
        $breaktimes =breaktime::all();
        return view('timeHome');
    }
    // breaktime submit
    function submitBreak(Request $request){
        $time = new breaktime($request->all());
        $time->save();
        return $this->index();
    }
    
}
