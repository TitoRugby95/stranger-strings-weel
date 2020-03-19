<?php
namespace App;
class CodersRepository implements ICodersRepository
{
    
    public function getAllCoders()
    {   
        $connection= mysqli_connect('localhost', 'root', "", 'base_de_coders');
        $query = "SELECT * FROM coders";
        $result = mysqli_query($connection, $query);
        $arrayCoders = array();
        while ($row = mysqli_fetch_array($result))
        {
            $arrayCoders[] = array 
            (
            "id" => $row['ID'],
            "name" => $row['name'],
            "status"=> $row['alive']
            );
        }
        return $arrayCoders;
    }    
    public function getDeadCoders()
    {   
        $connection= mysqli_connect('localhost', 'root', "", 'base_de_coders');
        $query = "SELECT * FROM coders WHERE alive='0' ";
        $result = mysqli_query($connection, $query);
        
        $arrayDeadCoders = array();
        while ($row = mysqli_fetch_array($result))
        {
            $arrayDeadCoders[] = array 
            (
            "id" => $row['id'],
            "name" => $row['name'],
            "state"=> $row['status']
            );
        }
        return $arrayDeadCoders; 
    }
    public function getAliveCoders()
    {
        $connection= mysqli_connect('localhost', 'root', "", 'base_de_coders');
        $query = "SELECT * FROM coders WHERE alive='1'";
        $result = mysqli_query($connection, $query);
        
        $arrayAliveCoders = array();
        while ($row = mysqli_fetch_array($result))
        {
            $arrayAliveCoders[] = array 
            (
            "id" => $row['id'],
            "name" => $row['name'],
            "state"=> $row['status']
            );
        }
        return $arrayAliveCoders; 
    }
    public function resurrectAllCoders()
    {   
        $connection= mysqli_connect('localhost', 'root', "", 'base_de_coders');
        $query="UPDATE coders SET alive='1'";
        $result = mysqli_query($connection, $query);
        
        return $result;
    }
}