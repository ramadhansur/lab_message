<?php
include 'koneksi.php';
$nama = $_GET['nama'];
$notelp = $_GET['notelp'];
$email = $_GET['email'];
$tanggal = $_GET['tanggal'];
$bulan = $_GET['bulan'];

$delete_pasien = mysqli_query($koneksi, "DELETE FROM tb_pasien WHERE nama='$nama' AND no_telp='$notelp' AND email='$email' AND DAY(date)='$tanggal' AND MONTH(date)='$bulan'");
if ($delete_pasien) {
    echo "
        <script>
            alert('Berhasil Menghapus Data Pasien');
            window.location = '../data-pasien.php';
        </script>
    ";
}else {
        echo "
            <script>
                alert('Gagal Menghapus Data Pasien');
                window.location = '../data-pasien.php;
            </script>
        ";
    }
?>