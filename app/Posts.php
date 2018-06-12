<?php

namespace App;
use App\User;
use App\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
 use SoftDeletes;
 
protected $table ='posts';

	 protected $fillable = [
        'title', 'description','image','creativeField','toolsUsed','fellasTag'
    ];

      protected $dates = ['deleted_at'];

    public function user(){

    	return $this->belongsTo(User::class);

    }
   
   public function wasCreatedBy($user)
    {
        if( is_null($user) ) {
            return false;
        }
        return $this->idUsers === $user->id;
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }

}