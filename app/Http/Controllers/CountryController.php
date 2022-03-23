<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\Country as CountryResource;
use App\Country;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Controller   CountryController
|
|
|
|*/


class CountryController extends Controller
{




/**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

              if(!CountryResource::collection(Country::all())->isEmpty()){
                  return response()->json(
                      [
                          'content'=> CountryResource::collection(Country::all()),
                          'message'=>'list of Countrys'
                      ],200,['Content-Type'=>'application/json']);

              }

    return response()->json(['message'=>'Countrys empty !']);

  }




  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
     if (Country::create($request->all())) {
                return response()->json(
                    [
                        'message' => ' Country stored successful',
                        'status' => true
                     ],200,['Content-Type'=>'application/json']);

            }
     return response()->json(
         [
             'message'=>'store Country failed !',
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
          if (Country::where('slug',$slug)->first()){
                return response()->json(
                    [
                        'content'=> new CountryResource(Country::where('slug',$slug)->first()),
                        'message'=>'detail Country',
                        'status' => false
                    ],
                    200,
                    ['Content-Type'=>'application/json']
                );
          }

        return response()->json([
            'message' => 'echec ,
            Country does not exist'],
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
        if (Country::where('slug',$request->slug)->first()){
         $country = Country::where('slug',$request->slug)->first();
         if ($country->update($request->all())){

             return response()->json(
                 [
                     'message' => ' Country updated successful !',
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

    return response()->json(['message' => ' Country does not exist !'],404,['Content-Type'=>'application/json']);
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
            if (Country::where('slug',$slug)->first()){
                  $country = Country::where('slug',$slug)->first();
                  $country->delete();
                  return response()->json(
                      [
                          'message' => ' Country deleted successful',
                          'status' => true
                      ],
                      200,
                      ['Content-Type'=>'application/json']);
             }

       return response()->json(['message' => ' Country does not exist !'],404,['Content-Type'=>'application/json']);
   }

 /* --Generated with ❤ by slugger---*/

}
