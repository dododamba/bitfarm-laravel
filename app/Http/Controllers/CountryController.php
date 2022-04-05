<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\Country as CountryResource;
use App\Models\Country;
use App\Models\Region;

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

                  return response()->json(
                      [
                          'content'=> CountryResource::collection(Country::all()),
                          'message'=>'list of Countrys'
                      ],200,['Content-Type'=>'application/json']);




  }




  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
     if (Country::create([
            'indicatif'=> $request->indicatif,
            'iso'=> $request->iso,
            'name'=> $request->name,
            'slug'=> $request->slug
       ])) {
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
       * Store a newly created resource in storage.
       *
       * @return Response
       */
      public function addRegion(Request $request)
      {
         $data = [
           'name'  => $request->region['name'],
           'slug'  => $request->region['slug'],
           'country_id'  => $request->country['id'],

         ];
         if (Region::create($data)) {
                    return response()->json(
                        [
                            'message' => 'Region ajouté avec succès !',
                            'status' => true
                         ],200,['Content-Type'=>'application/json']);

                }
         return response()->json(
             [
                 'message'=>'Echec !',
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
