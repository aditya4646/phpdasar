<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan Post</title>
</head>
<body>
    <?php if (isset($_POST['submit'])) : ?>
        <h1>Selamat Datang,<?= $_POST["nama"] ?></h1>
    <?php endif; ?>
    <form method="post">
        Masukan Nama:
        <input type="text" name="nama">
        <button type="submit" name="submit">Geeett No</button>
    </form>
</body>
</html>