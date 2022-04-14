<?php

    include('conecta.php');
    $pesquisa="{$_POST['pesquisa']}";
    $sql= "select * from alunos where nome LIKE '%$pesquisa%';";
    $declaracao = $conexao->prepare($sql);
    $declaracao->execute([]);
    $conteudos = $declaracao->fetchAll(PDO::FETCH_OBJ);
?>




<?php $encode_json = json_encode($conteudos, JSON_UNESCAPED_UNICODE ); ?>
<?php $decode_json = json_decode($encode_json, true); echo "<h2 style='color: grey'>".$pesquisa."</h2>";?>
<div class="container conteudo">

    <div class="fila">
        <?php foreach($decode_json as $conteudo){?>
            <div class="cartao">
                <img class="foto" src="<?=$conteudo['foto']?>" alt="">
                <ul>
                    <li>
                        <h2><?=$conteudo['nome'];?></h2>
                    </li>
                    <li><?=$conteudo['disciplina']?></li>
                    <li><?=$conteudo['nota']?></li>
                </ul>
            </div>
        <?php }?>
    </div>

    <script>
            var jsvar = '<?=$pesquisa?>';
            var title = document.getElementById("titulo");
            title.innerHTML = "Alunos em geral correspondentes à pesquisa";
    </script>
        

</div>