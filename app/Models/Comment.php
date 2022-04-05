<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/*
|--------------------------------------------------------------------------
| 
|--------------------------------------------------------------------------
|
| Model   Comment
|
|
|
|*/



class Comment extends Model
{

    

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['content', 'user_id', 'post_id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

 /* --Generated with ❤ by Slugger ---*/


}
