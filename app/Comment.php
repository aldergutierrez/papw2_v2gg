<?php

namespace App;
use App\Posts;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

 
class Comment extends Model
{
    use SoftDeletes;
    //protected $table = 'comments';  
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function post() {
        return $this->belongsTo('App\Posts');
    }
}