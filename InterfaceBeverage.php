<?php

interface iBeverage{
    public function getSize():string;
    public function setSize(string $size);
    public function getType(): string;
    public function setType(string $type);
    
}