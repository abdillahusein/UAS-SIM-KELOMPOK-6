<?php
include 'db_conn.php';



function tambah($data){
    global $conn;

    $Kode = $_POST['Kode'];
	$Nama = $_POST['Nama'];
    $Satuan = $_POST['Satuan'];
    $Jumlah = $_POST['Jumlah'];
    $Gambar = $_POST['Gambar'];



    // query insert data
    $sql = "INSERT INTO `barang` VALUES ('', '$Kode', '$Nama', '$Satuan', '$Jumlah' ,'$Gambar')";
    $query=mysqli_query($conn, $sql);    
    return mysqli_affected_rows($conn);

}
?>