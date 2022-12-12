<?php 
    // ---------------Koneksi Start--------------------

    // // Database Hosting
    // $koneksi = mysqli_connect("sql105.epizy.com", "epiz_31138764", "Zj0ckitl72lu", "epiz_31138764_db_daqu");
    
    // function query($query){
    //     global $koneksi;
    //     $result1 = mysqli_query($koneksi, $query);
    //     $rows1 = [];
    //     while($row1 = mysqli_fetch_assoc($result1)){
    //         $rows1[] = $row1;
    //     }
    //     return $rows1;
    // }


    //Database Localhost
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "company_profile_KDS";

    $koneksi = mysqli_connect($servername, $username, $password, $database);

    if(!$koneksi)
    {
        die("Error, Please Try Again:" . mysqli_connect_error());
    }

    // ---------------Koneksi End--------------------
    $tampil_banner = mysqli_query($koneksi, "SELECT * FROM banner");

    