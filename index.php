<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineWeb</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./javascript.js"></script>
    <script src="js.js"></script>
</head>
<body>



    <?php 
        INCLUDE("conecta.php");
        $sql = "SELECT * FROM alunos where nota > 80;";
        $declaracao = $conexao->prepare($sql);
        $declaracao->execute();
        $conteudos = $declaracao->fetchAll(PDO::FETCH_OBJ);
    ?>
    <div class="cabeçalho">
        <img id= "imagem" src="img\logo\logo info.png" width="30px" height= "50px" alt="">
        
        <div class="barra_pesquisa">
            <form action="processa.php" method="POST">
                <input type="text" id="pesquisa" name="pesquisa">
            </form>
            
        </div>
        
    </div>

    <h2 style=" color: white; text-align: center" id="titulo">Titulo aqui</h2>



    <div class="container conteudo">
        <script>
            var title = document.getElementById("titulo");
            title.innerHTML = "Alunos Destaques";
        </script>
        <?php
            $sql= "select nome from alunos where nota > 80;";
            $declaracao = $conexao->prepare($sql);
            $declaracao->execute([]);
            $destaques= $declaracao->fetchAll(PDO::FETCH_OBJ);
        ?>

        <?php $encode_json = json_encode($destaques, JSON_UNESCAPED_UNICODE );?>
        <div class="fila">
        <script>
            var info = document.createElement("h5");
            info.innerHTML = "Alunos com nota acima de 80 pontos:";
            document.getElementById("titulo").append(info);

            var t = document.createElement("h5");
            t.innerHTML = '<?=$encode_json?>';
            console.log
            document.getElementById("titulo").appendChild(t);
        </script>
            
        <?php

        

        

        
        foreach($conteudos as $conteudo){
        ?>
        <div class="cartao">
            <img class="foto" src="<?=$conteudo->foto?>" alt="">
            <ul>
                <li>
                    <h2 style="font-size: 30px"><?=$conteudo->nome;?></h2>
                </li>

                <li>
                    <h2 style="font-size: 25px"><?=$conteudo->disciplina;?></h2>
                </li>

                <li style="font-size: 25px"><?=$conteudo->nota?></li>
            </ul>
        </div>
        <?php }?>

        </div>
        

    </div>
</body>
</html>