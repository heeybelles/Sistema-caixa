<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta author="Eduarda Belles e Takeshi Bezerra" descrption="Atividade de PW">
     <link rel="stylesheet" href="calstyle.css">
     <title>Nota Gerada</title>
</head>
<body>
     <h1>Nota fiscal</h1>
     <main>
     <fieldset class="quadro">
     <div class="text">   
<?php
  
     $nome = $_POST['nome'];
     $valor1 = $_POST['valor1'];
     $valor2 = $_POST['valor2'];
     $vlrecebido= $_POST['vlrecebido'];
     $produto1=$_POST['produto1'];
     $produto2=$_POST['produto2'];
     
     
    $soma = $valor1 + $valor2;
    $subtracao= $vlrecebido - $soma;  ;
    

    echo "<h4 font face='Arial'><b>O nome do Cliente é: </b> $nome <br></font>";
    echo "<h4 font face='Arial'><b>O produto é:</b> $produto1  R$:$valor1 <br></font>";
    echo "<h4 font face='Arial'><b>O produto é:</b> $produto2  R$:$valor2<br></font>";
    echo "<h4 font face='Arial'><b>O cliente gastou: </b> R$: $soma <br></font>";
    echo "<h4 font face='Arial'><b>O valor do troco será de:</b> R$: $subtracao <br></font>";
    ?>     
    </div>
    </fieldset>
    </main>
</body>

</html>

    

    