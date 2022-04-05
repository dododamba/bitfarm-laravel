<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\Project as ProjectResource;
use App\Models\Project;
use App\Models\User;
use App\Models\Picture;

use App\Models\Site;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use App\Http\Resources\Enterprise as EnterpriseResource;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Controller   ProjectController
|
|
|
|*/


class ProjectController extends Controller
{




/**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

              if(!ProjectResource::collection(Project::all())->isEmpty()){
                  return response()->json(
                      [
                          'content'=> ProjectResource::collection(Project::all()),
                          'message'=>'list of Projects'
                      ],200,['Content-Type'=>'application/json']);

              }

    return response()->json(['message'=>'Projects empty !']);

  }




  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
      $item;
     if ($item= Project::create($request->all())) {

           if($request->images){

               foreach ($request->images as $image) {

                   $file =  'bit-farm-image-'.str_randomize(12). '.png';
                   $picture = convertToBase64($image,$file);


                  Storage::disk('local')->put($file,$picture);

                  copy($picture, public_path().'/projects/'.$picture);
                  unlink($picture);

                   Picture::create([
                       'name' =>  $file,
                       'slug' => 'media-'.str_randomize(25),
                       'alt' => $request->name,
                       'owner' => $item->id
                   ]);
               }
           }

                return response()->json(
                    [
                        'message' => ' Projet enregistré avec succès',
                        'status' => true
                     ],200,['Content-Type'=>'application/json']);

            }
     return response()->json(
         [
             'message'=>'store Project failed !',
             'status' => false
        ],200);
  }




  /**
   * Display the specified resource.
   *
   * @param  int  $slug
   *
   * @return Response
   */
  public function show($slug)
   {
          if (Project::where('slug',$slug)->first()){
                return response()->json(
                    [
                        'project'=> new ProjectResource(Project::where('slug',$slug)->first()),
                        'message'=>'detail Project',
                        'status' => true
                    ],
                    200,
                    ['Content-Type'=>'application/json']
                );
          }

        return response()->json([
          'status' => false,
            'message' => 'echec ,
            Project does not exist'],
            404,
           ['Content-Type'=>'application/json']);
  }



  /**
   * Update the specified resource in storage.
   *
   * @param  int  $slug
   *
   * @return Response
   */
  public function update(Request $request)
  {
        if (Project::where('slug',$request->slug)->first()){
         $project = Project::where('slug',$request->slug)->first();
         if ($project->update($request->all())){

             return response()->json(
                 [
                     'message' => ' Project updated successful !',
                     'status' => true
                 ],200,['Content-Type'=>'application/json']);
         }else{
          return response()->json(
              [
                  'message' => ' updated failed  !',
                  'status' => false
              ],200,
              ['Content-Type'=>'application/json']);
       }
     }

    return response()->json(['message' => ' Project does not exist !'],404,['Content-Type'=>'application/json']);
   }



  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $slug
   *
   * @return Response
   */
  public function destroy($slug)
   {
            if (Project::where('slug',$slug)->first()){
                  $project = Project::where('slug',$slug)->first();
                  $project->delete();
                  return response()->json(
                      [
                          'message' => ' Project deleted successful',
                          'status' => true
                      ],
                      200,
                      ['Content-Type'=>'application/json']);
             }

       return response()->json(['message' => ' Project does not exist !'],404,['Content-Type'=>'application/json']);
   }



     /**
      * Remove the specified resource from storage.
      *
      * @param  string  $slug
      *
      * @return Response
      */


      public function connectedUserProjects($slug)
      {

        if (User::where('slug',$slug)->first()) {
           $user = User::where('slug',$slug)->first();
           return response()->json(
               [
                   'status' => true,
                   'content' =>  new EnterpriseResource($user->enterprise)
               ],
               200,
               ['Content-Type'=>'application/json']);
        }

        return response()->json([
            'message' => ' La resourse n\'existe pas!',
            'status' => false
          ],200,['Content-Type'=>'application/json']);


      }




   public function addSiteToProject(Request $request){
       $site = Site::find($request->site['id']);
       $project = Project::find($request->project['id']);

       if ($project->sites()->attach($site)) {
         return response()->json([
             'message' =>'Site ajouté avec succès au projet !',
             'status' => true
           ],200,['Content-Type'=>'application/json']);
       }

       return response()->json([
           'message' =>'Erreur  !',
           'status' => false
         ],200,['Content-Type'=>'application/json']);
   }



 /* --Generated with ❤ by slugger---*/

}
