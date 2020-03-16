<?php
use PHPUnit\Framework\TestCase;
use App\KillerApp;

final class KillerTest extends TestCase

{
    public $coders=array("Alberto", "Bruna", "Sebastian", "Sergi","Alejandro");
    public $noCodersLeft=array();

    public function testRandom (){  
        $totalCoders=count($this->coders);

        $randomPick=new KillerApp();
        $resultado=$randomPick->random($totalCoders);

        $this->assertSame($totalCoders, count($resultado));
    }

    public function testKillSomebody (){  
        $totalCoders=count($this->coders);

        $killer=new KillerApp();
        $resultado=$killer->kill($totalCoders);

        $this->assertSame($totalCoders, $resultado);
    }
    public function testNoOneToKill (){
        $totalCoders=count($this->noCodersLeft);

        $killer=new KillerApp();
        $resultado=$killer->kill($totalCoders);

        $this->assertSame($totalCoders, $resultado);
    }
}
?>