<?php 

error_reporting(-1);
ini_set('display_errors', 'On');


define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASSWORD', '');
define('DB_HOST', '');
define('DB_TABLE', '');

try
{
    $bdd = new PDO ('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
    catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}   

