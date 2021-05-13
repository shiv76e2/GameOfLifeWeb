<?php
$fourty = array();
$fourty["4_001"] = new class implements Event{
    private $name = '健康';
    
    public function event($character){
        //character.add(10000);
    }
    public function getInfo(){
        return 'はげた!';
    }
    public function getName(){
        return $this->name;
    }
};
$fourty["4_002"] = new class implements Event{
    private $name = '健康';
    
    public function event($character){
        //操作なし
    }
    public function getInfo(){
        return '痩せた!';
    }

    public function getName(){
        return $this->name;
    }
};



?>