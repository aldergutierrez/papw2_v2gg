<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jobs extends Model
{
	 use SoftDeletes;

    protected $table ='job';

	 protected $fillable = [
        'employment', 'description','creativeField','hours','country','city'
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
