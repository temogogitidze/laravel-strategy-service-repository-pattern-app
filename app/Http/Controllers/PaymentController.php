<?php

namespace App\Http\Controllers;

use App\Http\Requests\Payment\PaymentRequest;
use App\Services\Payment\PaymentService;
use App\Services\Payment\RecordService\PaymentRecordServiceInterface;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpKernel\Exception\HttpException;

class PaymentController extends Controller
{

    public function __construct(private PaymentRecordServiceInterface $service)
    {
    }

    public function __invoke(PaymentRequest $request, PaymentService $paymentService): JsonResponse
    {
        $validatedData = $request->validated();

        [$paymentMessage, $paymentRecord] = $paymentService->processPayment(
          $validatedData['amount'],
          $validatedData['product']
        );

        try {
            $record = $this->service->storeRecordData($paymentRecord);
        } catch (\Exception $e) {
            throw new HttpException(500, 'Could not store record');
        }

        return response()->json(['payment message' => $paymentMessage, 'record' => $record]);
    }

}
