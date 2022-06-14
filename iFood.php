<?php

interface iFood{
    public function getType(string $type);
    public function setType(): string;
    public function setPortion(int $inputPortion);
    public function getPortion():string;
   


}