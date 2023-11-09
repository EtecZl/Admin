<?php

include_once "codPesqP.php";

 

 
$imagens = array(
    "Armario" => array("Descrição" => "Armário elegante e espaçoso para organização de roupas e acessórios.", "Preço" => 799),

);
 
// SQL para inserir os registros
$sql = "INSERT INTO Produtos (nome, caminho_imagem, descricao_imagem, preco) VALUES ";
 
foreach ($imagens as $nome => $dados) {
    $preco = $dados["Preço"];
    $descricao = $dados["Descrição"];
    $caminhoImagem = "assets/img/Log" . $nome . '.png'; // Ajuste o caminho conforme a localização real das imagens.
    $sql .= "('$nome', '$caminhoImagem', '$descricao', $preco),";
}
 
// Remova a vírgula extra do final
$sql = rtrim($sql, ',');
 
try {
    // Prepara a consulta SQL
    mysqli_prepare()
 
    // Executa a consulta
    $stmt->execute();
 
    echo "Registros inseridos com sucesso.";
} catch (PDOException $e) {
    echo "Erro ao inserir os registros: " . $e->getMessage();
}
?>