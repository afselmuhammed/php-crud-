<?php 

    $host = "localhost";
    $db   = "phpcrud";

try{

    $connection = new PDO("mysql:host=localhost;dbname=phpcrud","root","");

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
}
catch(Exception $e){

    echo $e->getMessage() ; 
}

include_once 'crudClass.php';

$crud = new Crud($connection);


?>