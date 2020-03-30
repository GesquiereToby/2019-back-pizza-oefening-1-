<?php
class Pizza{
    public $id;
    public $omschrijving;
    public $kaas;
    public $toppingid;


    public function __construct($parId=-1, $parOmschrijving="", $parKaas=-1, $parToppingid=-1){
            $this->id = $parId;
            $this->omschrijving = $parOmschrijving;
            $this->kaas = $parKaas;
            $this->toppingid = $parToppingid;

    //topping id veranderen van naam 
    //kaas ook veranderen van naam.
}
    public function getSoortkaas(){
        switch ($this->kaas){
            case 1:
                return "kaas";
                break;
            case 2:
                return "geen kaas";
                break;
            default:
                return "onbekend";
        }
    }



}
?>