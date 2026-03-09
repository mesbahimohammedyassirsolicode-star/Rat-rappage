<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST">
        <input type="number" name = "num">
        <input type="text" name = "bool">
        <button type = "submit" name = "ok">OK</button>
    </form>
</body>
</html>
<?php

if(isset($_POST['ok']))
    {
        $num = $_POST['num'];
        $bool = $_POST['bool'];

        if ($num >= 18 && $bool == "true")
            {
                echo "acces allowed";
            }
            else {
                echo "acces denied";
            }
    }