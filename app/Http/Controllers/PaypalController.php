<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaypalController extends Controller
{

    public function clientToken($params = [])
    {
      return response()->json(['clientToken'  => \Braintree\ClientToken::generate($params)]);

    }


    public function processPayment(Request $request)
    {
          $payload = $request->input('payload', false);
          $nonce = $payload['nonce'];
          $status = \Braintree\Transaction::sale([
                                'amount' => '10.00',
                                'paymentMethodNonce' => $nonce,
                                'options' => [
                                           'submitForSettlement' => True
                                             ]
                  ]);
        return response()->json($status);
    }
}
