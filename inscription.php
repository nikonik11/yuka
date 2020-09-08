





<?php

if(isset($_FILES['images']) && $_FILES['image']['error'] == 0 ){

    if ($_FILES['image']['size'] <= 3000000){

        $infoImage = pathinfo($_FILES['image']['name']);
        $extensionImage = $infoImage['extension'];
    }

}

?>

<form method="post" action="inscription.php" enctype="multipart/form-data">
  <p>
    <h1>Formulaire</h1>
    <input type="file" name="image"><br>
    <button type="submit">Envoyer</button>
  </p>
</form>
</body>
</html>