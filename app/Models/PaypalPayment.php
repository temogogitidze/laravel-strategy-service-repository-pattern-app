<?php

namespace App\Models;

use App\Services\Payment\PaymentService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\ParameterBag;

class PaypalPayment extends Model implements PaymentService
{
    use HasFactory;

    public function processPayment(int $amount, string $product): array
    {
        $paymentMessage = "Paypal transaction for {$product} ({$amount}) was successful";

        $paymentRecord = new ParameterBag([
            'product' => $product,
            'amount' => $amount,
        ]);

        return [$paymentMessage, $paymentRecord];
    }
}
