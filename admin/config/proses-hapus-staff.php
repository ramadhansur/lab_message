<?php
include "koneksi.php";
$id = $_GET['id'];
$gambar = $_GET['gambar'];

$target = "../img-foto/".$gambar;
            
if (file_exists($target)){
    unlink($target);
}
$hapus_staff = mysqli_query($koneksi,"DELETE FROM data_staff WHERE id='$id'");
    
if ($hapus_staff) {
    echo "
        <script>
            window.location = '../data-staff.php';
        </script>
    ";
}else {
    echo "
        <script>
            alert('Gagal Menghapus data Poli!!');
            window.location = '../data-staff.php';
        </script>
    ";
}

?>