<?php
namespace common\components;

use yii\base\Behavior;
class myBeh extends Behavior
{
    public $prom1;
    private $_prom2;

    public function getProm(){
        return $this->_prom2ж;
    }
    public function setProm($val){
        $this->_prom2 = $val;
        
    }

}