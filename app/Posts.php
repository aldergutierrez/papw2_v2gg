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
   
}