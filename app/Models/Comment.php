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
    protected $fillable = ['content', 'user_id', 'post_id','slug'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];



        /**
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasOne
         */

        public function author()
        {
          return $this->belongsTo(User::class,'user_id');
        }

          /**
          *
          * @return \Illuminate\Database\Eloquent\Relations\HasMany
          */

                public function pictures()
                {
                  return $this->hasMany(Picture::class,'owner');
                }
 /* --Generated with ❤ by Slugger ---*/


}
