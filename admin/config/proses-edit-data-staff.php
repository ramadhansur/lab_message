<?php
include 'koneksi.php';
$id = $_POST['id'];
$foto_lama = $_POST['foto-lama'];
$foto = $_FILES['file']['name'];
$nama_lengkap = $_POST['nama-lengkap'];
$jabatan = $_POST['jabatan'];
$biografi = $_POST['biografi'];


$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
$x = explode('.', $foto);
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

if(empty($_FILES['file']['name'])){
    $edit_staff = mysqli_query($koneksi,"UPDATE data_staff SET id='$id', foto='$foto_lama', 
    nama_lengkap='$nama_lengkap', jabatan='$jabatan', biografi='$biografi' WHERE id='$id'");

        if ($edit_staff) {
            echo "
                <script>
                    alert('Berhasil Mengubah Data Staff');
                    window.location = '../data-staff.php';
                </script>
            ";
        }else {
                echo "
                    <script>
                        alert('Gagal Mengubah Data Staff');
                        window.location = '../edit-data-staff.php?no_str='+$no_str;
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

            $edit_staff = mysqli_query($koneksi,"UPDATE data_staff SET foto='$nama_file_baru', no_str='$no_str', no_sip='$no_sip', 
            nama_lengkap='$nama_lengkap', poli='$poli', spesialis='$spesialis', biografi='$biografi' WHERE no_str='$no_str'");

            if ($edit_staff) {
                echo "
                    <script>
                        alert('Berhasil Mengubah Data Staff');
                        window.location = '../data-staff.php';
                    </script>
                ";
            }else {
                    echo "
                        <script>
                            alert('Gagal Mengubah Data Staff');
                            window.location = '../edit-data-staff.php?no_str='+$no_str;
                        </script>
                    ";
                }
        }else{
            echo "
                <script>
                    alert('Ukuran File Terlalu Besar!!');
                    window.location = '../edit-data-staff.php?no_str='+$no_str;
                </script>
            ";
        }
    }else{
        echo "
                <script>
                    alert('File harus dengan format .Jpg , .Jpeg , .Png');
                    window.location = '../edit-data-staff.php?no_str='+$no_str;
                </script>
            ";
        }

}

?>