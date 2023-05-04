<?php

namespace App\Services\Payment\RecordService;

use Symfony\Component\HttpFoundation\ParameterBag;

interface PaymentRecordServiceInterface
{
    public function storeRecordData(ParameterBag $recordData);
}
