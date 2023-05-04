<?php

namespace App\Services\Payment\RecordService;

use App\Models\Record;
use App\Repositories\Payment\RecordRepository\PaymentRecordRepositoryInterface;
use Symfony\Component\HttpFoundation\ParameterBag;

class PaymentRecordService implements PaymentRecordServiceInterface
{
    public function __construct(private PaymentRecordRepositoryInterface $repository)
    {
    }
    public function storeRecordData(ParameterBag $recordData): Record
    {
        // here we can do some business logic for record data
        return $this->repository->storeRecordData($recordData);
    }
}
