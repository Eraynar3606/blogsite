<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogdetay extends Model
{
    use HasFactory;
    protected $table="blog_detay_table";
    protected $guarded=[];

    public function blog(){

        return $this->belongsTo('App\Models\blog');
    }
}
