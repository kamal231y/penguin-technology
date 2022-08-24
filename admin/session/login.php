<?php
session_start();
if(isset($_GET['id']) && $_GET['id']=='true'){
    $_SESSION['PenguAdmin']="PenguAdmin";
    header("location:../add-products.php");
}
?>