<?php 

    include 'koneksi.php';

    $pemeriksaan = $_POST['pemeriksaan'];
    $pesan = $_POST['pesan'];

    $query_simpan_pesan = "INSERT INTO tb_pesan (pemeriksaan, pesan) VALUE ('$pemeriksaan', '$pesan')";

    $simpan_pesan = mysqli_query($koneksi, $query_simpan_pesan);

    if($simpan_pesan){
        echo "
            <script>
                alert('Berhasil menambahkan pesan baru');
                window.location = '../data-pesan.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Gagal menambah pesan Baru, Silahkan cek kembali!');
                window.location = '../kirim-pesan.php';
            </script>
        ";
    }

?>