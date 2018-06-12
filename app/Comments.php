<?php

namespace App;
use App\Posts;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comments extends Model
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

}
