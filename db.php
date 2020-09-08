<?php 

error_reporting(-1);
ini_set('display_errors', 'On');

//verifier sur mac si le pdo est activé et le display error

define('DB_HOST', 'localhost:3306'); // PC: localhost:3306  MAC: localhost:8889
define('DB_NAME', 'yuka');
define('DB_TABLE', 'membre');
define('DB_USER', 'root');
define('DB_PASSWORD', ''); // PC: ' '  MAC: root


//VOIR INJECTION SQL

try
{
    $bdd = new PDO ('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';dbtable=' . DB_TABLE . ';charset=utf8', DB_USER, DB_PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
    catch(PDOException $e)
{
    die('Erreur : '.$e->getMessage());
}   

// LIRE EN BDD
/* $req = $bdd->query('SELECT * FROM membre');
while($donnees = $req->fetch()){
    $pseudo = $donnees['pseudo'];
    echo $pseudo;
}
*/

// INSERT EN BDD
//$req = $bdd->exec('INSERT INTO membre (pseudo, password) VALUES ("sami","baguette")') or die(print_r($bdd->errorinfo()));


// UPDATE
//$req = $bdd->exec('UPDATE membre SET pseudo = "olive" WHERE pseudo = "feraillou" ');


//DELETE
//$req = $bdd->exec('DELETE FROM membre WHERE idMembre = 13 ');