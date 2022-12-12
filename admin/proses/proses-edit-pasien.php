<?php 
    include 'koneksi.php';

    $id_akun = $_POST['id-akun'];
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $notelp = $_POST['notelp'];
    $jeniskelamin = $_POST['jeniskelamin'];

    foreach($id as $data){
        $query_update_pasien = "UPDATE tb_pasien SET nama='$nama', email='$email', no_telp='$notelp', jenis_kelamin='$jeniskelamin' WHERE id='$data'";
        $update_pasien = mysqli_query($koneksi, $query_update_pasien);
    }
    $query_update_akun = "UPDATE tb_akun SET nama='$nama', email='$email', no_hp='$notelp' WHERE id='$id_akun'";
    $update_akun = mysqli_query($koneksi, $query_update_akun);

    if($update_pasien && $update_akun){
        echo "
            <script>
                alert('Berhasil menambahkan pasien baru');
                window.location = '../data-pasien.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Gagal menambah pasien Baru, Silahkan cek kembali!');
                window.location = '../data-pasien.php';
            </script>
        ";
    }

?>