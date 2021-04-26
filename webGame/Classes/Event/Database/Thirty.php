<?php
    
$thirty = array();
$thirty[] = new class implements Event{
    private $name = '結婚';
    
    public function event($character){
        //character.add(10000);
    }
    public function getInfo(){
        return '結婚した!';
    }
    public function getName(){
        return $this->name;
    }
};
$thirty[] = new class implements Event{
    private $name = '破産';
    
    public function event($character){
        //操作なし
    }
    public function getInfo(){
        return '破産した!';
    }

    public function getName(){
        return $this->name;
    }
};

$thirty = array();
$thirty[] = new class implements Event{
    private $name = '結婚';
    
    public function event($character){
        //character.add(10000);
    }
    public function getInfo(){
        return '結婚した!';
    }
    public function getName(){
        return $this->name;
    }
};
$thirty[] = new class implements Event{
    private $name = '成功';
    
    public function event($character){
        //操作なし
    }
    public function getInfo(){
        return '成功した!';
    }

    public function getName(){
        return $this->name;
    }
};
?>