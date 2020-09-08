<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Connexion</title>
</head>
<body>

<?php 

if(isset($_POST['pseudo']) && isset($_POST['password'])){

        $pseudo =  htmlspecialchars($_POST['pseudo']);
        $password = htmlspecialchars($_POST['password']);

        

        echo $pseudo . ' ' . $password;

}

?>

    <h1> Connexion </h1>
    <form method="post" action="index.php">
        <table>
            <tr>
                <td>Pseudo</td>
                <td> <input type="text" name="pseudo" placeholder="votre pseudo"> </td>
            </tr>
            <tr>
                <td>Mot de passe</td>
                <td> <input type="password" name="password" placeholder="votre mot de passe"> </td>
            </tr>
        </table>
        <button>Connexion</button>
    </form>
</body>
</html>


