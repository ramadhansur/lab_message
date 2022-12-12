<?php
include 'koneksi.php';
$id = $_GET['id'];
$gambar = $_GET['gambar'];

$target = "../img-foto/".$gambar;
            
if (file_exists($target)){
    unlink($target);
}
$delete_dokter = mysqli_query($koneksi, "DELETE FROM data_dokter WHERE id='$id'");
if ($delete_dokter) {
                echo "
                    <script>
                        alert('Berhasil Menghapus Data Dokter');
                        window.location = '../data-dokter.php';
                    </script>
                ";
            }else {
                    echo "
                        <script>
                            alert('Gagal Menghapus Data Dokter');
                            window.location = '../edit-data-dokter.php?no_str='+$no_str;
                        </script>
                    ";
                }
?>