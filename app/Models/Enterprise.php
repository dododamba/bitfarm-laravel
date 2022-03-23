<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Model   Enterprise
|
|
|
|*/



class Enterprise extends Model
{



    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
          'name',
          'description',
          'city',
          'facebook',
          'twitter',
          'instagram',
          'telephone',
          'logo',
          'website',
          'user_id',
          'verified',
          'lng',
          'lat'
    ];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     * Get all of the projects for the enterprise
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }


 /* --Generated with ❤ by Slugger ---*/


}
