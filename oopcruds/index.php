<?php
include 'fungsi.php';
$data = new cruds;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OOPCRUDS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<center>
    <h1>DATABASE PANGKALAN</h1>
    <a href="index.php?halaman=index">Home</a> ||
    <a href="index.php?halaman=data-admiral">Data Admiral</a> ||
    <a href="index.php?halaman=data-kapal">Data Kapal</a> ||
    <a href="index.php?halaman=data-peralatan">Data Peralatan</a><hr/>
    <?php
    if(isset($_GET['halaman'])){
        $page = $_GET['halaman'];
        switch($page){
            case 'index':
                echo 'Kan Ko Re, Hajimaru Yo!';
                break;
            case 'data-admiral':
                include 'data-admiral.php';
                break;
            case 'data-kapal':
                include 'data-kapal.php';
                break;
            default:
                echo '404 Page Not Found';
                break;
        }
    }else{
        echo 'Kan Ko Re, Hajimaru Yo!';
    }
    ?>
</center>
</body>
</html>