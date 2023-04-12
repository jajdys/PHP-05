<?php

echo '
<html>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <body>
    <title>Kantor wymiany walut</title>

    <div style="text-align:center;  width: 1200px;  height: 270px; padding: 10px;  background-color: #0000ff">
        <img src="grafika.jpg" style="border-size: 2px; border-style: solid; color: white; ">
    </div>

    <div style=" width: 150px;  min-height: 480px; float: left;  text-align: center;  padding: 10px">
        <button style="background: transparent; color: gray; border-size: 1px; margin: 5px 5px 5px 0px; padding: 10px"><a href="kwerendy.txt">Kwerendy</a></button><br><br>
        <button style="background: transparent; color: gray; border-size: 1px; margin: 5px 5px 5px 0px; padding: 10px"><a href="grafika.jpg">Grafika</a></button><br>
    </div>

    <div style="font-family: Arial; padding: 10px; background-color: #00b4ea; color: black; width: 1200px; height: 450px;">';
        include "tabela.php";
        echo'
        
    </div>

    <div style="color: white; font-family: Arial; text-align:center;  width: 1200px; padding: 10px; background-color: #0000ff;">
        <h2>Ogólnopolski Próbny Egzamin Zawodowy E.14 - 2018</h2>
        <h3>Autor: Patryk Jajdyk</h3>
    </div>

    </body>
</html>
';

?>  