<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\Partner as PartnerResource;
use App\Partner;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Controller   PartnerController
|
|
|
|*/


class PartnerController extends Controller
{




/**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

              if(!PartnerResource::collection(Partner::all())->isEmpty()){
                  return response()->json(
                      [
                          'content'=> PartnerResource::collection(Partner::all()),
                          'message'=>'list of Partners'
                      ],200,['Content-Type'=>'application/json']);

              }

    return response()->json(['message'=>'Partners empty !']);

  }




  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
     if (Partner::create($request->all())) {
                return response()->json(
                    [
                        'message' => ' Partner stored successful',
                        'status' => true
                     ],200,['Content-Type'=>'application/json']);

            }
     return response()->json(
         [
             'message'=>'store Partner failed !',
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
          if (Partner::where('slug',$slug)->first()){
                return response()->json(
                    [
                        'content'=> new PartnerResource(Partner::where('slug',$slug)->first()),
                        'message'=>'detail Partner',
                        'status' => false
                    ],
                    200,
                    ['Content-Type'=>'application/json']
                );
          }

        return response()->json([
            'message' => 'echec ,
            Partner does not exist'],
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
        if (Partner::where('slug',$request->slug)->first()){
         $partner = Partner::where('slug',$request->slug)->first();
         if ($partner->update($request->all())){

             return response()->json(
                 [
                     'message' => ' Partner updated successful !',
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

    return response()->json(['message' => ' Partner does not exist !'],404,['Content-Type'=>'application/json']);
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
            if (Partner::where('slug',$slug)->first()){
                  $partner = Partner::where('slug',$slug)->first();
                  $partner->delete();
                  return response()->json(
                      [
                          'message' => ' Partner deleted successful',
                          'status' => true
                      ],
                      200,
                      ['Content-Type'=>'application/json']);
             }

       return response()->json(['message' => ' Partner does not exist !'],404,['Content-Type'=>'application/json']);
   }

 /* --Generated with ❤ by slugger---*/

}
