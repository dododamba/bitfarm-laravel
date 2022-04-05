<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\View as ViewResource;
use App\Models\View;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Controller   ViewController
|
|
|
|*/


class ViewController extends Controller
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
            'content'=> ViewResource::collection(View::orderBy('id','desc')->get()),
            'message'=>'list of Views'
        ],200,['Content-Type'=>'application/json']);

  }




  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
     if (View::create($request->all())) {
                return response()->json(
                    [
                        'message' => ' View stored successful',
                        'status' => true
                     ],200,['Content-Type'=>'application/json']);

            }
     return response()->json(
         [
             'message'=>'store View failed !',
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
          if (View::where('slug',$slug)->first()){
                return response()->json(
                    [
                        'content'=> new ViewResource(View::where('slug',$slug)->first()),
                        'message'=>'detail View',
                        'status' => false
                    ],
                    200,
                    ['Content-Type'=>'application/json']
                );
          }

        return response()->json([
            'message' => 'echec ,
            View does not exist'],
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
        if (View::where('slug',$request->slug)->first()){
         $view = View::where('slug',$request->slug)->first();
         if ($view->update($request->all())){

             return response()->json(
                 [
                     'message' => ' View updated successful !',
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

    return response()->json(['message' => ' View does not exist !'],404,['Content-Type'=>'application/json']);
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
            if (View::where('slug',$slug)->first()){
                  $view = View::where('slug',$slug)->first();
                  $view->delete();
                  return response()->json(
                      [
                          'message' => ' View deleted successful',
                          'status' => true
                      ],
                      200,
                      ['Content-Type'=>'application/json']);
             }

       return response()->json(['message' => ' View does not exist !'],404,['Content-Type'=>'application/json']);
   }

 /* --Generated with ❤ by slugger---*/

}
