<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource as Resource;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Resource   Plan
|
|
|
|*/


class Plan extends Resource
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
            'price'=>$this->price,
            'promotionDueDate'=>Carbon::createFromTimeStamp(strtotime($this->promotionDueDate))->diffForHumans(),
            'startDate'=>Carbon::createFromTimeStamp(strtotime($this->startDate))->diffForHumans() ,
            'dueDate'=>Carbon::createFromTimeStamp(strtotime($this->dueDate))->diffForHumans() ,
            'promotionPrice'=>$this->promotionPrice,
            'project'=>new ProjectResource($this->projet),
            'id' => $this->id,
            'slug' => $this->slug,
            'createdAt' => Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans() ,
            'updatedAt' => Carbon::createFromTimeStamp(strtotime($this->updated_at))->diffForHumans()


        ];
    }

     /* --Generated with ❤ by Slugger ---*/

}
