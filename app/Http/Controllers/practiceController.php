<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\employee;


class practiceController extends Controller
{
    //
    public function getdata(){
        $allstudents= ['ali','asad','saad','zain','aqsa'];
        return view('practindex', compact('allstudents'));

    }
    public function insertdata(Request $req) {
       $emp =new employee();
       $emp -> name = $req -> uname;
       $emp -> email =$req -> uemail;
       $emp -> pass = $req -> upass;
       $emp-> save();
       return redirect('practindex');


    }
    public function selectdata(){
        $emp = employee::all();
        return view('practselect', compact('emp'));
    }
    public function showupdateddata($id){
       $emp= employee::find($id);
       return view('practupdate', compact('emp'));

    }

}
