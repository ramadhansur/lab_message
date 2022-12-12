<?php 
include 'koneksi.php';
    $id = $_POST['id'];
    $nama_poli = $_POST['nama-poli'];
    $jam_buka = $_POST['jam-buka'];
    $jam_tutup = $_POST['jam-tutup'];
    $deskripsi = $_POST['deskripsi'];

    $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
    $nama_foto = $_FILES['file']['name'];
    $x = explode('.', $nama_foto);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];

    $panjang_nama = strlen($nama_poli);

    function randomString($length)
        {
            $str        = "";
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
            $max        = strlen($characters) - 1;
            for ($i = 0; $i < $length; $i++) {
                $rand = mt_rand(0, $max);
                $str .= $characters[$rand];
            }
            return $str;
        }
        
    $nama_file_baru = "Poli-".randomString($panjang_nama).".".$ekstensi;
    
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 20000000){			
            move_uploaded_file($file_tmp, '../img-foto/'.$nama_file_baru);
            $simpan_staff = mysqli_query($koneksi,"INSERT INTO data_poli (foto,nama_poli,jam_buka,jam_tutup,deskripsi) 
            VALUES ('$nama_file_baru','$nama_poli','$jam_buka','$jam_tutup','$deskripsi')");

            if ($simpan_staff) {
                echo "
                    <script>
                        alert('Proses Menambahkan Data Poli Berhasil!');
                        window.location = '../data-poli.php';
                    </script>
                ";
            }
            else {
                echo "
                    <script>
                        alert('Proses Menambahkan Data Poli Gagal!');
                        window.location = '../input-data-poli.php';
                    </script>
                ";
            }
        }else{
            echo 'Ukuran File Terlalu Besar';
        }
    }else{
        echo 'File harus dengan format .Jpg , .Jpeg , .Png';
    }

    
?>