<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Model   TypeCulture
|
|
|
|*/



class TypeCulture extends Model
{


  protected $table = 'typecultures';


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

 /* --Generated with ❤ by Slugger ---*/


}
