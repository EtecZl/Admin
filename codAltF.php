<?php
session_start();
$con = mysqli_connect("localhost","root","","bd_ibm");

if(isset($_POST['update_stud_data']))
{
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $dp = $_POST['dp'];

    $query = "UPDATE empregados SET  nome='$nome', dp='$dp'";
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