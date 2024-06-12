<?php
include 'db_conn.php';
function tambah($data){
    global $conn;

    $Name = $_POST['Name'];
	$Alamat = $_POST['Alamat'];
    $Perusahaan = $_POST['Perusahaan'];
    $Nomor = $_POST['Nomor'];

    

    // query insert data
    $sql = "INSERT INTO `suplayer` VALUES ('', '$Name', '$Alamat', '$Perusahaan', '$Nomor')";
    $query=mysqli_query($conn, $sql);    
    return mysqli_affected_rows($conn);

}
?>