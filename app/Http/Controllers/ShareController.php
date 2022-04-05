<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\Share as ShareResource;
use App\Models\Share;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Controller   ShareController
|
|
|
|*/


class ShareController extends Controller
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
            'content'=> ShareResource::collection(Share::orderBy('id','desc')->get()),
            'message'=>'list of Shares'
        ],200,['Content-Type'=>'application/json']);

  }




  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
     if (Share::create($request->all())) {
                return response()->json(
                    [
                        'message' => ' Share stored successful',
                        'status' => true
                     ],200,['Content-Type'=>'application/json']);

            }
     return response()->json(
         [
             'message'=>'store Share failed !',
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
          if (Share::where('slug',$slug)->first()){
                return response()->json(
                    [
                        'content'=> new ShareResource(Share::where('slug',$slug)->first()),
                        'message'=>'detail Share',
                        'status' => false
                    ],
                    200,
                    ['Content-Type'=>'application/json']
                );
          }

        return response()->json([
            'message' => 'echec ,
            Share does not exist'],
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
        if (Share::where('slug',$request->slug)->first()){
         $share = Share::where('slug',$request->slug)->first();
         if ($share->update($request->all())){

             return response()->json(
                 [
                     'message' => ' Share updated successful !',
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

    return response()->json(['message' => ' Share does not exist !'],404,['Content-Type'=>'application/json']);
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
            if (Share::where('slug',$slug)->first()){
                  $share = Share::where('slug',$slug)->first();
                  $share->delete();
                  return response()->json(
                      [
                          'message' => ' Share deleted successful',
                          'status' => true
                      ],
                      200,
                      ['Content-Type'=>'application/json']);
             }

       return response()->json(['message' => ' Share does not exist !'],404,['Content-Type'=>'application/json']);
   }

 /* --Generated with ❤ by slugger---*/

}
