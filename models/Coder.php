<?php
namespace App;

class Coder { 
   
   private $coderId;
   private $name; 
   private $status = 'alive';
   private $allCoders = [];
   private $codersAlive = [];
   

   function __construct($coderId, $name, $status) 
   {
      $this->coderId = $coderId;
      $this->name = $name;
      $this->status = $status;
   }
   
   public function getId()
    {
        return $this->coderId;
    }

    function getName()
    {
        return $this->name;
    }

    function getStatus()
    {
        return $this->status;
    }

    function die()
    {
        $this->status = 'dead';       
    }
}
