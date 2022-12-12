<?php
    include './koneksi.php';
    session_start();
    if (isset($_POST['login'])) {
        $username = mysqli_real_escape_string($koneksi,$_POST['username-login']);
        $password = mysqli_real_escape_string($koneksi,md5($_POST['password-login']));

        $result = mysqli_query($koneksi, "SELECT * FROM akun WHERE username = '$username' AND password = '$password'");

        $login = mysqli_num_rows($result);

        if ($login>0) {
            $row = mysqli_fetch_assoc($result);

            if ($row['keterangan']=="0") {
                session_start();
                $_SESSION['username'] = $row['username'];
                $_SESSION['keterangan'] = $row['keterangan'];
                $_SESSION['login'] = true;
                header('location:../index.php');
            }
        }
        else {
                echo "
                <script>
                    alert('Username/Password tidak ditemukan, silahkan coba lagi');
                    window.location = '../login.php';
                </script>
                ";
            }
    }
?>