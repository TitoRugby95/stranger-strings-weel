<?php
use PHPUnit\Framework\TestCase;
use App\Coder;


final class CoderTest extends TestCase
{
  public function testIdIsInteger()
  {
    $coder = new Coder(1, 'Sergi', 'alive');
    $idObtanined = $coder->getId(); 
    $this->assertIsInt($idObtanined);
  }

  public function testIfIdMatch()
  {
    $coder = new Coder(5, 'Sebastian', 'alive');
    $idObtanined = $coder->getId();
    $this->assertSame(5, $idObtanined);
  }

  public function testNameIsString()
  {
    $coder = new Coder(1, 'Sergi', 'alive');
    $nameObtained = $coder->getName();
    $this->assertIsString($nameObtained); 
  }

  public function testNameMatch()
  {
    $coder = new Coder(1, 'Alberto', 'alive');
    $nameObtained = $coder->getName();
    $this->assertSame('Alberto', $nameObtained); 
  }

  public function testStatusIsString()
  {
    $coder = new Coder(1, 'Sergi', 'alive');
    $statusObtained = $coder->getStatus();
    $this->assertIsString($statusObtained);
  }

  public function testIfCoderDie()
  {
    $coder = new Coder (2, 'Sergi', 'alive');
    $deadCoder = $coder->die();
    $statusObtained = $coder->getStatus();
    $this->assertSame('dead', $statusObtained);
  }
} 