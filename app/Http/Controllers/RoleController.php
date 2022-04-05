<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\Role as RoleResource;
use App\Models\Role;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Controller   RoleController
|
|
|
|*/


class RoleController extends Controller
{




/**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

              if(!RoleResource::collection(Role::all())->isEmpty()){
                  return response()->json(
                      [
                          'content'=> RoleResource::collection(Role::all()),
                          'message'=>'list of Roles'
                      ],200,['Content-Type'=>'application/json']);

              }

    return response()->json(['message'=>'Roles empty !']);

  }




  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
     if (Role::create($request->all())) {
                return response()->json(
                    [
                        'message' => ' Role stored successful',
                        'status' => true
                     ],200,['Content-Type'=>'application/json']);

            }
     return response()->json(
         [
             'message'=>'store Role failed !',
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
          if (Role::where('slug',$slug)->first()){
                return response()->json(
                    [
                        'content'=> new RoleResource(Role::where('slug',$slug)->first()),
                        'message'=>'detail Role',
                        'status' => false
                    ],
                    200,
                    ['Content-Type'=>'application/json']
                );
          }

        return response()->json([
            'message' => 'echec ,
            Role does not exist'],
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
        if (Role::where('slug',$request->slug)->first()){
         $role = Role::where('slug',$request->slug)->first();
         if ($role->update($request->all())){

             return response()->json(
                 [
                     'message' => ' Role updated successful !',
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

    return response()->json(['message' => ' Role does not exist !'],404,['Content-Type'=>'application/json']);
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
            if (Role::where('slug',$slug)->first()){
                  $role = Role::where('slug',$slug)->first();
                  $role->delete();
                  return response()->json(
                      [
                          'message' => ' Role deleted successful',
                          'status' => true
                      ],
                      200,
                      ['Content-Type'=>'application/json']);
             }

       return response()->json(['message' => ' Role does not exist !'],404,['Content-Type'=>'application/json']);
   }

 /* --Generated with ❤ by slugger---*/

}
