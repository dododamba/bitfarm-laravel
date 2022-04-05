<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Model   Country
|
|
|
|*/



class Country extends Model
{



    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'iso', 'indicatif', 'country_id','slug'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];


    /**
     * Get all of the regions for the country
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function regions()
    {
        return $this->hasMany(Region::class);
    }


 /* --Generated with ❤ by Slugger ---*/


}
