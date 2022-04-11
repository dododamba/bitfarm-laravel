<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource as Resource;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Resource   User
|
|
|
|*/


class User extends Resource
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
            'firstName'=>$this->firstName,
            'lastName'=>$this->lastName,
            'avatar'=>$this->avatar,
            'birth'=>$this->birth,
            'country_id'=>$this->country_id,
            'email'=>$this->email,
            'password'=>$this->password,
            'telephone'=>$this->telephone,
            'roles'=>Role::collection($this->roles),
            'id' => $this->id,
            'account_is_configured' => $this->account_is_configured,
            'slug' => $this->slug,
            'certification' => new Ceritification($this->certification),
            'enterprise' => new EnterpriseResource($this->enterprise),
            'createdAt' => Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d-m-Y'),
            'updatedAt' => Carbon::createFromFormat('Y-m-d H:i:s', $this->updated_at)->format('d-m-Y')


        ];
    }

     /* --Generated with ❤ by Slugger ---*/

}
