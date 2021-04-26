<?php
class Map{
    
    public $goal = 10;
    public $createdMap = array();
    
    public function __construct($tw,$th,$fo,$goal){
        for($i =0;$i < 15;$i++){
            $twIndex = rand(0,-1+Count($tw));
            $this->createdMap[] = $tw[$twIndex];
        }
        for($i =0;$i < 15;$i++){
            $twIndex = rand(0,-1+Count($th));
            $this->createdMap[] = $th[$twIndex];
        }
        for($i =0;$i < 15;$i++){
            $twIndex = rand(0,-1+Count($fo));
            $this->createdMap[] = $fo[$twIndex];
        }
        /*$this->createMap[] = $tw[0];
        $out = $this->createMap[0];
        echo $out->getName();*/
    }
    
    
    public function move($createdMap,$character,$number){
        if($character->current + $number< goal){
            $character->current += $number;
        }else{
            ending($character);
        }
    }
    public function ending($character){
        
    }

}

?>