<?php

namespace App\Providers;

use App\Repositories\Payment\RecordRepository\PaymentRecordRepository;
use App\Repositories\Payment\RecordRepository\PaymentRecordRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class PaymentRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PaymentRecordRepositoryInterface::class, PaymentRecordRepository::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
