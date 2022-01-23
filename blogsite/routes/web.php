<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\anasayfacontroller;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\uyecontroller;
use App\Http\Controllers\profilcontroller;
use App\Http\Controllers\ajaxcontroller;
use App\Http\Controllers\Yonetim\yonetimcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[anasayfacontroller::class,'index'])->name('anasayfa');
Route::post('/message',[ajaxcontroller::class,'ajax'])->name('ajax_post');

Route::group(['prefix'=>'blogs'], function(){
Route::get('/blogs',[blogcontroller::class,'blog'])->name('blog');
Route::get('/blogs/{slug}',[blogcontroller::class,'blogdetay'])->name('blogdetay');
Route::match(['get', 'post'],'/search',[blogcontroller::class,'arama'])->name('ara');
Route::post('/blogmesage',[blogcontroller::class,'blogmesage'])->name('blogmesage');
});





Route::group(['prefix'=>'user'], function(){
Route::get('/login',[uyecontroller::class,'giris'])->name('giris');
Route::get('/sign up',[uyecontroller::class,'kaydol'])->name('kaydol');
Route::post('/sign up',[uyecontroller::class,'kayıtyap'])->name('kayıtyap');
Route::post('/sign in',[uyecontroller::class,'girisyap'])->name('girisyap');
Route::group(['middleware'=>'auth'], function(){
Route::get('/logout',[uyecontroller::class,'cıkıs'])->name('cıkıs');
Route::match(['get','post'],'/profile/{name}',[profilcontroller::class,'index'])->name('profil');
Route::get('/mycomments/{name}',[profilcontroller::class,'yorum'])->name('yorumlar');
});
});




Route::group(['prefix'=>'administor', 'namesapce'=>'Yonetim'], function(){
Route::redirect('/', '/administor/login');
Route::match(['get','post'], '/login',[yonetimcontroller::class,'index'])->name('index');
Route::group(['middleware'=>'yonetim'] , function(){
Route::get('/home',[yonetimcontroller::class,'anasayfa'])->name('yonetimanasayfa');
Route::get('/logout',[yonetimcontroller::class,'kapat'])->name('kapat');
Route::get('/message',[yonetimcontroller::class,'mesaj'])->name('mesajlar');
Route::post('/delete',[yonetimcontroller::class,'delete'])->name('delete');

Route::match(['get','post'],'/edit/{slug}',[yonetimcontroller::class,'duzenle'])->name('duzenle');

Route::get('/delete/{slug}',[yonetimcontroller::class,'sil'])->name('sil');
Route::get('/user',[yonetimcontroller::class,'user'])->name('user');
Route::match(['get','post'],'/create',[yonetimcontroller::class,'create'])->name('create');
Route::post('/show',[yonetimcontroller::class,'show'])->name('show');

});
});