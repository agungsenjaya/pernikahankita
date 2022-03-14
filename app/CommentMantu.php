<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentMantu extends Model
{
    protected $fillable = ['name','present','message','client_id','created_at'];
    protected $dates = ['created_at'];
}
