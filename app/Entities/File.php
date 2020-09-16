<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
     use SoftDeletes;

     protected $fillable = ['file_title','file_name','owner_id','user_id','file_size'];
}
