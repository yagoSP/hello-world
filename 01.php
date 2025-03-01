<?php


$flag = $_GET['flag'];
$_msg = "";
if($flag == 'Dayane'){
    $_msg = "Resposta correta!"
}
else{
    $_msg = "Resposta Errada!"
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>01</title>
        <meta charset="utf-8">
        <style>
            body{
                background-color: black;
                font-family: sans-serif;
                text-align: center;
                color: white;
            }
        </style>
    </head>
    <body>
        <h1>Digite o nome da Profana</h1>
        <form action="01.php" method="get">
            <input type="text" name="flag" placeholder="flag">
            <input type="submit">
        </form>
    </body>
</html>