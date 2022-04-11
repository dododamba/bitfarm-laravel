<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Resources\Transaction as TransactionResource;
use App\Models\Transaction;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Controller   TransactionController
|
|
|
|*/


class TransactionController extends Controller
{




/**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index($slug)
  {
     $user;
    if ($user = User::where('slug',$slug)->first()) {
      return response()->json(
          [
              'content'=> TransactionResource::collection(Transaction::where('user_id',$user->id)->orderBy('id','desc')->get()),
              'message'=>'list of Transactions',
              'status'=> true,

          ],200,['Content-Type'=>'application/json']);
    }
    return response()->json(
        [
            'message'=>'user not found',
            'status'=> false,
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
      'amount' => $request->amount,
      'currency' => $request->currency,
      'status' => $request->status,
      'user_id' => $request->user_id,
      'payment_gate_way' => $request->payment_gate_way,
      'token' => str_randomize(70),
      'slug' => str_randomize(30)
    ];

      $transaction;
     if ($transaction = Transaction::create($data)) {

           foreach ($request->plans as $p) {
               $plan = Plan::find($p['id']);
               $transaction->plans()->attach($plan);
            }
                return response()->json(
                    [
                        'message' => 'La transaction a été effectué !',
                        'status' => true
                     ],200,['Content-Type'=>'application/json']);

            }
     return response()->json(
         [
             'message'=>'store Transaction failed !',
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
          if (Transaction::where('slug',$slug)->first()){
                return response()->json(
                    [
                        'content'=> new TransactionResource(Transaction::where('slug',$slug)->first()),
                        'message'=>'detail Transaction',
                        'status' => false
                    ],
                    200,
                    ['Content-Type'=>'application/json']
                );
          }

        return response()->json([
            'message' => 'echec ,
            Transaction does not exist'],
            404,
           ['Content-Type'=>'application/json']);
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
            if (Transaction::where('slug',$slug)->first()){
                  $transaction = Transaction::where('slug',$slug)->first();
                  $transaction->delete();
                  return response()->json(
                      [
                          'message' => ' Transaction deleted successful',
                          'status' => true
                      ],
                      200,
                      ['Content-Type'=>'application/json']);
             }

       return response()->json(['message' => ' Transaction does not exist !'],404,['Content-Type'=>'application/json']);
   }

 /* --Generated with ❤ by slugger---*/

}
