<?php

namespace App\Repositories\Payment\RecordRepository;

use Symfony\Component\HttpFoundation\ParameterBag;

interface PaymentRecordRepositoryInterface
{
    public function storeRecordData(ParameterBag $data);
}
