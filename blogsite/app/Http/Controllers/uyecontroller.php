<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
class uyecontroller extends Controller
{
    public function giris(){


        return view('giris');
    }

    public function kaydol(){


        return view('kaydol');
    }
       public function kayıtyap(){
         
        $this->validate(request(),[
        'name'=>'required',
        'email'=>'required|email',
        'password'=>'required|confirmed'
        ]);
          
       $user=User::create([
        'name'=>request('name'),
        'email'=>request('email'),
        'password'=>Hash::make(request('password'))

       ]);
        
       auth()->login($user);
       return redirect()->route('anasayfa');
       }
   public function cıkıs(){

         auth()->logout();
       request()->session()->regenerate();
       return redirect()->route('anasayfa');
   }
   
   public function girisyap(){
             

       if(auth()->attempt(['email'=>request('email'),'password'=>request('password')],request()->has('benihatirla'))){


        return redirect()->route('anasayfa');

       }else{

        $errors=['email'=>'Hatalı Giris'];
       }


}



}
