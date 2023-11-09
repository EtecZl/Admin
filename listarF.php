<?php
include_once "codPesqF.php";

//consultar no banco de dados
$result_usuario = "SELECT * FROM empregados ORDER BY id";
$resultado_usuario = mysqli_query($conn, $result_usuario);

//Verificar se encontrou resultado na tabela "usuarios"
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
	while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
		echo "<h3>" . $row_usuario['id'] . "&nbsp;)&nbsp;" . $row_usuario  ['nome'] . "&nbsp;" . $row_usuario  ['dp']. "&nbsp;" . "</h3>" . "<br>";
	}
}else{
	echo "Nenhum usuário encontrado";
}