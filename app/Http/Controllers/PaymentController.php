<?php

namespace App\Http\Controllers;

use App\Models\PaypalPayment;
use Illuminate\Http\JsonResponse;

class PaymentController extends Controller
{

    public function __invoke(PaypalPayment $paypalPayment): JsonResponse
    {
        $paymentMessage = $paypalPayment->processPayment(
          500,
          'iphone'
        );

        return response()->json(['paymentMessage' => $paymentMessage]);
    }

}
