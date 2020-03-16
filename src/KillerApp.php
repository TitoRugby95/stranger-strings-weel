<?php
use update;
namespace App;
final class KillerApp
{ 
    public $coders=;
    public $noCodersLeft=array();

    public $shuffledCoders=array();

    function random (){
        shuffle($this->coders);
        $this->shuffledCoders=$this->coders;

        print_r($this->shuffledCoders);

        return $this->shuffledCoders;
    }

    function kill ($totalCoders){
        $conditionToKill=count($this->coders);
        $noConditionToKill=count($this->noCodersLeft);

        if ($conditionToKill<=$totalCoders) {
            print 'Ha muerto: '; 
            print array_shift($this->shuffledCoders);
            return $conditionToKill; 
        }
        
        if ($noConditionToKill==$totalCoders) {
            print 'NO HAY NADIE PA MATAR';
            return $noConditionToKill;
        }
    }
    function update(){
        
    }
}
?>