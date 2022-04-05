<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Model   Plan
|
|
|
|*/



class Plan extends Model
{



    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'price', 'promotionDueDate', 'promotionDueDate', 'startDate', 'dueDate', 'promotionPrice', 'project_id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];


        /**
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */

        public function projet()
        {
          return $this->belongsTo(Project::class,'project_id');
        }


 /* --Generated with ❤ by Slugger ---*/


}
