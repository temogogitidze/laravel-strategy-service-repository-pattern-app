<?php

namespace App\Repositories\Payment\RecordRepository;

use App\Models\Record;
use Symfony\Component\HttpFoundation\ParameterBag;

class PaymentRecordRepository implements PaymentRecordRepositoryInterface
{
    public function __construct(private Record $model)
    {
    }
    public function storeRecordData(ParameterBag $data): Record
    {
        return $this->model->create($data->all());
    }
}
