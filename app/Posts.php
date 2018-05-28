<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{

protected $table ='posts';

	 protected $fillable = [
        'titile', 'description', 'image','creativeField','toolsUsed','fellasTag','idUsers',
    ];
   
}