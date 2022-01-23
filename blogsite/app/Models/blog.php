<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $table="blog_table";
    protected $guarded=[];



    public function blog(){

        return $this->hasMany('App\Models\blogyorum');
    }

    public function user(){

        return $this->hasMany('App\Models\blogyorum');
    }
    
   


}
