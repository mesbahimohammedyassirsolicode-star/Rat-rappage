<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="jour" placeholder="">
        <button name="ok">ok</button>
    </form>
    <?php
if(isset($_POST['ok'])){
    $jours = $_POST['jour'];
    if(empty($jours)){
        echo "Champs vide";
    }else{
        if(is_numeric($jours)){
            if($jours> 0 && $jours <=7){
                switch ($jours) {
    case 1:
        echo "Lundi";
        break;

    case 2:
        echo "Mardi";
        break;

    case 3:
        echo "Mercredi";
        break;

    case 4:
        echo "Jeudi";
        break;

    case 5:
        echo "Vendredi";
        break;

    case 6:
        echo "Samedi";
        break;

    case 7:
        echo "Dimanche";
        break;

    default:
        echo "Jour invalide";
}
            }
        }
    }
}
    ?>
</body>
</html>