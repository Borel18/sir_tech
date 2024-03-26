<?php

namespace App;

class StripePayement
{
    public function __construct(readonly private string $clientSecret){
        stripe::setApiKey($this->$clientSecret);
        stripe::setApiVersion('2020-08-27');
    }

    public function startPayement(cart $cart){

    }
}

?>