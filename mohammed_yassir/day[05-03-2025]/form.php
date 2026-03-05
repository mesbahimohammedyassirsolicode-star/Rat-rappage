<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <label>nom</label>
    <input type="text" name="nom">
    <label > prenom</label>
    <input type="text" name="prenom">
    <button type="submit" name="ok">ok</button>
    </form>

</body>
</html>


<?php


if(isset($_POST['ok'])){
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
}
?>
