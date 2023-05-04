<?php

namespace App\Services\Payment;

interface PaymentService
{
    public function processPayment(int $amount, string $product): array;
}
