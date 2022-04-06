<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\User as UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Picture;
use App\Models\Ceritification;
use Carbon\Carbon;


use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Controller   UserController
|
|
|
|*/


class UserController extends Controller
{




/**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

              if(!UserResource::collection(User::all())->isEmpty()){
                  return response()->json(
                      [
                          'content'=> UserResource::collection(User::all()),
                          'message'=>'list of Users'
                      ],200,['Content-Type'=>'application/json']);

              }

    return response()->json(['message'=>'Users empty !']);

  }




  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
     if (User::create($request->all())) {
                return response()->json(
                    [
                        'message' => ' User stored successful',
                        'status' => true
                     ],200,['Content-Type'=>'application/json']);

            }
     return response()->json(
         [
             'message'=>'store User failed !',
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
          if (User::where('slug',$slug)->first()){
                return response()->json(
                    [
                        'content'=> new UserResource(User::where('slug',$slug)->first()),
                        'message'=>'detail User',
                        'status' => false
                    ],
                    200,
                    ['Content-Type'=>'application/json']
                );
          }

        return response()->json([
            'message' => 'echec ,
            User does not exist'],
            404,
           ['Content-Type'=>'application/json']);
  }



  /**
   * Update the specified resource in storage.
   *
   * @param  Object  $request
   *
   * @return Response
   */
  public function update(Request $request)
  {
        if (User::where('slug',$request->slug)->first()){
         $user = User::where('slug',$request->slug)->first();
         if ($user->update($request->all())){

             return response()->json(
                 [
                     'message' => ' User updated successful !',
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

    return response()->json(['message' => ' User does not exist !'],404,['Content-Type'=>'application/json']);
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
            if (User::where('slug',$slug)->first()){
                  $user = User::where('slug',$slug)->first();
                  $user->delete();
                  return response()->json(
                      [
                          'message' => ' User deleted successful',
                          'status' => true
                      ],
                      200,
                      ['Content-Type'=>'application/json']);
             }

       return response()->json(['message' => ' User does not exist !'],404,['Content-Type'=>'application/json']);
   }


   public function profile(Request $request)
   {
       if (User::where('slug',$request->slug)->first()){
        $user = User::where('slug',$request->slug)->first();

        if($request->avatar){
          $file =  'bit-farm-image-'.str_randomize(12). '.png';
          $picture = convertToBase64($request->avatar,$file);

          Storage::disk('local')->put($file,$picture);

         copy($picture, public_path().'/projects/'.$picture);
         unlink($picture);


         if ($user->update(['avatar' => $file])){

             return response()->json([
                     'message' => 'Mise à jours effectué avec succès !',
                     'status' => true
                 ],200,['Content-Type'=>'application/json']);
         }else {
          return response()->json([
                  'message' => ' updated failed  !',
                  'status' => false
              ],200,['Content-Type'=>'application/json']);
          }

        }
        return response()->json(['message' => ' User does not exist !'],404,['Content-Type'=>'application/json']);
      }


   }





   public function profileAccountSetting(Request $request)
   {
       if (User::where('slug',$request->slug)->first()){
          $user = User::where('slug',$request->slug)->first();

          $file =  'bit-farm-image-'.str_randomize(12). '.png';
          $picture = convertToBase64($request->picture,$file);

          Storage::disk('local')->put($file,$picture);

          copy($picture, public_path().'/projects/'.$picture);
          unlink($picture);


          $file_document =  'bit-farm-document-'.str_randomize(12). '.png';
          $picture_document = convertToBase64($request->document,$file_document);

          Storage::disk('local')->put($file_document,$picture_document);

          copy($picture_document, public_path().'/projects/'.$picture_document);
          unlink($picture_document);


          $certification = [
              'document'=>$file_document,
              'status'=>false,
              'certified_at'=> Carbon::now(),
              'user_id'=>$user->id,
              'slug' => 'certification'.str_randomize(10),
          ];

          Ceritification::create($certification);


           if ($user->update([
             'avatar' => $file,
             'birth' => $request->birth,
             'telephone' => $request->telephone,
             'account_is_configured' => true
             ])){

             return response()->json([
                     'message' => 'Compte configuré avec succès !',
                     'status' => true
                 ],200,['Content-Type'=>'application/json']);
           }else {
            return response()->json([
                  'message' => ' updated failed  !',
                  'status' => false
              ],200,['Content-Type'=>'application/json']);
          }


          return response()->json(['message' => ' User does not exist !'],404,['Content-Type'=>'application/json']);
      }


   }

 /* --Generated with ❤ by slugger---*/

}
