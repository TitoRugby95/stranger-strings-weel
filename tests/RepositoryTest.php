<?php
use PHPUnit\Framework\TestCase;
use App\CodersRepository;
final class CodersRepositoryTest extends TestCase
{
public function testGetAllCoders()
{
    $repo = new Repository();
    $coders = $repo->getAllCoders();
    
    /* Con este loop solo quiere imprimir cada elemento del array
    en pantalla para tener feedback visual */
    foreach ($coders as $coder)
    {
        print_r($coder); //me imprime array de arrays
        print_r($coders[1]['name']); //me imprime el nombre del elemneto 1
    }
    $primerCoder = $coders[0]['name'];
    print($primerCoder);
    //test de verdad 
    $this->assertCount(5, $coders);
}
public function testFirstNameOfDB()
{
    $repo = new Repository();
    $coders = $repo->getAllCoders();
    $primerCoder = $coders[0]['name'];
    print($primerCoder);
    
    $this->assertSame('Alejandro', $primerCoder);
}
public function testGetDeadCoders()
{
    $repo = new Repository();
    $arrayDeadCoders = $repo->getDeadCoders();
    //tengo 2 dead coders en la database
    $this->assertSame(2, count($arrayDeadCoders));  
}    
public function testGetAliveCoders()
{
    $repo = new Repository();
    $arrayAliveCoders = $repo->getAliveCoders();
    //tengo 3 dealive coders en la database
    $this->assertSame(3, count($arrayAliveCoders));  
}   
public function testResurrectAllCoders()
{
    $repo = new Repository();
    $repo->resurrectAllCoders();
    $aliveCoders = $repo->getAliveCoders();
    $this->assertSame(5, count($aliveCoders));
}
/* Cuando ejecuto este último test (todos se reviven), por tanto 
fallan los dos anteriores, porque estaran todos vivos haha{Entonces se podría intentar poner en otro fichero??}*/
}