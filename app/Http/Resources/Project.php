<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource as Resource;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Resource   Project
|
|
|
|*/


class Project extends Resource
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
            'device'=>$this->device,
            'dueDate'=>Carbon::createFromTimeStamp(strtotime($this->dueDate))->diffForHumans() ,
            'estimatedBudget'=>$this->estimatedBudget,
            'realBudget'=>$this->realBudget,
            'startDate'=>Carbon::createFromTimeStamp(strtotime($this->startDate))->diffForHumans() ,
            'id' => $this->id,
            'slug' => $this->slug,
            'entreprise' => new EnterpriseResource($this->enterprise),
            'photos' => Picture::collection($this->pictures),
            'createdAt' => Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans() ,
            'updatedAt' => Carbon::createFromTimeStamp(strtotime($this->updated_at))->diffForHumans()


        ];
    }

     /* --Generated with ❤ by Slugger ---*/

}
