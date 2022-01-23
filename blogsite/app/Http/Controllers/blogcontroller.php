<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\blog;
use App\Models\blogyorum;
use App\Models\blogdetay;
use Carbon;
class blogcontroller extends Controller
{
    public function blog(){

         $blog=blog::OrderByDesc('name')->paginate(3);
         $goster=blogdetay::where('slider',1)->get();
        return view('blog' ,compact('blog' , compact('goster')));
    }

    public function arama(Request $request){

          
      
     
        $this->validate(request(),[
          'ara'=>'required'
       

        ]); 
         $ara=$request->input('ara');
              $blog=blog::where('name','like', "%$ara%")->paginate(3);
        request()->flash();
        return view('arama', compact('ara', 'blog') );  
      
    
    }


    public function blogdetay(Request $request , $slug){

         
        $blog=blog::where('slug', $slug)->firstOrFail();


        $yorum=$blog->blog;
       
        return view('blogdetay', compact('blog','yorum'));
    }

    public function blogmesage(){

        if(auth()->check()){   
         $blog=blogyorum::create([
        'blog_id'=>request('blogid'),
        'user_name'=>auth()->user()->name,
        'yorum'=>request('subject')
        ]);
        return redirect()->back()->with('mesaj_tur','success')->with('mesaj','Mesaj Gönderidi');
        }else {

            return redirect()->route('giris')->with('mesaj_tur','success')->with('mesaj','Mesaj Gönderidi');
        }

        

    }
    

}
