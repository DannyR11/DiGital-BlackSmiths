<?php

namespace thutonglms\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class loginController extends Controller
{
   public function saveUserInfo(Request $request){
       
    $name = $request->input('name');
    $surname = $request->input('surname');
    $number = $request->input('number');
    DB::insert('insert into users (name, surname, contactNr) values (?, ?, ?)',[$name, $surname, $number] );

    //loginController:: retreiveUserInfo();
   }

   public function retreiveUserInfo(){

    $values =  DB:: select('select * from users where name = ?',['Fiwa']);
    //foreach($values as $num){
    /*    $returner.= "<h2>".$values[0].Name."</h2><br>";
        $returner.= "<h2>".$values[0].Surname."</h2><br>";
        $returner.= "<h2>".$values[0].contactNr."</h2><br>";
*/

    //}
   // return view($values[0]);
   }
}
