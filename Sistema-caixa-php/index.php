<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gelo & Mania</title>
</head>
<body>
     <h1 class="h1">Gelo&Mania</h1>
     <br>
     <main>
    <fieldset class="fieldset">
        <br>
    <form  class="input"action="calcular.php" method="post">
        <input type="text" name="nome" placeholder="  Digite o nome do Cliente...">
        <br>
        <input type="text" name="produto1" placeholder="  Digite o nome do 1° Produto...">
        <br>
        <input type="number" name="valor1" placeholder="  Digite o valor do 1° Produto...">
        <br>
        <input type="text" name="produto2" placeholder="  Digite o nome do 2° Produto...">
        <br>
        <input type="number" name="valor2" placeholder="  Digite o valor do 2° Produto...">
        <br>
        <input type="number" name="vlrecebido" placeholder="  O valor recebido foi...">
       <br>
        <input class="btnGerar" type="submit" value="Gerar Nota">
    </form>
</fieldset>
</main>
    
</body>
</html>

