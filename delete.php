<?php 
    include("connect.php");
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sql = "DELETE FROM user WHERE id=$id";
        if(mysqli_query($conn, $sql)){
            echo "<script>alert('data berhasil dihapus');</script>";
            echo "<script>window.location='index.php';</script>";
        }else{
            echo "<script>alert('data gagal dihapus');</script>";
        }
    }
    ?>