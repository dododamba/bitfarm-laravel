<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\Picture as PictureResource;
use App\Models\Picture;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Controller   PictureController
|
|
|
|*/


class PictureController extends Controller
{




/**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

              if(!PictureResource::collection(Picture::all())->isEmpty()){
                  return response()->json(
                      [
                          'content'=> PictureResource::collection(Picture::all()),
                          'message'=>'list of Pictures'
                      ],200,['Content-Type'=>'application/json']);

              }

    return response()->json(['message'=>'Pictures empty !']);

  }




  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
     if (Picture::create($request->all())) {
                return response()->json(
                    [
                        'message' => ' Picture stored successful',
                        'status' => true
                     ],200,['Content-Type'=>'application/json']);

            }
     return response()->json(
         [
             'message'=>'store Picture failed !',
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
          if (Picture::where('slug',$slug)->first()){
                return response()->json(
                    [
                        'content'=> new PictureResource(Picture::where('slug',$slug)->first()),
                        'message'=>'detail Picture',
                        'status' => false
                    ],
                    200,
                    ['Content-Type'=>'application/json']
                );
          }

        return response()->json([
            'message' => 'echec ,
            Picture does not exist'],
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
        if (Picture::where('slug',$request->slug)->first()){
         $picture = Picture::where('slug',$request->slug)->first();
         if ($picture->update($request->all())){

             return response()->json(
                 [
                     'message' => ' Picture updated successful !',
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

    return response()->json(['message' => ' Picture does not exist !'],404,['Content-Type'=>'application/json']);
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
            if (Picture::where('slug',$slug)->first()){
                  $picture = Picture::where('slug',$slug)->first();
                  $picture->delete();
                  return response()->json(
                      [
                          'message' => ' Picture deleted successful',
                          'status' => true
                      ],
                      200,
                      ['Content-Type'=>'application/json']);
             }

       return response()->json(['message' => ' Picture does not exist !'],404,['Content-Type'=>'application/json']);
   }

 /* --Generated with ❤ by slugger---*/

}
