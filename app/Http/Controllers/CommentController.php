<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\Comment as CommentResource;
use App\Models\Comment;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Controller   CommentController
|
|
|
|*/


class CommentController extends Controller
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
            'content'=> CommentResource::collection(Comment::orderBy('id','desc')->get()),
            'message'=>'list of Comments'
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
      'post_id'=>$request->post_id,
      'slug' => 'bit-farm-post'.str_randomize(25),
    ];

    $item;

     if ($item = Comment::create($data)) {



            if($request->image){

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



                return response()->json(
                    [
                        'message' => ' Comment stored successful',
                        'status' => true
                     ],200,['Content-Type'=>'application/json']);

            }
     return response()->json(
         [
             'message'=>'store Comment failed !',
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
        if (Comment::where('slug',$slug)->first()){
                return response()->json(
                    [
                        'content'=> new CommentResource(Comment::where('slug',$slug)->first()),
                        'message'=>'detail Comment',
                        'status' => false
                    ],
                    200,
                    ['Content-Type'=>'application/json']
                );
          }

        return response()->json([
            'message' => 'echec ,
            Comment does not exist'],
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
        if (Comment::where('slug',$request->slug)->first()){
         $comment = Comment::where('slug',$request->slug)->first();
         if ($comment->update($request->all())){

             return response()->json(
                 [
                     'message' => ' Comment updated successful !',
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

    return response()->json(['message' => ' Comment does not exist !'],404,['Content-Type'=>'application/json']);
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
            if (Comment::where('slug',$slug)->first()){
                  $comment = Comment::where('slug',$slug)->first();
                  $comment->delete();
                  return response()->json(
                      [
                          'message' => ' Comment deleted successful',
                          'status' => true
                      ],
                      200,
                      ['Content-Type'=>'application/json']);
             }

       return response()->json(['message' => ' Comment does not exist !'],404,['Content-Type'=>'application/json']);
   }

 /* --Generated with ❤ by slugger---*/

}
