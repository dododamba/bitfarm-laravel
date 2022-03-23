<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Model   Site
|
|
|
|*/



class Site extends Model
{



    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'region_id', 'area', 'areaUnity', 'lat', 'lng', 'description'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];


    /**
     * Get all of the pomps for site
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function pompes()
    {
      return $this->hasMany(Pomp::class);
    }

 /* --Generated with ❤ by Slugger ---*/


}
