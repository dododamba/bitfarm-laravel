<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\TypeCulture as TypeCultureResource;
use App\TypeCulture;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Controller   TypeCultureController
|
|
|
|*/


class TypeCultureController extends Controller
{




/**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

              if(!TypeCultureResource::collection(TypeCulture::all())->isEmpty()){
                  return response()->json(
                      [
                          'content'=> TypeCultureResource::collection(TypeCulture::all()),
                          'message'=>'list of TypeCultures'
                      ],200,['Content-Type'=>'application/json']);

              }

    return response()->json(['message'=>'TypeCultures empty !']);

  }




  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
     if (TypeCulture::create($request->all())) {
                return response()->json(
                    [
                        'message' => ' TypeCulture stored successful',
                        'status' => true
                     ],200,['Content-Type'=>'application/json']);

            }
     return response()->json(
         [
             'message'=>'store TypeCulture failed !',
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
          if (TypeCulture::where('slug',$slug)->first()){
                return response()->json(
                    [
                        'content'=> new TypeCultureResource(TypeCulture::where('slug',$slug)->first()),
                        'message'=>'detail TypeCulture',
                        'status' => false
                    ],
                    200,
                    ['Content-Type'=>'application/json']
                );
          }

        return response()->json([
            'message' => 'echec ,
            TypeCulture does not exist'],
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
        if (TypeCulture::where('slug',$request->slug)->first()){
         $typeculture = TypeCulture::where('slug',$request->slug)->first();
         if ($typeculture->update($request->all())){

             return response()->json(
                 [
                     'message' => ' TypeCulture updated successful !',
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

    return response()->json(['message' => ' TypeCulture does not exist !'],404,['Content-Type'=>'application/json']);
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
            if (TypeCulture::where('slug',$slug)->first()){
                  $typeculture = TypeCulture::where('slug',$slug)->first();
                  $typeculture->delete();
                  return response()->json(
                      [
                          'message' => ' TypeCulture deleted successful',
                          'status' => true
                      ],
                      200,
                      ['Content-Type'=>'application/json']);
             }

       return response()->json(['message' => ' TypeCulture does not exist !'],404,['Content-Type'=>'application/json']);
   }

 /* --Generated with ❤ by slugger---*/

}
