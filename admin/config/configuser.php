<?php
session_start();
    if($_SESSION["keterangan"] == "0") {
        header("Location: ../index.php");
    }else {
        
        header("Location: ../login.php");
    }
?>