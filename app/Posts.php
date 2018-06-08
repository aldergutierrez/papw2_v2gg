<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{

protected $table ='posts';

	 protected $fillable = [
        'title', 'description','image','creativeField','toolsUsed','fellasTag'
    ];

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