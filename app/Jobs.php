<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $table ='job';

	 protected $fillable = [
        'employment', 'description','creativeField','hours','country','city'
    ];

      public function user(){

    	return $this->belongsTo(User::class);

    }
}
