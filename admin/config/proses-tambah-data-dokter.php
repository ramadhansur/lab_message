<?php 
include 'koneksi.php';
    $no_str = $_POST['no-str'];
    $no_sip = $_POST['no-sip'];
    $nama_lengkap = $_POST['nama-lengkap'];
    $poli = $_POST['poli'];
    $spesialis = $_POST['spesialis'];
    $biografi = $_POST['biografi'];

    $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
    $nama_foto = $_FILES['file']['name'];
    $x = explode('.', $nama_foto);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];

    $nama_file_baru = "Dokter".$no_str.".".$ekstensi;

            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                if($ukuran < 20000000){			
                    move_uploaded_file($file_tmp, '../img-foto/'.$nama_file_baru);
                    $dokter_done = "INSERT INTO data_dokter (foto,no_str,no_sip,nama_lengkap,poli,spesialis,biografi) 
                    VALUES ('$nama_file_baru','$no_str','$no_sip','$nama_lengkap','$poli','$spesialis','$biografi')";
                    $simpan_dokter = mysqli_query($koneksi, $dokter_done);

                    if ($simpan_dokter) {
                        echo "
                            <script>
                                alert('Proses Menambahkan Data Dokter Berhasil!');
                                window.location = '../data-dokter.php';
                            </script>
                        ";
                    }
                    else {
                        echo "
                            <script>
                                alert('Proses Menambahkan Data Dokter Gagal!');
                                window.location = '../input-data-dokter.php';
                            </script>
                        ";
                        // die ('Gagal!' .mysqli_error($koneksi));
                    }
                }else{
                    echo "
                        <script>
                            alert('Ukuran File Terlalu Besar!!');
                            window.location = '../input-data-dokter.php';
                        </script>
                    ";
                }
            }else{
                echo "
                        <script>
                            alert('File harus dengan format .Jpg , .Jpeg , .Png');
                            window.location = '../input-data-dokter.php';
                        </script>
                    ";
                }

    
?>