<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROVA REGIMENTAL</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>CONEXÃO COM O BANCO DE DADOS ;p </h1>
    <?php
    require_once("conexao.php");
    ?>
    <main>
        <?php
        $sql = "select * from produto";
        $aparece = mysqli_query($conn, $sql);

        while($dados = mysqli_fetch_assoc($aparece)){
            echo "$dados[idproduto]  <br> $dados[tipo] - R$ $dados[preco] - ";
        }
        ?>
    </main>
    
</body>
</html>