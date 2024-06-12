<?php
include 'db_conn.php';


function tambah($data){
    global $conn;

    $id = $_POST['id'];
    $Kode = $_POST['Kode'];
	$Nama = $_POST['Nama'];
    $Satuan = $_POST['Satuan'];
    $Jumlah = $_POST['Jumlah'];
    $Tanggal = date('Y-m-d');
    $Gambar = $_POST['Gambar'];
    $JumlahKurang = $_POST['JumlahKurang'];

    $JumlahBaru = $Jumlah - $JumlahKurang;




    // query insert data
    $sql = "UPDATE `Barang` SET Kode='$Kode', Nama='$Nama', Satuan='$Satuan', Jumlah='$JumlahBaru', Gambar='$Gambar' WHERE id='$id'";
    $query=mysqli_query($conn, $sql);

    $tambahlaporan = "INSERT INTO `laporankeluar` VALUES ('', '$Kode', '$Nama', '$Satuan', '$Jumlah','$Tanggal' ,'$Gambar',  '$JumlahKurang', '$JumlahBaru')";
    $query=mysqli_query($conn, $tambahlaporan);

    return mysqli_affected_rows($conn);

}
?>