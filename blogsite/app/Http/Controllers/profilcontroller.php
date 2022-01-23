<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\blogyorum;

class profilcontroller extends Controller
{
public function index(Request $request){


    if(request()->isMethod('POST')){
        $uye=auth()->user();
        
        
        $uye->name=$request->name;
        $uye->email=$request->email;
        $uye->save();
        return redirect()->back();





    }



    $uye=auth()->user()->id;
    $bilgi=User::find($uye);




    return view('profil',compact('bilgi'));
}
public function yorum(Request $request ){

    $user=auth()->user()->name;

    $comments=blogyorum::where('user' ,$user)->get();
       return view('comments' ,compact('comments'));

}


}
