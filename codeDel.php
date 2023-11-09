<?php
session_start();
$con = mysqli_connect("localhost","root","","completlar");

if(isset($_POST['update_stud_data']))
{
    
    $IdProduto = $_POST['IdProduto'];

    $query = "DELETE FROM produtos WHERE IdProduto='$IdProduto' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: HomeAdm.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: alterarP1.php");
    }
}

?>