<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Model   Region
|
|
|
|*/



class Region extends Model
{



    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];


    /**
     * Get all of the roles for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function country()
    {
      return $this->belongsTo(Country::class);
    }



        /**
         * Get all of the projects for the enterprise
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function sites()
        {
            return $this->hasMany(Site::class);
        }

 /* --Generated with ❤ by Slugger ---*/


}
