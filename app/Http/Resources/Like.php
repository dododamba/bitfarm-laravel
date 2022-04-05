<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource as Resource;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Resource   Like
|
|
|
|*/


class Like extends Resource
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
            'user_id'=>$this->user_id,'post_id'=>$this->post_id,
            'id' => $this->id,
            'slug' => $this->slug,
            'createdAt' => Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d-m-Y'),
            'updatedAt' => Carbon::createFromFormat('Y-m-d H:i:s', $this->updated_at)->format('d-m-Y')


        ];
    }

     /* --Generated with ❤ by Slugger ---*/

}
