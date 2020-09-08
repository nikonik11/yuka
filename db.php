<?php 

error_reporting(-1);
ini_set('display_errors', 'On');


define('DB_NAME', 'yuka');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost:8889');
define('DB_TABLE', 'membre');

try
{
    $bdd = new PDO ('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
    catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}   
