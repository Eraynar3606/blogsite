<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\blogdetay;
class anasayfacontroller extends Controller
{
    public function index(){
        $blog=blog::OrderByDesc('name')->paginate(6);
        $slider=blogdetay::where('slider',1)->get();
        $yan=blogdetay::where('yan',1)->get()->take(2);
        $yeni=blogdetay::where('yeni',1)->get()->take(6);
        return view('anasayfa' ,compact('blog' ,'slider','yan','yeni'));
        
    }
}
