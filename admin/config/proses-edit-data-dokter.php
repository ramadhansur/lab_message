<?php
include 'koneksi.php';
$id = $_POST['id'];
$foto_lama = $_POST['foto-lama'];
$foto = $_FILES['file']['name'];
$no_str = $_POST['no-str'];
$no_sip = $_POST['no-sip'];
$nama_lengkap = $_POST['nama-lengkap'];
$poli = $_POST['poli'];
$spesialis = $_POST['spesialis'];
$biografi = $_POST['biografi'];


$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
$x = explode('.', $foto);
$ekstensi = strtolower(end($x));
$ukuran	= $_FILES['file']['size'];
$file_tmp = $_FILES['file']['tmp_name'];

$nama_file_baru = "Dokter".$no_str.".".$ekstensi;

if(empty($_FILES['file']['name'])){
    $edit_dokter = mysqli_query($koneksi,"UPDATE data_dokter SET id='$id', foto='$foto_lama', no_str='$no_str', no_sip='$no_sip',
    nama_lengkap='$nama_lengkap', poli='$poli', spesialis='$spesialis', biografi='$biografi' WHERE id='$id'");

        if ($edit_dokter) {
            echo "
                <script>
                    alert('Berhasil Mengubah Data Dokter');
                    window.location = '../data-dokter.php';
                </script>
            ";
        }else {
                echo "
                    <script>
                        alert('Gagal Mengubah Data Dokter');
                        window.location = '../edit-data-dokter.php?no_str='+$no_str;
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

            $edit_dokter = mysqli_query($koneksi,"UPDATE data_dokter SET foto='$nama_file_baru', no_str='$no_str', no_sip='$no_sip', 
            nama_lengkap='$nama_lengkap', poli='$poli', spesialis='$spesialis', biografi='$biografi' WHERE no_str='$no_str'");

            if ($edit_dokter) {
                echo "
                    <script>
                        alert('Berhasil Mengubah Data Dokter');
                        window.location = '../data-dokter.php';
                    </script>
                ";
            }else {
                    echo "
                        <script>
                            alert('Gagal Mengubah Data Dokter');
                            window.location = '../edit-data-dokter.php?no_str='+$no_str;
                        </script>
                    ";
                }
        }else{
            echo "
                <script>
                    alert('Ukuran File Terlalu Besar!!');
                    window.location = '../edit-data-dokter.php?no_str='+$no_str;
                </script>
            ";
        }
    }else{
        echo "
                <script>
                    alert('File harus dengan format .Jpg , .Jpeg , .Png');
                    window.location = '../edit-data-dokter.php?no_str='+$no_str;
                </script>
            ";
        }

}

?>