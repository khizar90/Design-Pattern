<?php

namespace App\Services;


class PricingService {
 
    public $orderPrice;
    public $discount;
    public $taxPercent;
    public $shippingFee;
 
    public function setOrderPrice($orderPrice): PricingService
    {
        $this->orderPrice = $orderPrice;
        return $this;
    }
 
    public function setDiscount($discount): PricingService
    {
        $this->discount = $discount;
        return $this;
    }
 
    public function setTaxPercent($taxPercent): PricingService
    {
        $this->taxPercent = $taxPercent;
        return $this;
    }
 
    public function setShippingFee($shippingFee): PricingService
    {
        $this->shippingFee = $shippingFee;
        return $this;
    }
 
    function calculateTotalPrice(): float  { 

        $discountAmount = $this->orderPrice * $this->discount / 100;
        $subTotal = $this->orderPrice - $discountAmount;
        $taxAmount = $subTotal * $this->taxPercent / 100;
        $totalPrice = $subTotal + $taxAmount + $this->shippingFee;
        return $totalPrice;
    }
}
 