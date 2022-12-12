<?php 
    session_start();
    session_unset();
    echo "
        <script>
            alert('Logout berhasil');
            window.location = '../../login.php';
        </script>
    ";
?>