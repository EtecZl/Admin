<?php
require("codeAdi.php");
$nome = $_POST['nome'];
$descricao_imagem = $_POST['descricao_imagem'];
$preco = $_POST['preco'];
$imagem = $_FILES['img']['tmp_name'];
$tamanho = $_FILES['img']['size'];
$tipo = $_FILES['img']['type'];
$nomeImg = $_FILES['img']['name'];

if ( $imagem != "none" )
{
    $fp = fopen($imagem, "rb");
    $conteudo = fread($fp, $tamanho);
    $conteudo = addslashes($conteudo);
    fclose($fp);

$queryInsercao = "INSERT INTO tabela_imagens (nome,
descrição_imagem, preco, nome_imagem,
tamanho_imagem, tipo_imagem, imagem) VALUES ('$nome',
'$descricao_imagem','$preco','$nome','$tamanho', '$tipo','$conteudo')";

 mysql_query($queryInsercao) or die("Algo deu errado ao inserir
 o registro. Tente novamente.");
echo 'Registro inserido com sucesso!';
header('Location: HomeAdm.php');
 if(mysql_affected_rows($conexao) > 0)
     print "A imagem foi salva na base de dados.";
 else
     print "Não foi possível salvar a imagem na base de dados.";
 }
else
    print "Não foi possível carregar a imagem.";
?>