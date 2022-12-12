<?php 
include 'koneksi.php';
    $no_str = $_POST['no_str'];
    $tambah_jadwal = mysqli_query($koneksi,"INSERT INTO jadwal_dokter (no_str,jam_masuk,jam_selesai,hari) 
    VALUES ('$no_str','','','')");

    if ($tambah_jadwal) {
        echo "
            <script>
                window.location = '../jadwal-dokter.php?no_str='+$no_str;
            </script>
        ";
    }
    else {
        echo "
            <script>
                alert('Proses Menambahkan Data Dokter Gagal!');
                window.location = '../jadwal-dokter.php';
            </script>
        ";
    }

?>