<?php 
include 'koneksi.php';
    $nama_lengkap = $_POST['nama-lengkap'];
    $jabatan = $_POST['jabatan'];
    $biografi = $_POST['biografi'];

    $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
    $nama_foto = $_FILES['file']['name'];
    $x = explode('.', $nama_foto);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];

    $panjang_nama = strlen($nama_lengkap);

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
    
    $nama_file_baru = "Staff-".randomString($panjang_nama).".".$ekstensi;
    
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 20000000){			
                move_uploaded_file($file_tmp, '../img-foto/'.$nama_file_baru);
                    $simpan_staff = mysqli_query($koneksi,"INSERT INTO data_staff (foto,nama_lengkap,jabatan,biografi) 
                    VALUES ('$nama_file_baru','$nama_lengkap','$jabatan','$biografi')");

                if ($simpan_staff) {
                    echo "
                        <script>
                            alert('Proses Menambahkan Data Staff Berhasil!');
                            window.location = '../data-staff.php';
                        </script>
                    ";
                }
                else {
                    echo "
                            <script>
                                alert('Ukuran File Terlalu Besar!!');
                                window.location = '../input-data-staff.php';
                            </script>
                        ";
                }
            }else{
                echo "
                            <script>
                                alert('File harus dengan format .Jpg , .Jpeg , .Png');
                                window.location = '../input-data-staff.php';
                            </script>
                        ";
            }
        }else{
            echo 'File harus dengan format .Jpg , .Jpeg , .Png';
        }
    
?>