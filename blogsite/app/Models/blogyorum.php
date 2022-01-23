<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogyorum extends Model
{
    use HasFactory;
    protected $table="blog_yorum_table";
    protected $guarded=[];

    public function blogs(){

        return $this->belongsTo('App\Models\blog');
    }



}
