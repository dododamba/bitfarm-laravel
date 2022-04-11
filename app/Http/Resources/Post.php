<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource as Resource;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Resource   Post
|
|
|
|*/


class Post extends Resource
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
            'id' => $this->id,
            'slug' => $this->slug,
            'photos' => Picture::collection($this->pictures),
            'comments' => Comment::collection($this->comments),
            'likes' => Like::collection($this->likes),
            'shares' => Share::collection($this->shares),
            'views' => View::collection($this->views),
            'createdAt' => Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans() ,
            'updatedAt' => Carbon::createFromTimeStamp(strtotime($this->updated_at))->diffForHumans()


        ];
    }

     /* --Generated with ❤ by Slugger ---*/

}
