<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Model   Post
|
|
|
|*/



class Post extends Model
{



    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
      'content',
      'user_id',
      'slug'
    ];


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




        /**
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */

        public function comments()
        {
          return $this->hasMany(Comment::class,'post_id');
        }


        /**
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */

        public function likes()
        {
          return $this->hasMany(Like::class,'post_id');
        }




        /**
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */

        public function shares()
        {
          return $this->hasMany(Share::class,'post_id');
        }




        /**
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */

        public function views()
        {
          return $this->hasMany(View::class,'post_id');
        }

    use SoftDeletes;
    protected $dates = ['deleted_at'];

 /* --Generated with ❤ by Slugger ---*/


}
