<?php
use PHPUnit\Framework\TestCase;
use App\ConnectionApp;
final class ConnectTest extends TestCase
{
    public function testConnection (){  
        $connect=new ConnectionApp();
        $resultado=$connect->Connect();
        $this->assertSame('Conectado!', $resultado);
    }
}
