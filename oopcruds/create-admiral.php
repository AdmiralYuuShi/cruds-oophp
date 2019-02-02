<?php
    include 'fungsi.php';
    $data = new cruds;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create Admiral</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method="POST">
        <input type="text" name="id" placeholder="ID Admiral">
        <input type="text" name="nama" placeholder="Nama Admiral">
        Tanggal Lahir : <input type="date" name="tanggal_lahir">
        <input type="text" name="asal" placeholder="Asal Negara">
        <input type="submit" value="Tambah" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $asal = $_POST['asal'];
            $cek = $data->createData("INSERT INTO admiral VALUES ('$id','$nama','$tanggal_lahir','$asal')");
            if($cek==true){
                echo "<script>alert('Berhasil');
                      window.location.href='index.php?halaman=data-admiral';</script>";
            }
        }
    ?>
</body>
</html>