<?php

declare(strict_types=1);

class Beverage extends Consumable implements InterfaceBeverage{
    private $beverageChoice;
    private $beverageCupSize;

    public function _construct(string $menuName,float $itemPrice,string $menuType,int $menuChoice){
        $this->MenuName=$menuName;
        $this->itemPrice=$itemPrice;
        $this->beverageChoice=$menuType;
        $this->beverageCupSize=$choice;
    }

    public function getCupSize(): string{
        $sizeName = " ";

        if($this -> beverageCupSize == 1){
            $sizeName = "Demi (3 oz.)";
        }else if($this -> beverageCupSize == 2){
            $sizeName = "Short (8 oz.)";
        }else if($this -> beverageCupSize == 3){
            $sizeName = "Tall (12 oz.)";
        }else if($this -> beverageCupSize == 4){
            $sizeName = "Grande (16 oz.)";
        }else if($this -> beverageCupSize == 5){
            $sizeName = "Venti (20 oz.)";
        }else if($this -> beverageCupSize == 6){
            $sizeName = "Trenta (31 oz.)";
        }
        
        switch($this->Bsize){
            case 1:
                $option="Large";break;
            case 2:
                $option="Medium";break;
            case 3:
                $option="Small";break;
        }
    }
    public function setSize(string $size){
        $this->Bsize=$size;
        return $this;
    }
    public function getType():string{
        return $this->Btype;
    }
    public function setType(string $type){
     $this->Btype=$type;
     return $this;
    }

}