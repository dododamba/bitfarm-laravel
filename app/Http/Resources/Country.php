<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource as Resource;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Resource   Country
|
|
|
|*/


class Country extends Resource
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
            'iso'=>$this->iso,
            'indicatif'=>$this->indicatif,
            'id' => $this->id,
            'slug' => $this->slug,
            'regions'=>Region::collection($this->regions),
            'createdAt' => Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d-m-Y'),
            'updatedAt' => Carbon::createFromFormat('Y-m-d H:i:s', $this->updated_at)->format('d-m-Y')


        ];
    }

     /* --Generated with ❤ by Slugger ---*/

}
