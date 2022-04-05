<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\Pomp as PompResource;
use App\Models\Pomp;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Controller   PompController
|
|
|
|*/


class PompController extends Controller
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
            'content'=> PompResource::collection(Pomp::all()),
            'message'=>'list of Pomps'
        ],200,['Content-Type'=>'application/json']);

  }




  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
     if (Pomp::create(
        [
          'name' => $request->name,
          'site_id' => $request->site['id'],
          'slug' => $request->slug
      ]
     )) {
                return response()->json(
                    [
                        'message' => ' Pomp stored successful',
                        'status' => true
                     ],200,['Content-Type'=>'application/json']);

            }
     return response()->json(
         [
             'message'=>'store Pomp failed !',
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
          if (Pomp::where('slug',$slug)->first()){
                return response()->json(
                    [
                        'content'=> new PompResource(Pomp::where('slug',$slug)->first()),
                        'message'=>'detail Pomp',
                        'status' => false
                    ],
                    200,
                    ['Content-Type'=>'application/json']
                );
          }

        return response()->json([
            'message' => 'echec ,
            Pomp does not exist'],
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
        if (Pomp::where('slug',$request->slug)->first()){
         $pomp = Pomp::where('slug',$request->slug)->first();
         if ($pomp->update($request->all())){

             return response()->json(
                 [
                     'message' => ' Pomp updated successful !',
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

    return response()->json(['message' => ' Pomp does not exist !'],404,['Content-Type'=>'application/json']);
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
            if (Pomp::where('slug',$slug)->first()){
                  $pomp = Pomp::where('slug',$slug)->first();
                  $pomp->delete();
                  return response()->json(
                      [
                          'message' => ' Pomp deleted successful',
                          'status' => true
                      ],
                      200,
                      ['Content-Type'=>'application/json']);
             }

       return response()->json(['message' => ' Pomp does not exist !'],404,['Content-Type'=>'application/json']);
   }

 /* --Generated with ❤ by slugger---*/

}
