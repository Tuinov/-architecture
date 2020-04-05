<?php


namespace Service\Order;


use Service\Billing\Transfer\Card;
use Service\Communication\Sender\Email;
use Service\Discount\NullObject;

class CheckOutProcess
{

    public function newOrder(BasketBuilder $builder)
    {
        $builder->save();
    }
}