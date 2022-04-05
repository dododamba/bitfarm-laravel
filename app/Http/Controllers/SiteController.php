<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\Site as SiteResource;
use App\Models\Site;
use App\Models\Region;
use App\Models\TypeCulture;
use App\Models\Pomp;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Controller   SiteController
|
|
|
|*/


class SiteController extends Controller
{




/**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

    return response()->json(
        [
            'content'=> SiteResource::collection(Site::orderBy('name','asc')->get()),
            'message'=>'list of Sites'
        ],200,['Content-Type'=>'application/json']);
  }








    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {


       if (Site::create(
         [
            'name' => $request->name,
            'area' => $request->area,
            'areaUnity' => $request->areaUnity,
            'description' => $request->description,
            'lng' => $request->lng,
            'lat' => $request->lat,
            'region_id' => $request->region['id'] ,
            'slug'=> $request->slug,
         ]
       )) {
                  return response()->json(
                      [
                          'message' => ' Site stored successful',
                          'status' => true
                       ],200,['Content-Type'=>'application/json']);

              }
       return response()->json(
           [
               'message'=>'store Site failed !',
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
          if (Site::where('slug',$slug)->first()){
                return response()->json(
                    [
                        'site'=> new SiteResource(Site::where('slug',$slug)->first()),
                        'message'=>'detail Site',
                        'status' => true
                    ],
                    200,
                    ['Content-Type'=>'application/json']
                );
          }

        return response()->json([
            'message' => 'echec Site does not exist',
            'status' => true
            ],
            200,
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
        if (Site::where('slug',$request->slug)->first()){
         $site = Site::where('slug',$request->slug)->first();
         if ($site->update($request->all())){

             return response()->json(
                 [
                     'message' => ' Site updated successful !',
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

    return response()->json(['message' => ' Site does not exist !'],404,['Content-Type'=>'application/json']);
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
            if (Site::where('slug',$slug)->first()){
                  $site = Site::where('slug',$slug)->first();
                  $site->delete();
                  return response()->json(
                      [
                          'message' => ' Site deleted successful',
                          'status' => true
                      ],
                      200,
                      ['Content-Type'=>'application/json']);
             }

       return response()->json(['message' => ' Site does not exist !'],404,['Content-Type'=>'application/json']);
   }




      public function addTypeToSite(Request $request){
          $site = Site::find($request->site['id']);
          $typeCulture = TypeCulture::find($request->typeCulture['id']);



            return response()->json([
                'message' =>'Type de culture ajouté avec succès au site !',
                'status' => true
              ],200,['Content-Type'=>'application/json']);
          
      }






         public function addPompeToSite(Request $request){
             $site = Site::find($request->site['id']);
             $typeCulture = Pomp::find($request->pomp['id']);

             if ($site->pompes()->attach($site)) {
               return response()->json([
                   'message' =>'Pompe ajouté avec succès au site !',
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
