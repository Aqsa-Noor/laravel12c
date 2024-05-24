<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\student;
class MyFirstController extends Controller

{
    //

            public function myData(){
             $allStudent = ['ali','aqsa','aarhama','saad','hamza'];
             return view('index',compact('allStudent'));
            }
            public function insertData(Request $req){
               $user = new student();
               $user->name = $req->uName;
               $user->email = $req->uEmail;
               $user->password = $req->uPassword;
               $user->save();
              return redirect('index');

               }
               public function showData(){
                    $user1 = student::all();
                    return view('select',compact('user1'));
 
                }
                public function showUpdatedData($id){
                    $user = student::find($id);
                    return view('update',compact('user'));
                    
                    
                        }
           public function updateData(Request $req){
            $user = student::find($req->uId);
            $user->name = $req->uName;
               $user->email = $req->uEmail;
               $user->password = $req->uPassword;
               $user->save();
              return redirect('select');
           }
           public function Delete($id){
            $user=student::find($id);
            $user->delete();
            // echo "<script>
            // alert('delete data');
            // </script>";
            
            return redirect("select");
          
           }

}
?>