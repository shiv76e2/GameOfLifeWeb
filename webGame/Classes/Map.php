<?php
class Map{
    
    public $goal = 10;

    //キャラクターを移動させるためのメソッド
    public function move($createdMap,$character,$number){
        if($character->current + $number< goal){
            $character->current += $number;
        }else{
            $character->curret = $goal;
        }
    }
}

?>