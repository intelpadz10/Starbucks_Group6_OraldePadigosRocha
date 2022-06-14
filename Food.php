<?php

declare(strict_types=1);

class Food extends Consumable implements iFood{

    private $Fportion;
    private $Ftype;

    public function _construct(string $FoodName,float $Fprice,string $Ftype,int $sizePortion){
        $this->Cname=$FoodName;
        $this->Cprice=$Fprice;
        $this->Ftype=$Ftype;
        $this->Fsize=$sizePortion;

    }

    public function getSize():string{
        $portion="";
        switch($this->Bsize){
            case 1:
                $portion="1 portion";break;
            case 2:
                $portion="2 portion";break;
            case 3:
                $portion="3 portion";break;
            case 4:
                $portion="4 portion";break;
            case 5:
                 $portion="Whole";break;
        }
        return $portion;
    }

    public function setSize(){
        $this->Fsize=$sizePortion;
        return $this;

    }

    public function getType(): string{
        return $this->Ftype;
    }
    public function setType(string $type){
        $this->Ftype=$type;
        return $this;
    }

}