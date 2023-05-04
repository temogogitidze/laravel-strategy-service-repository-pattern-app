<?php

namespace App\Repositories\Payment\RecordRepository;

use Symfony\Component\HttpFoundation\ParameterBag;

class PaymentRecordRepository implements PaymentRecordRepositoryInterface
{
    public function storeRecordData(ParameterBag $data)
    {
        dd($data);
    }
}
