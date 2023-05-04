<?php

namespace App\Http\Controllers;

use App\Http\Requests\Payment\PaymentRequest;
use App\Services\Payment\PaymentService;
use Illuminate\Http\JsonResponse;

class PaymentController extends Controller
{

    public function __invoke(PaymentRequest $request, PaymentService $paymentService): JsonResponse
    {
        $validatedData = $request->validated();
        $paymentMessage = $paymentService->processPayment(
          $validatedData['amount'],
          $validatedData['product']
        );

        return response()->json(['paymentMessage' => $paymentMessage]);
    }

}
