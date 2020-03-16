<?php
namespace App;

class Killer { 

    function random(){
        
        $deadCoders = 24; 
        $totalCoders = 24; 
            
        if ($deadCoders == $totalCoders) {
           return 'AllDead'; 
        }
        
        if ($deadCoders != $totalCoders) {
            $deadCoders++ ;
            return 'Arturo';
        }

    }
}