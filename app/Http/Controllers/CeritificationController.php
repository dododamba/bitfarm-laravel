<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\Ceritification as CeritificationResource;
use App\Models\Ceritification;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Controller   CeritificationController
|
|
|
|*/


class CeritificationController extends Controller
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
            'content'=> CeritificationResource::collection(Ceritification::orderBy('id','desc')->get()),
            'message'=>'list of Ceritifications'
        ],200,['Content-Type'=>'application/json']);

  }




  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
     if (Ceritification::create($request->all())) {
                return response()->json(
                    [
                        'message' => ' Ceritification stored successful',
                        'status' => true
                     ],200,['Content-Type'=>'application/json']);

            }
     return response()->json(
         [
             'message'=>'store Ceritification failed !',
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
          if (Ceritification::where('slug',$slug)->first()){
                return response()->json(
                    [
                        'content'=> new CeritificationResource(Ceritification::where('slug',$slug)->first()),
                        'message'=>'detail Ceritification',
                        'status' => false
                    ],
                    200,
                    ['Content-Type'=>'application/json']
                );
          }

        return response()->json([
            'message' => 'echec ,
            Ceritification does not exist'],
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
        if (Ceritification::where('slug',$request->slug)->first()){
         $ceritification = Ceritification::where('slug',$request->slug)->first();
         if ($ceritification->update($request->all())){

             return response()->json(
                 [
                     'message' => ' Ceritification updated successful !',
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

    return response()->json(['message' => ' Ceritification does not exist !'],404,['Content-Type'=>'application/json']);
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
            if (Ceritification::where('slug',$slug)->first()){
                  $ceritification = Ceritification::where('slug',$slug)->first();
                  $ceritification->delete();
                  return response()->json(
                      [
                          'message' => ' Ceritification deleted successful',
                          'status' => true
                      ],
                      200,
                      ['Content-Type'=>'application/json']);
             }

       return response()->json(['message' => ' Ceritification does not exist !'],404,['Content-Type'=>'application/json']);
   }

 /* --Generated with ❤ by slugger---*/

}
