<?php 
include 'db_conn.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM barang WHERE id='$id'")or die(mysqli_error());
header("location:barang-keluar.php?pesan=hapus");
?>