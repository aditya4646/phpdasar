<?php 
    session_start();
    require 'fungsi.php';
    if (!isset($_SESSION['login'])) {
        header('Location: login.php');
    }

    $id = $_GET['id'];
    if (hapus($id) > 0) {
        echo 
            "<script>
                alert('Berhasil menghapus data');
                document.location.href ='index.php';
            </script>";
    }else {
        echo 
            "<script>
                alert('Gagal menghapus data');
                document.location.href ='index.php';
            </script>";
    }
?>