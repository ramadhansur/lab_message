<?php 
include 'koneksi.php';
    
    $id = $_POST['id'];
    $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
    $nama_foto = $_FILES['banner']['name'];
    $x = explode('.', $nama_foto);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['banner']['size'];
    $file_tmp = $_FILES['banner']['tmp_name'];


    $nama_file_baru = "Banner_".$id.".".$ekstensi;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 20000000){			
            move_uploaded_file($file_tmp, '../img-foto/'.$nama_file_baru);
            $simpan_banner = mysqli_query($koneksi,"INSERT INTO banner (id,banner) 
            VALUES ('$id','$nama_file_baru')");

            if ($simpan_banner) {
                echo "
                    <script>
                        alert('Proses Menambahkan Banner Promosi Berhasil!');
                        window.location = '../data-informasi.php';
                    </script>
                ";
            }
            else {
                echo "
                    <script>
                        alert('Proses Menambahkan Banner Gagal! Coba Check Kembali');
                        window.location = '../data-informasi.php';
                    </script>
                ";
            }
        }else{
            echo "
                <script>
                    alert('Ukuran File Terlalu Besar');
                    window.location = '../data-informasi.php';
                </script>
            ";
        }
    }else{
        echo "
            <script>
                alert('File harus dengan format .Jpg , .Jpeg , .Png');
                window.location = '../data-informasi.php';
            </script>
        ";
    }
    
?>