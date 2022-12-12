<?php
include 'koneksi.php';
$id = $_GET['id'];
$gambar = $_GET['gambar'];

$target = "../img-foto/".$gambar;
            
if (file_exists($target)){
    unlink($target);
}
$delete_banner = mysqli_query($koneksi, "DELETE FROM banner WHERE id='$id'");
if ($delete_banner) {
                echo "
                    <script>
                        alert('Berhasil Menghapus Banner');
                        window.location = '../data-informasi.php';
                    </script>
                ";
            }else {
                    echo "
                        <script>
                            alert('Gagal Menghapus Banner');
                            window.location = '../data-informasi?no_str='+$id+'&gambar='+$gambar;
                        </script>
                    ";
                }
?>