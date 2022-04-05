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
      return $this->hasMany(Pomp::class,'id','site_id');
    }


    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function typeCultures()
    {
      return $this->belongsToMany(TypeCulture::class)->withPivot('site_id ','type_culture_id');
    }


    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function region()
    {
      return $this->belongsTo(Region::class);
    }


 /* --Generated with ❤ by Slugger ---*/


}
