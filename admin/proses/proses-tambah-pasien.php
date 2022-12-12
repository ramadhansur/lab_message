<?php 

    include 'koneksi.php';

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $notelp = $_POST['notelp'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $pemeriksaan = $_POST['pemeriksaan'];

    $username_first = implode(" ", array_slice(explode(" ", $nama), 0, 1));
    $username1 = strtolower($username_first);


    function randomString($length)
    {
        $str        = "";
        $characters = '123456789';
        $max        = strlen($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }

    $query_cek_akun = mysqli_query($koneksi, "SELECT * FROM tb_akun WHERE nama = '$nama' AND no_hp = '$notelp' AND email = '$email'");

    $cek_akun = mysqli_num_rows($query_cek_akun);

    if ($cek_akun>0) {
        foreach($pemeriksaan as $data_p){
            $query_simpan_pasien = "INSERT INTO tb_pasien (nama,email,no_telp,jenis_kelamin,pemeriksaan,status) VALUE ('$nama', '$email', '$notelp', '$jeniskelamin', '$data_p', 'BELUM')";
            $simpan_pasien = mysqli_query($koneksi, $query_simpan_pasien);
        }
    
        if($simpan_pasien){
            echo "
                <script>
                    alert('Berhasil menambahkan pesan baru');
                    window.location = '../data-pasien.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Gagal menambah pesan Baru, Silahkan cek kembali!');
                    window.location = '../input-data-pasien.php';
                </script>
            ";
        }
    }
    else {
        foreach($pemeriksaan as $data_p){
            $query_simpan_pasien = "INSERT INTO tb_pasien (nama,email,no_telp,jenis_kelamin,pemeriksaan,status) VALUE ('$nama', '$email', '$notelp', '$jeniskelamin', '$data_p', 'BELUM')";
            $simpan_pasien = mysqli_query($koneksi, $query_simpan_pasien);
        }

        $query_simpan_akun = "INSERT INTO tb_akun (nama,username,email,password,no_hp,keterangan) VALUE ('$nama', '$username1".randomString(3)."', '$email', '', '$notelp', '1')";
        $simpan_akun = mysqli_query($koneksi, $query_simpan_akun);
    
        if($simpan_pasien and $simpan_akun){
            echo "
                <script>
                    alert('Berhasil menambahkan pesan baru');
                    window.location = '../data-pasien.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Gagal menambah pesan Baru, Silahkan cek kembali!');
                    // window.location = '../input-data-pasien.php';
                </script>
            ";
        }
    }

?>