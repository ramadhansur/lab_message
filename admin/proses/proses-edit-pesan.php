<?php 
    include 'koneksi.php';

    $id = $_POST['id'];
    $pemeriksaan = $_POST['pemeriksaan'];
    $pesan = $_POST['pesan'];

    $query_update_pesan = "UPDATE tb_pesan SET pemeriksaan='$pemeriksaan', pesan='$pesan' WHERE id='$id'";
    $update_pesan = mysqli_query($koneksi, $query_update_pesan);

    if($update_pesan){
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
                window.location = '../data-pesan.php?id=$id';
            </script>
        ";
    }

?>