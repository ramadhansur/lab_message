<?php 
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $notelp = $_POST['notelp'];

    $query_update_akun = "UPDATE tb_akun SET password='md5($password)' WHERE username='$username' AND no_hp='$notelp'";
    $update_akun = mysqli_query($koneksi, $query_update_akun);

    if($update_akun){
        echo "
            <script>
                alert('Berhasil menyimpan Password');
            </script>
        ";
        session_start();
        session_unset();

        $data = [
            'api_key' => 'b2d95af932eedb4de92b3496f338aa5f97b36ae0',
            'sender'  => '6289658591090',
            'number'  => $notelp,
            'message' => "Informasi Akun anda"."\n \n"."username : ".$username."\n"."password : ".$password."\n \n"."Simpan data tersebut untuk melakukan login pada website"
        ];
        
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://wacnk.sctech.my.id/app/api/send-message",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode($data))
        );
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo "
        <script>
        window.location = '../../login.php';
        </script>
        ";

    } else {
        echo "
            <script>
                alert('Gagal menyimpan Password, mohon dicoba kembali!');
                window.location = '../../confirm-login.php?user=$username&nohp=$notelp';
            </script>
        ";
    }

?>