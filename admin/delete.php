<?php
include '../conn.php';
// menyimpan data id kedalam variabel
$id_artikel   = $_GET['id_artikel'];
// query SQL untuk insert data
$query="DELETE * from t_artikel where id_artikel='$id_artikel'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>