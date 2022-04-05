<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Plan;
use App\Models\Country;
use App\Models\TypeCulture;
use App\Models\Site;

use App\Http\Resources\Project as ProjectResource;
use App\Http\Resources\Plan as PlanResource;
use App\Http\Resources\Country as CountryResource;
use App\Http\Resources\TypeCulture as TypeCultureResource;
use App\Http\Resources\Site as SiteResource;


class DashBoardController extends Controller
{
    public function index()
    {

      $data = [
        'projects' => ProjectResource::collection(Project::orderBy('id','desc')->get()),
         'plans' =>  PlanResource::collection(Plan::orderBy('id','desc')->get()),
        'varieties' => TypeCultureResource::collection(TypeCulture::orderBy('id','desc')->get()),
        'sites' =>  SiteResource::collection(Site::orderBy('id','desc')->get()),
        'countries' =>  CountryResource::collection(Country::orderBy('id','desc')->get()),
      ];


       return response()->json(
           [
               '_embeded'=> $data,
               'message'=>'Mobile dashboard project',
               'status' => true,
           ],200,['Content-Type'=>'application/json']);


    }
}
