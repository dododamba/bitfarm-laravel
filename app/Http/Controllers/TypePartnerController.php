<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\TypePartner as TypePartnerResource;
use App\TypePartner;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Controller   TypePartnerController
|
|
|
|*/


class TypePartnerController extends Controller
{




/**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

              if(!TypePartnerResource::collection(TypePartner::all())->isEmpty()){
                  return response()->json(
                      [
                          'content'=> TypePartnerResource::collection(TypePartner::all()),
                          'message'=>'list of TypePartners'
                      ],200,['Content-Type'=>'application/json']);

              }

    return response()->json(['message'=>'TypePartners empty !']);

  }




  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
     if (TypePartner::create($request->all())) {
                return response()->json(
                    [
                        'message' => ' TypePartner stored successful',
                        'status' => true
                     ],200,['Content-Type'=>'application/json']);

            }
     return response()->json(
         [
             'message'=>'store TypePartner failed !',
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
          if (TypePartner::where('slug',$slug)->first()){
                return response()->json(
                    [
                        'content'=> new TypePartnerResource(TypePartner::where('slug',$slug)->first()),
                        'message'=>'detail TypePartner',
                        'status' => false
                    ],
                    200,
                    ['Content-Type'=>'application/json']
                );
          }

        return response()->json([
            'message' => 'echec ,
            TypePartner does not exist'],
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
        if (TypePartner::where('slug',$request->slug)->first()){
         $typepartner = TypePartner::where('slug',$request->slug)->first();
         if ($typepartner->update($request->all())){

             return response()->json(
                 [
                     'message' => ' TypePartner updated successful !',
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

    return response()->json(['message' => ' TypePartner does not exist !'],404,['Content-Type'=>'application/json']);
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
            if (TypePartner::where('slug',$slug)->first()){
                  $typepartner = TypePartner::where('slug',$slug)->first();
                  $typepartner->delete();
                  return response()->json(
                      [
                          'message' => ' TypePartner deleted successful',
                          'status' => true
                      ],
                      200,
                      ['Content-Type'=>'application/json']);
             }

       return response()->json(['message' => ' TypePartner does not exist !'],404,['Content-Type'=>'application/json']);
   }

 /* --Generated with ❤ by slugger---*/

}
