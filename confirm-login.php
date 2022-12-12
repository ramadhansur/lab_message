<?php 
  include 'admin/proses/koneksi.php';

  $user=$_GET['user'];
  $nohp=$_GET['nohp'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/confirm-login.css">
    <title>Confirm Password</title>
</head>

<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" action="admin/proses/proses-confirm.php" method="post">
                    <input type="text" name="notelp" value="<?= $nohp ?>" hidden>
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input" placeholder="username" name="username" value="<?= $user ?>" readonly>
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" class="login__input" placeholder="password" name="password">
                    </div>
                    <button class="button login__submit" type="submit" name="login">
                        <span class="button__text">Confirm Password</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                </form>
                <div class="social-login">
                    <h4>Masukkan Password yang anda inginkan</h4>
                </div>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>
</body>

</html>