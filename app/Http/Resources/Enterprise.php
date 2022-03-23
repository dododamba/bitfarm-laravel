<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource as Resource;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Resource   Enterprise
|
|
|
|*/


class Enterprise extends Resource
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
            'name'=>$this->name,
            'description'=>$this->description,
            'city'=>$this->city,
            'facebook'=>$this->facebook,
            'twitter'=>$this->twitter,
            'instagram'=>$this->instagram,
            'telephone'=>$this->telephone,
            'logo'=>$this->logo,
            'website'=>$this->website,
            'user_id'=>$this->user_id,
            'verified'=>$this->verified,
            'lng'=>$this->lng,
            'lat'=>$this->lat,
            'id' => $this->id,
            'slug' => $this->slug,
            'projects' => Project::collection($this->projects),
            'createdAt' => Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d-m-Y'),
            'updatedAt' => Carbon::createFromFormat('Y-m-d H:i:s', $this->updated_at)->format('d-m-Y')


        ];
    }

     /* --Generated with ❤ by Slugger ---*/

}
