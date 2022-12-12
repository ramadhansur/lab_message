<?php 
include 'koneksi.php';

$pesan = mysqli_query($koneksi, "SELECT * FROM tb_pasien WHERE status = 'BELUM' ORDER BY id ASC");
$kirim = array();

//==Greeting Start==
$jam = date('H:i');
$pagi = ('12:00');
$siang = ('16:00');
$sore = ('19:00');
$malam = ('00:00');

if($jam < $pagi){
    $ucapan = "Selamat Pagi";
}else if($jam < $siang){
    $ucapan = "Selamat Siang";
}else if($jam < $sore){
    $ucapan = "Selamat Sore";
}else if($jam < $malam){
    $ucapan = "Selamat Malam";
}
//==ngombeoGreeting End==

while($data_pesan = mysqli_fetch_array($pesan)){
  $kirim[]=$data_pesan;
}

foreach($kirim as $data1){
    $pemeriksaan = explode(",",$data1['pemeriksaan']);
    
    foreach($pemeriksaan as $isi_pesan){    
        $pesan_pasien = mysqli_query($koneksi, "SELECT * FROM tb_pesan WHERE pemeriksaan = '$isi_pesan'");
        while($isi = mysqli_fetch_array($pesan_pasien)){

            $sql_akun = mysqli_query($koneksi, "SELECT * FROM tb_akun WHERE nama = '".$data1['nama']."' AND no_hp ='".$data1['no_telp']."' AND email ='".$data1['email']."'");
            $data_akun = mysqli_fetch_array($sql_akun);

            $link_password = "\n \n"."Username = ".$data_aku['username'];
            
            $data = [
                'api_key' => 'b2d95af932eedb4de92b3496f338aa5f97b36ae0',
                'sender'  => '6289658591090',
                'number'  => $data1['no_telp'],
                'message' => $ucapan." Tn/Ny. ".$data1['nama']."\n\n".$isi['pesan'].$link_password
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
        }

        $ubah_status = mysqli_query($koneksi,"UPDATE tb_pasien SET status='SUDAH' WHERE id = '".$data1['id']."'");

    }

    // echo $response;
}

    header("location: ../data-pasien.php");

?>