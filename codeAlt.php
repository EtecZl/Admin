<?php
session_start();
$con = mysqli_connect("localhost","root","","completlar");

if(isset($_POST['update_stud_data']))
{
    
    $IdProduto = $_POST['IdProduto'];
    $nome = $_POST['nome'];
    $descricao_imagem = $_POST['descricao_imagem'];
    $preco = $_POST['preco'];

    $query = "UPDATE produtos SET  nome='$nome', descricao_imagem='$descricao_imagem', preco='$preco' WHERE IdProduto='$IdProduto' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: HomeAdm.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: assets/erro/erro.php");
    }
}

?>