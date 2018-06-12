<?php

namespace App;
use App\Posts;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

 
class Comments extends Model
{
    use SoftDeletes;
    protected $table = 'comments';  
}