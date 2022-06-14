<?php

interface IConsumable{
    public function getPrice(): float;
    public function setPrice(float $price);
    public function setName(string $name);
    public function getName():string;


}