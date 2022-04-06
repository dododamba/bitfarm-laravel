<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Enterprise;
use App\Models\Role;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Resources\User as UserResource;


class ApiAuthController extends Controller
{
    public function register (Request $request) {
      $validator = Validator::make($request->all(), [
            'firstName' => 'required|string|min:3|max:255',
            'lastName' => 'required|string|min:3|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        if ($validator->fails()){
            return response(['status' => false,'errors'=>$validator->errors()->all()], 422);
        }


        $user_account;

        $user =  [
                    'firstName' => $request->firstName,
                    'lastName' => $request->lastName,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'status' => true,
                    'account_is_configured' => false,
                    'remember_token' => str_randomize(30),
                    'confirm_token' => str_randomize(30),
                    'reset_token' => str_randomize(30),
                    'slug' => 'user-'.str_randomize(10)
                ];

       if ($user_account = User::create($user)) {
         $role = Role::where('name','BITFARMER')->first();
         $user_account->roles()->attach($role);

         $token = $user_account->createToken('Laravel Password Grant Client')->accessToken;
         $response = [
             'status' => true,
             'message' => 'Compte crée avec succès !',
             'token' => $token,
             'user' => new UserResource($user_account)
         ];
         return response($response, 200);

       }


       return response([
           'status' => false,
           'message' => 'Echec, veuillez recommencer !'
       ], 200);

    }


   public function registerEnterprise(Request $request){

     $validator = Validator::make($request->all(), [
           'firstName' => 'required|string|min:3|max:255',
           'lastName' => 'required|string|min:3|max:255',
           'name' => 'required|string|max:255',
           'city' => 'required|string|min:3|max:255',
           'telephone' => 'required|string|min:3|max:255',
           'email' => 'required|string|email|max:255|unique:users',
           'password' => 'required|string|min:6|confirmed',
       ]);


       if ($validator->fails()){
           return response(['status' => false,'errors'=>$validator->errors()->all()], 200);
       }


       $user_account;

       $user =  [
                   'firstName' => $request->firstName,
                   'lastName' => $request->lastName,
                   'email' => $request->email,
                   'password' => bcrypt($request->password),
                   'status' => true,
                   'account_is_configured' => false,
                   'remember_token' => str_randomize(30),
                   'confirm_token' => str_randomize(30),
                   'reset_token' => str_randomize(30),
                   'slug' => 'user-'.str_randomize(10),
               ];

      if ($user_account = User::create($user)) {

          $role = Role::where('name','BITFARM ENTERPRISE')->first();
          $user_account->roles()->attach($role);

          App\Models\Enterprise::create([
                  'name' => $request->name,
                  'city' => $request->city,
                  'enterprise_is_configured' => false,
                  'telephone' => $request->telephone,
                  'logo' => 'avatar-enterprise.png',
                  'user_id' => $user_account->id,
                ]);

          $token = $user_account->createToken('Laravel Password Grant Client')->accessToken;
          $response = [
              'status' => true,
              'message' => 'Compte crée avec succès !',
              'token' => $token,
              'user' => new UserResource($user_account)
          ];
          return response($response, 200);

      }


      return response([
          'status' => false,
          'message' => 'Echec, veuillez recommencer !'
      ], 200);

    }


    public function login (Request $request) {




        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);

        if ($validator->fails()){
            return response(['status' => false,'status' => false,'errors'=>$validator->errors()->all()], 200);
        }

        $user = User::where('email', $request->email)->first();
        if ($user) {

            if (Hash::check($request->password, $user->password)) {

                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = [
                    'status' => true,
                    'token' => $token,
                     'user' => new UserResource($user)
                ];
                return response($response, 200);
            } else {
                $response = ['status' => false,"errors" => "Verifiez votre email ou votre mot de pass !"];
                return response($response, 200);
            }
        } else {
            $response = ['status' => false,"errors" =>'erreur identifiants ! '];
            return response($response, 200);
        }
    }


    public function logout (Request $request) {
        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
    }


}
