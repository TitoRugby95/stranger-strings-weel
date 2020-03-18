<?php
namespace App;
final class KillerApp
{ 
    public $coders= array("Alberto", "Bruna", "Sebastian", "Sergi","Alejandro");
    public $noCodersLeft=array();
    public $shuffledCoders=array();
    
    function random (){
        shuffle($this->coders);
        $this->shuffledCoders=$this->coders;
        return $this->shuffledCoders;
    }
    function kill ($totalCoders){
        $conditionToKill=count($this->coders);
        $noConditionToKill=count($this->noCodersLeft);
        $this->shuffledCoders = $this -> random();
        
        if ($conditionToKill<=$totalCoders) {
            print_r ($this->shuffledCoders);
            print 'Ha muerto: '; 
            print array_shift($this->shuffledCoders);
            
            return $conditionToKill; 
        }
        
        if ($noConditionToKill==$totalCoders) {
            print 'NO HAY NADIE PA MATAR';
            return $noConditionToKill;
        }
    }
}
?>