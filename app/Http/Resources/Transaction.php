<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource as Resource;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Resource   Transaction
|
|
|
|*/


class Transaction extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'amount'=>$this->amount,
            'currency'=>$this->currency,
            'status'=>$this->status,
            'buyer'=> new User($this->user),
            'payment_gate_way'=>$this->payment_gate_way,
            'token'=>$this->token,
            'id' => $this->id,
            'slug' => $this->slug,
            'plans' => Plan::collection($this->plans),
            'createdAt' => Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans() ,
            'updatedAt' => Carbon::createFromTimeStamp(strtotime($this->updated_at))->diffForHumans()
         ];
    }

     /* --Generated with ❤ by Slugger ---*/

}
