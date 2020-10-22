<?php

namespace App\Orders;

use App\Billing\PaymentGateway;
use Illuminate\Support\Str;

class OrderDetails
{
    private $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function all()
    {
        $this->paymentGateway->setDiscount(500);
        return [
            'name' => 'Darsh',
            'address' => 'Al-Nasser St.'
        ];
    }
}
