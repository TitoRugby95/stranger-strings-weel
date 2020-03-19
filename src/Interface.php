<?php
namespace App;
interface ICodersRepository
{
    public function getAllCoders();
    
    public function getDeadCoders();
    
    public function getAliveCoders();
    
    public function resurrectAllCoders();
    
}