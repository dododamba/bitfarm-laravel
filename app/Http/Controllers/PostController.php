<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\Post as PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Picture;
use Storage;
/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Controller   PostController
|
|
|
|*/


class PostController extends Controller
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
            'content'=> PostResource::collection(Post::all()),
            'message'=>'list of Posts'
        ],200,['Content-Type'=>'application/json']);

  }




  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

     $data = [
       'content'=>$request->content,
       'user_id'=>$request->user_id,
       'slug' => 'bit-farm-post'.str_randomize(25),
     ];

     $item = Post::create($data);

     if($request->images){

         foreach ($request->images as $image) {

             $file =  'bit-farm-image-'.str_randomize(12). '.png';
             $picture = convertToBase64($image,$file);


            Storage::disk('local')->put($file,$picture);

            copy($picture, public_path().'/projects/'.$picture);
            unlink($picture);

             Picture::create([
                 'name' =>  $file,
                 'slug' => 'media-'.str_randomize(25),
                 'alt' => $request->name,
                 'owner' => $item->id
             ]);
         }
     }

     return response()->json([
             'message' => 'Votre publication a été posté !',
             'status' => true
          ],200,['Content-Type'=>'application/json']);
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
          if (Post::where('slug',$slug)->first()){
                return response()->json(
                    [
                        'content'=> new PostResource(Post::where('slug',$slug)->first()),
                        'message'=>'detail Post',
                        'status' => true
                    ],
                    200,
                    ['Content-Type'=>'application/json']
                );
          }

        return response()->json([
            'message' => 'echec ,
            Post does not exist'],
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
        if (Post::where('slug',$request->slug)->first()){
         $post = Post::where('slug',$request->slug)->first();
         if ($post->update($request->all())){

             return response()->json(
                 [
                     'message' => ' Post updated successful !',
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

    return response()->json(['message' => ' Post does not exist !'],404,['Content-Type'=>'application/json']);
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
            if (Post::where('slug',$slug)->first()){
                  $post = Post::where('slug',$slug)->first();
                  $post->delete();
                  return response()->json(
                      [
                          'message' => ' Post deleted successful',
                          'status' => true
                      ],
                      200,
                      ['Content-Type'=>'application/json']);
             }

       return response()->json(['message' => ' Post does not exist !'],404,['Content-Type'=>'application/json']);
   }

 /* --Generated with ❤ by slugger---*/

}
