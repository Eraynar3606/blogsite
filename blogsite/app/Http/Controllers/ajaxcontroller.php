<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\iletisim;
use App\Models\blogyorum;

class ajaxcontroller extends Controller
{
    public function ajax(Request $request){

            $this->validate(request(),[
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required'

            ]);


        $mesaj=iletisim::create([
         'name'=>request('name'),
         'email'=>request('email'),
         'subject'=>request('subject')
        ]);

        return redirect()->back()->with('mesaj_tur','success')->with('mesaj','Mesaj Gönderidi');
    }


    


}
