<?php
$twenty = array();
$twenty["2_001"] = new class implements Event{
    private $name = '宝くじ';
    
    public function event($character){
        //character.add(10000);
    }
    public function getInfo(){
        return '宝くじに当選した! 50万円ゲット!';
    }
    public function getName(){
        return $this->name;
    }
};
$twenty["2_002"] = new class implements Event{
    private $name = '???';
    
    public function event($character){
        //操作なし
    }
    public function getInfo(){
        return '今月は何もやる気がでなかった';
    }

    public function getName(){
        return $this->name;
    }
};

?>
