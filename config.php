<?php
    $dbHost='localhost';
    $dbUsername='root';
    $dbPassword ='';
    $dbName='registro';

    $conecxao= new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

//    if ($conecxao->connect_error){
//        echo"ERROR";
//    }else{
//        echo  "Conectado com sucesso";
//    }

?>