<?php

namespace App\Repositories\Payment\RecordRepository;

use App\Models\Record;
use Symfony\Component\HttpFoundation\ParameterBag;

interface PaymentRecordRepositoryInterface
{
    public function storeRecordData(ParameterBag $data): Record;
}
