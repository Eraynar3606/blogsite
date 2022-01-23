<?php
namespace App\Http\Controllers\Yonetim;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\blogdetay;
use App\Models\User;
use App\Models\iletisim;
class yonetimcontroller extends Controller
{
    public function index(){
        if(request()->isMethod('POST')){
         $this->validate(request(),[
          'email'=>'required|email',
          'password'=>'required'
         ]);
       if(auth()->guard('yonetim')->attempt(['email'=>request('email'), 'password'=>request('password')], request()->has('benihatirla'))){

return redirect()->route('yonetimanasayfa');

       }else{

        return redirect()->back()->withInput()->withErrors(['email'=>'Hata']);
       }
        }
        return view('yonetim.yonetimindex');
    }
    public function kapat(){

        auth()->guard('yonetim')->logout();
        request()->session()->regenerate();
        return redirect()->route('index');
    }
    public function anasayfa(){

        $al=blog::OrderByDesc('name')->paginate(3);
        $uye=User::OrderByDesc('name')->paginate(3);
        $mesaj=iletisim::OrderByDesc('created_at')->paginate(4);
        $totalmesage=iletisim::all();
        $totaluser=User::all();
        $totalblog=blog::all();
        return view('yonetim.yonetimanasayfa', compact('al','uye','mesaj','totalmesage','totaluser','totalblog'));

    }

    public function mesaj(){
        $top=iletisim::all();
        $mesaj=iletisim::OrderByDesc('created_at')->paginate(4);
        return view('yonetim.yonetimmesaj', compact('top','mesaj'));

    }
        public function delete(Request $request){
      
             $id=request('id');

             $deleteblog=iletisim::where('id', $id)->delete();

            return redirect()->back();
 

        }


    public function duzenle(Request $request , $slug ){


       if(request()->isMethod('POST')){
         
    $this->validate(request(),[
     'name'=>'required',
     'subject'=>'required'
    ]);
     $id=request('id');
     $blog=blog::find($id);
     $name=request('name');
     $subject=request('subject');
     $blog->name=$name;
     $blog->subject=$subject;
     $blog->slug=$name;
     $blog->save();
       }
     $slug=$request->slug;
     $al=blog::where('slug', $slug)->firstOrFail();
         return view('yonetim.yonetimdüzenle', compact('al'));
        
    }



    public function sil(Request $request , $slug ){

        $slug=$request->slug;
        $al=blog::where('slug', $slug)->delete();
        return redirect()->back();
       }



       public function create(Request $request){  
        if(request()->isMethod('POST')){
    
        $create=Blog::create([
         'name'=>request('name'),
         'slug'=>request('name'),
         'subject'=>request('subject'),
         
         
        
       ]);
 
      
       return redirect()->route('yonetimanasayfa');  
     
        }

       
        return view('yonetim.yonetimekle');
       }
 

       public function show(Request $request){
        $blogid=request('id');
        $showslider=request('showslider');
        $showright=request('showright');
        $shownew=request('shownew');
        $editblog=blogdetay::create([
        'blog_id'=>$blogid,
        'slider'=>$showslider,
        'yan'=>$showright,
        'yeni'=>$shownew
        ]);
        return redirect()->back();
       }








}
