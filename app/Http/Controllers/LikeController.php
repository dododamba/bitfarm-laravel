<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\Like as LikeResource;
use App\Models\Like;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Controller   LikeController
|
|
|
|*/


class LikeController extends Controller
{




/**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

              if(!LikeResource::collection(Like::all())->isEmpty()){
                  return response()->json(
                      [
                          'content'=> LikeResource::collection(Like::all()),
                          'message'=>'list of Likes'
                      ],200,['Content-Type'=>'application/json']);

              }

    return response()->json(['message'=>'Likes empty !']);

  }




  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
     if (Like::create($request->all())) {
                return response()->json(
                    [
                        'message' => ' Like stored successful',
                        'status' => true
                     ],200,['Content-Type'=>'application/json']);

            }
     return response()->json(
         [
             'message'=>'store Like failed !',
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
          if (Like::where('slug',$slug)->first()){
                return response()->json(
                    [
                        'content'=> new LikeResource(Like::where('slug',$slug)->first()),
                        'message'=>'detail Like',
                        'status' => false
                    ],
                    200,
                    ['Content-Type'=>'application/json']
                );
          }

        return response()->json([
            'message' => 'echec ,
            Like does not exist'],
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
        if (Like::where('slug',$request->slug)->first()){
         $like = Like::where('slug',$request->slug)->first();
         if ($like->update($request->all())){

             return response()->json(
                 [
                     'message' => ' Like updated successful !',
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

    return response()->json(['message' => ' Like does not exist !'],404,['Content-Type'=>'application/json']);
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
            if (Like::where('slug',$slug)->first()){
                  $like = Like::where('slug',$slug)->first();
                  $like->delete();
                  return response()->json(
                      [
                          'message' => ' Like deleted successful',
                          'status' => true
                      ],
                      200,
                      ['Content-Type'=>'application/json']);
             }

       return response()->json(['message' => ' Like does not exist !'],404,['Content-Type'=>'application/json']);
   }

 /* --Generated with ❤ by slugger---*/

}
