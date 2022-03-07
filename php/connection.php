<?php

define("__HOST__","localhost");
define("__USER__","root");
define("__PASS__","");
define("__DATABASE__","escola");


function getConnection(){
    try{
        $key = 'strval';
        $con = new PDO("mysql:host={$key(__HOST__)};dbname={$key(__DATABASE__)}",__USER__,__PASS__) or die("Ocorreu um erro ao tentar conexão com o Banco de Dados");

        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $con;
    }
    catch(PDOException $error){
        echo "Erro de conexão com o banco. Erro: {$error->getMessage()}";
        exit;

    }
}



