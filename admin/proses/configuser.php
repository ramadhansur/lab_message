<?php
error_reporting(0);
session_start();
    if($_SESSION["keterangan"] == "0") {
        header("Location: ../index.php");
    }else if($_SESSION["keterangan"] == "1") {
        header("Location: ../../index.php");
    }else {
        header("Location: ../../login.php");
    }
?>