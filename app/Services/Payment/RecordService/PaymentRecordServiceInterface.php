<?php

namespace App\Services\Payment\RecordService;

use App\Models\Record;
use Symfony\Component\HttpFoundation\ParameterBag;

interface PaymentRecordServiceInterface
{
    public function storeRecordData(ParameterBag $recordData): Record;
}
