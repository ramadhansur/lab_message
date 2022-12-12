<?php
include 'koneksi.php';
$id = $_GET['id'];

$delete_pesan = mysqli_query($koneksi, "DELETE FROM tb_pesan WHERE id='$id'");
if ($delete_pesan) {
    echo "
        <script>
            alert('Berhasil Menghapus Data Pesan');
            window.location = '../data-pesan.php';
        </script>
    ";
}else {
        echo "
            <script>
                alert('Gagal Menghapus Data Pesan');
                window.location = '../data-pesan.php;
            </script>
        ";
    }
?>