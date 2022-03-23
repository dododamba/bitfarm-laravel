<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Model   Pomp
|
|
|
|*/



class Pomp extends Model
{



    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name',
      'site_id',
      'atmospheric_pression', 'temperature', 'lat', 'lng', 'status'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];




 /* --Generated with ❤ by Slugger ---*/


}
