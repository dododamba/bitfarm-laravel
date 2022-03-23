<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\Region as RegionResource;
use App\Region;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Controller   RegionController
|
|
|
|*/


class RegionController extends Controller
{




/**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

              if(!RegionResource::collection(Region::all())->isEmpty()){
                  return response()->json(
                      [
                          'content'=> RegionResource::collection(Region::all()),
                          'message'=>'list of Regions'
                      ],200,['Content-Type'=>'application/json']);

              }

    return response()->json(['message'=>'Regions empty !']);

  }




  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
     if (Region::create($request->all())) {
                return response()->json(
                    [
                        'message' => ' Region stored successful',
                        'status' => true
                     ],200,['Content-Type'=>'application/json']);

            }
     return response()->json(
         [
             'message'=>'store Region failed !',
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
          if (Region::where('slug',$slug)->first()){
                return response()->json(
                    [
                        'content'=> new RegionResource(Region::where('slug',$slug)->first()),
                        'message'=>'detail Region',
                        'status' => false
                    ],
                    200,
                    ['Content-Type'=>'application/json']
                );
          }

        return response()->json([
            'message' => 'echec ,
            Region does not exist'],
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
        if (Region::where('slug',$request->slug)->first()){
         $region = Region::where('slug',$request->slug)->first();
         if ($region->update($request->all())){

             return response()->json(
                 [
                     'message' => ' Region updated successful !',
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

    return response()->json(['message' => ' Region does not exist !'],404,['Content-Type'=>'application/json']);
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
            if (Region::where('slug',$slug)->first()){
                  $region = Region::where('slug',$slug)->first();
                  $region->delete();
                  return response()->json(
                      [
                          'message' => ' Region deleted successful',
                          'status' => true
                      ],
                      200,
                      ['Content-Type'=>'application/json']);
             }

       return response()->json(['message' => ' Region does not exist !'],404,['Content-Type'=>'application/json']);
   }

 /* --Generated with ❤ by slugger---*/

}
