<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
class AttendanceController extends Controller
{
    public function store(Request $request){
       // dd($request->all());
       
        $attendance=new Attendance;

        $attendance->name= $request->name;
        $attendance->nic= $request->nic;
        $attendance->nopay= $request->nopay;
        $attendance->OverTime1= $request->OverTime1;
        $attendance->OverTime2= $request->OverTime2;
        $attendance->OverTime3= $request->OverTime3;
        $attendance->EarlyLeave= $request->EarlyLeave;
        $attendance->LateLeave= $request->LateLeave;
      

        $attendance->save();

    }
}
