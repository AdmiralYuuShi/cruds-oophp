   <h2>Data Kapal</h2>
   <p><a href="create-kapal.php">New+</a></p>
    <!-- Membuat Tabel Data Kapal -->
    <table border=1>
    <!-- Header Tabel -->
    <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Type</th>
    </tr>
    <!-- Akhir Header Tabel -->
    <!-- Perulangan untuk memanggil data -->
    <?php
        $no = 1;
        foreach ($data->readData("SELECT * FROM kapal") as $setData){
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $setData['id']; ?></td>
        <td><?= $setData['nama']; ?></td>
        <td><?= $setData['kelas']; ?></td>
        <td><?= $setData['type']; ?></td>
    </tr>

    <?php 
        }
    ?>
    <!-- Akhir Perulangan -->