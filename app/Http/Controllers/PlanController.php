<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\Plan as PlanResource;
use App\Models\Plan;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Controller   PlanController
|
|
|
|*/


class PlanController extends Controller
{




/**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

              if(!PlanResource::collection(Plan::all())->isEmpty()){
                  return response()->json(
                      [
                          'content'=> PlanResource::collection(Plan::all()),
                          'message'=>'list of Plans'
                      ],200,['Content-Type'=>'application/json']);

              }

    return response()->json(['message'=>'Plans empty !']);

  }




  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {




     if (Plan::create([
       'name' => $request->name,
       'description' => $request->description,
       'price' => $request->price,
       'promotionDueDate' => $request->promotionDueDate,
       'startDate' => $request->startDate,
       'dueDate' => $request->dueDate,
       'promotionPrice' => $request->promotionPrice,
       'project_id'=> $request->project['id']
     ])) {
                return response()->json(
                    [
                        'message' => ' Plan crée avec succès !'
                        ,
                        'status' => true
                     ],200,['Content-Type'=>'application/json']);

            }
     return response()->json(
         [
             'message'=>'store Plan failed !',
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
          if (Plan::where('slug',$slug)->first()){
                return response()->json(
                    [
                        'content'=> new PlanResource(Plan::where('slug',$slug)->first()),
                        'message'=>'detail Plan',
                        'status' => false
                    ],
                    200,
                    ['Content-Type'=>'application/json']
                );
          }

        return response()->json([
            'message' => 'echec ,
            Plan does not exist'],
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
        if (Plan::where('slug',$request->slug)->first()){
         $plan = Plan::where('slug',$request->slug)->first();
         if ($plan->update($request->all())){

             return response()->json(
                 [
                     'message' => ' Plan updated successful !',
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

    return response()->json(['message' => ' Plan does not exist !'],404,['Content-Type'=>'application/json']);
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
            if (Plan::where('slug',$slug)->first()){
                  $plan = Plan::where('slug',$slug)->first();
                  $plan->delete();
                  return response()->json(
                      [
                          'message' => ' Plan deleted successful',
                          'status' => true
                      ],
                      200,
                      ['Content-Type'=>'application/json']);
             }

       return response()->json(['message' => ' Plan does not exist !'],404,['Content-Type'=>'application/json']);
   }

 /* --Generated with ❤ by slugger---*/

}
