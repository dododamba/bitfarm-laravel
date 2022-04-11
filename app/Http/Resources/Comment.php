<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource as Resource;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Resource   Comment
|
|
|
|*/


class Comment extends Resource
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
            'content'=>$this->content,
            'user'=> new User($this->author),
            'post_id'=>$this->post_id,
            'id' => $this->id,
            'slug' => $this->slug,
            'createdAt' => Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans() ,
            'updatedAt' => Carbon::createFromTimeStamp(strtotime($this->updated_at))->diffForHumans()


        ];
    }

     /* --Generated with ❤ by Slugger ---*/

}
