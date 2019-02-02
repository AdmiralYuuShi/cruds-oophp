<?php
    include 'fungsi.php';
    $data = new cruds;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create Kapal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method="POST">
        <input type="text" name="id" placeholder="ID Kapal">
        <input type="text" name="nama" placeholder="Nama Kapal">
        <input type="text" name="kelas" placeholder="Kelas Kapal">
        <input type="text" name="type" placeholder="Type">
        <input type="submit" name="submit" value="Tambah">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $type = $_POST['type'];
            $cek = $data->createData("INSERT INTO kapal VALUES ('$id','$nama','$kelas','$type')");
            if($cek==true){
                echo "<script>alert('Berhasil');
			    window.location.href='index.php?halaman=data-kapal'</script>";
            }
        }
    ?>
</body>
</html>