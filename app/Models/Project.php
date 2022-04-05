<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Model   Project
|
|
|
|*/



class Project extends Model
{



    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name',
      'enterprise_id',
      'description',
      'slug',
      'device',
      'dueDate',
      'estimatedBudget',
      'realBudget',
      'startDate'
    ];

    use SoftDeletes;
    protected $dates = ['deleted_at'];


    /**
     * Get all of the roles for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function enterprise()
    {
      return $this->belongsTo(Enterprise::class);
    }


    /**
     * Get all of the pictures for projects
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function pictures()
    {
      return $this->hasMany(Picture::class,'owner');
    }



        /**
         * Get all of the plans for project
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */

        public function plans()
        {
          return $this->hasMany(Plan::class,'project_id');
        }


    /**
     * Get all of the sites for the project
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function sites()
    {
        return $this->belongsToMany(Site::class);
    }



 /* --Generated with ❤ by Slugger ---*/


}
