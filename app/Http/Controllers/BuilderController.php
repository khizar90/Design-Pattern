<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PricingService;

class BuilderController extends Controller
{

    public $price;
    function __construct(PricingService $services){
        $this->price = $services;
    }


    public function show() {
        $price = 100;
        $discount = 10;
        $taxPercent = 10;
        $shippingFee = 30;
        $totalPrice = $this->price->setOrderPrice($price)
            ->setDiscount($discount)
            ->setTaxPercent($taxPercent)
            ->setShippingFee($shippingFee)
            ->calculateTotalPrice();

            return $totalPrice;
    }


}
