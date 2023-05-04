<?php

namespace App\Models;

use App\Services\Payment\PaymentService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StripePayment extends Model implements PaymentService
{
    use HasFactory;

    public function processPayment(int $amount, string $product): string
    {
        $paymentMessage = "Stripe transaction for {$product} ({$amount}) was successful";

        return $paymentMessage;
    }
}
