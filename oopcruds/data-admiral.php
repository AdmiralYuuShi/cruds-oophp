<h2> Data Admiral </h2>
<p><a href="create-admiral.php">New+</a></p>
    <table border=1>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Asal Negara</th>
        </tr>
        <?php
            $no = 1;
            foreach($data->readData("SELECT * FROM admiral") as $setData){
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $setData['id']; ?></td>
            <td><?= $setData['nama']; ?></td>
            <td><?= $setData['tanggal_lahir']; ?></td>
            <td><?= $setData['asal']; ?></td>
        <?php 
            }
        ?>
    </table