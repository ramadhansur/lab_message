<?php
include "koneksi.php";

$id = $_POST['id'];
$no_str = $_POST['no-str'];
$hari = $_POST['hari'];
$jam_awal = $_POST['jam-awal'];
$jam_akhir = $_POST['jam-akhir'];

$proses_jadwal = mysqli_query($koneksi,"UPDATE jadwal_dokter SET hari='$hari', jam_masuk='$jam_awal', jam_selesai='$jam_akhir' WHERE id='$id'");
    
if($proses_jadwal) {
    
    header('Location: ../jadwal-dokter.php?no_str='.$no_str);
}else {
    echo "
        <script>
            alert('Gagal Menyimpan Jadwal Dokter!!');
            window.location = '../jadwal-dokter.php?no_str='$no_str'';
        </script>
    ";
}

?>