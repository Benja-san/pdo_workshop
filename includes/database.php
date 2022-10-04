<?php
//DB connect
require '../env/connec.php';
try{
    $pdo = new PDO(DSN, USER, PASS);
} catch(Exception $error){
    echo "Woops something went wrong, error : " . $error->getMessage();
    die;
}