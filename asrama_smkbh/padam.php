<?php 
    include("config.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    else{
        $id = '';
    }

    mysqli_query($sambungan, "DELETE FROM pelajar WHERE id = '".$id."' ");
    header("location:paparan.php");
?>
