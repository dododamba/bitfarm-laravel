<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\Site as SiteResource;
use App\Site;
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

              if(!SiteResource::collection(Site::all())->isEmpty()){
                  return response()->json(
                      [
                          'content'=> SiteResource::collection(Site::all()),
                          'message'=>'list of Sites'
                      ],200,['Content-Type'=>'application/json']);

              }

    return response()->json(['message'=>'Sites empty !']);

  }




  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
     if (Site::create($request->all())) {
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
                        'content'=> new SiteResource(Site::where('slug',$slug)->first()),
                        'message'=>'detail Site',
                        'status' => false
                    ],
                    200,
                    ['Content-Type'=>'application/json']
                );
          }

        return response()->json([
            'message' => 'echec ,
            Site does not exist'],
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

 /* --Generated with ❤ by slugger---*/

}
