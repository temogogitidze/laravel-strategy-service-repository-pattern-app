<?php

namespace App\Providers;

use App\Models\PaypalPayment;
use App\Models\StripePayment;
use App\Services\Payment\PaymentService;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\HttpKernel\Exception\HttpException;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PaymentService::class, function () {
            if (config('services.payment-driver') === 'paypal') {
                return new PaypalPayment();
            }

            if (config('services.payment-driver') === 'stripe') {
                return new StripePayment();
            }

            throw new HttpException(500, 'The payment driver is invalid.');
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
