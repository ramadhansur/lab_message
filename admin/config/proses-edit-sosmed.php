<?php
include 'koneksi.php';
$id = $_POST['id'];
$facebook = $_POST['facebook'];
$instagram = $_POST['instagram'];
$whatsapp = $_POST['whatsapp'];

    $edit_info = mysqli_query($koneksi,"UPDATE data_sosmed SET facebook='$facebook', instagram='$instagram', whatsapp='$whatsapp' WHERE id='$id'");

        if ($edit_info) {
            echo "
                <script>
                    alert('Berhasil Mengubah Sosial Media');
                    window.location = '../data-informasi.php';
                </script>
            ";
        }else {
                echo "
                    <script>
                        alert('Gagal Mengubah Sosial Media');
                        window.location = '../edit-data-sosial-media.php?id='+$id;
                    </script>
                ";
            }


?>