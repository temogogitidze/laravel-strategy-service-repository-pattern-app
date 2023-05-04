<?php

namespace App\Models;

use App\Services\Payment\PaymentService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaypalPayment extends Model implements PaymentService
{
    use HasFactory;

    public function processPayment(int $amount, string $product): string
    {
        $paymentMessage = "Paypal transaction for {$product} ({$amount}) was successful";

        return $paymentMessage;
    }
}
