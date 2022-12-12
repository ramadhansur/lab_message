<?php
include 'koneksi.php';
    $id = $_POST['id'];
    $foto_lama = $_POST['foto-lama'];
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

if(empty($_FILES['file']['name'])){
    $edit_poli = mysqli_query($koneksi,"UPDATE data_poli SET foto='$foto_lama', nama_poli='$nama_poli', 
    jam_buka='$jam_buka', jam_buka='$jam_buka', deskripsi='$deskripsi' WHERE id='$id'");

        if ($edit_poli) {
            echo "
                <script>
                    alert('Berhasil Mengubah Data Poli');
                    window.location = '../data-poli.php';
                </script>
            ";
        }else {
                echo "
                    <script>
                        alert('Gagal Mengubah Data Poli');
                        window.location = '../edit-data-poli.php?id='+$id;
                    </script>
                ";
            }
}else{
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 20000000){			
            $target = "../img-foto/".$foto_lama;
            
            if (file_exists($target)){
                unlink($target);
            }
            
            move_uploaded_file($file_tmp, '../img-foto/'.$nama_file_baru);

            $edit_poli = mysqli_query($koneksi,"UPDATE data_poli SET foto='$nama_file_baru', nama_poli='$nama_poli', 
            jam_buka='$jam_buka', jam_buka='$jam_buka', deskripsi='$deskripsi' WHERE id='$id'");

            if ($edit_poli) {
                echo "
                    <script>
                        alert('Berhasil Mengubah Data Poli');
                        window.location = '../data-poli.php';
                    </script>
                ";
            }else {
                    echo "
                        <script>
                            alert('Gagal Mengubah Data Poli');
                            window.location = '../edit-data-poli.php?id='+$id;
                        </script>
                    ";
                }
        }else{
            echo "
                <script>
                    alert('Ukuran File Terlalu Besar!!');
                    window.location = '../edit-data-poli.php?id='+$id;
                </script>
            ";
        }
    }else{
        echo "
                <script>
                    alert('File harus dengan format .Jpg , .Jpeg , .Png');
                    window.location = '../edit-data-poli.php?id='+$id;
                </script>
            ";
        }

}

?>