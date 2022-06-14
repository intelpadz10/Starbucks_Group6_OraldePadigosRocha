<?php

declare(strict_types=1);

class Consumable implements IConsumable {

    private $Cprice;
    private $Cname;

    public function getPrice():float{
        return $this->Cprice;


    }
    public function setPrice(float $price){
    $this->Cprice=$price;
    return $this;


    }
    public function setName(string $name){
    $this->Cname=$name;
    return $this;   


    }
    public function getName():string{
     return $this->Cname;   


    }
}


