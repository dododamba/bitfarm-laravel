<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Model   Transaction
|
|
|
|*/



class Transaction extends Model {



    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['amount', 'currency', 'status', 'user_id', 'payment_gate_way', 'token','slug'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function plans()
    {
        return $this->belongsToMany(Plan::class);
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

    public function user()
    {
      return $this->belongsTo(User::class);
    }


 /* --Generated with ❤ by Slugger ---*/


}
