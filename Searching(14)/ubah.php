<?php 
    require "fungsi.php";
    
    $id = $_GET['id'];
    $vapor = query("SELECT * FROM vapor WHERE id = $id")[0];
    
    if (isset($_POST["submit"])) {
        
        if (ubah($_POST) > 0) {
            echo "<script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>";
        }else{
            echo "<script>
                alert('data gagal diubah!');
                document.location.href = 'index.php';
            </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah data</title>
</head>
<body>
    <h1>ubah Data vapor</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $vapor["id"]; ?>">
        <ul>
            <li>
                <label for="merk">Merk:</label>
                <input type="text" name ="merk" id="merk" required value="<?= $vapor["merk"]; ?>">
            </li>
            <li>
                <label for="tipe">Tipe:</label>
                <input type="text" name ="tipe" id="tipe"required value="<?= $vapor["tipe"]; ?>">
            </li>
            <li>
                <label for="warna">Warna:</label>
                <input type="text" name ="warna" id="warna"required value="<?= $vapor["warna"];?>">
            </li>
            <li>
                <label for="gambar">Gambar:</label>
                <input type="text" name ="gambar" id="gambar"required value="<?= $vapor["gambar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li> 
        </ul>
    </form>

</body>
</html>