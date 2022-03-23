<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\Enterprise as EnterpriseResource;
use App\Models\Enterprise;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Controller   EnterpriseController
|
|
|
|*/


class EnterpriseController extends Controller
{




/**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

              if(!EnterpriseResource::collection(Enterprise::all())->isEmpty()){
                  return response()->json(
                      [
                          'content'=> EnterpriseResource::collection(Enterprise::all()),
                          'message'=>'list of Enterprises'
                      ],200,['Content-Type'=>'application/json']);

              }

    return response()->json(['message'=>'Enterprises empty !']);

  }




  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
     if (Enterprise::create($request->all())) {
                return response()->json(
                    [
                        'message' => ' Enterprise stored successful',
                        'status' => true
                     ],200,['Content-Type'=>'application/json']);

            }
     return response()->json(
         [
             'message'=>'store Enterprise failed !',
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
          if (Enterprise::where('slug',$slug)->first()){
                return response()->json(
                    [
                        'content'=> new EnterpriseResource(Enterprise::where('slug',$slug)->first()),
                        'message'=>'detail Enterprise',
                        'status' => false
                    ],
                    200,
                    ['Content-Type'=>'application/json']
                );
          }

        return response()->json([
            'message' => 'echec ,
            Enterprise does not exist'],
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
        if (Enterprise::where('slug',$request->slug)->first()){
         $enterprise = Enterprise::where('slug',$request->slug)->first();
         if ($enterprise->update($request->all())){

             return response()->json(
                 [
                     'message' => ' Enterprise updated successful !',
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

    return response()->json(['message' => ' Enterprise does not exist !'],404,['Content-Type'=>'application/json']);
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
            if (Enterprise::where('slug',$slug)->first()){
                  $enterprise = Enterprise::where('slug',$slug)->first();
                  $enterprise->delete();
                  return response()->json(
                      [
                          'message' => ' Enterprise deleted successful',
                          'status' => true
                      ],
                      200,
                      ['Content-Type'=>'application/json']);
             }

       return response()->json(['message' => ' Enterprise does not exist !'],404,['Content-Type'=>'application/json']);
   }

 /* --Generated with ❤ by slugger---*/

}
