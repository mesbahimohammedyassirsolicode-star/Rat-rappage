<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name = "num1"><br><br>
        <input type="number" name = "num2"><br><br>
        <input type="number" name = "num3"><br><br>
        <button type = "submit" name = "ok">OK</button>
    </form>
</body>
</html>


<?php

if(isset($_POST['ok']))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        if(empty($num1) || empty($num2) || empty($num3))
            {
                echo "une champ vide";
            }
        else {
            if ($num1 > $num2 && $num1 > $num3) 
                {
            echo "Largest is $num1";
        } elseif ($num2 > $num3) {
            echo "Largest is $num2";
        } else {
            echo "Largest is $num3";
        }

        }
    }