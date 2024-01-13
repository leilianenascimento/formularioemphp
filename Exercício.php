<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <div>
        <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
        $ano = isset( $_GET["ano"])? $_GET["ano"]: 0;
        $sexo = isset($_GET["sexo"])? $_GET["sexo"]:"[Sem Sexo]";
        $idade = date ("Y") - $ano;
        echo " $nome e $sexo tem $idade anos";

        ?>
        <a href="ex01aula8.html">Voltar</a>
     </div>
</body>
</html>
