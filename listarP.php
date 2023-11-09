<?php
include_once "codPesqP.php";

//consultar no banco de dados
$result_usuario = "SELECT * FROM produtos ORDER BY IdProduto";
$resultado_usuario = mysqli_query($conn, $result_usuario);

//Verificar se encontrou resultado na tabela "usuarios"
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
	while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
		echo "<h3>" . $row_usuario['IdProduto'] . "&nbsp;)&nbsp;" . $row_usuario  ['nome'] . "&nbsp;" . $row_usuario  ['descricao_imagem'] . "&nbsp;". $row_usuario  ['preco']  . "&nbsp;" . "</h3>" . "<br>";
	}
}else{
	echo "Nenhum Produto encontrado";
}