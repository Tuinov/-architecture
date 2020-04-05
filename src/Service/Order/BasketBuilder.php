<?php


namespace Service\Order;


use Service\Billing\Transfer\Card;
use Service\Communication\Sender\Email;
use Service\Discount\NullObject;
use Service\User\Security;

class BasketBuilder
{
    private $basket;

    // Выбор способа платежа
    private $billing;

    //  информация о скидке
    private $discount;

    /**
     * @var Email
     */
    private $communication;

    private $security;



    /**
     * Новый экземпляр строителя должен содержать пустой объект корзины,
     * который используется в дальнейшей сборке.
     */
    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->basket = new Basket('basket');
    }

    public function getBasket(): Basket
    {
        $result = $this->basket;

        return $result;
    }

    public function setBilling(Card $billing)
    {
        $this->billing = $billing;
        return $this;
    }

    public function setDiscount(NullObject $discount)
    {
        $this->discount = $discount;
        return $this;
    }

    public function setCommunication(Email $communication)
    {
        $this->communication = $communication;
        return $this;
    }

    public function setSecurity(Security $security)
    {
        $this->security = $security;
        return $this;
    }
}