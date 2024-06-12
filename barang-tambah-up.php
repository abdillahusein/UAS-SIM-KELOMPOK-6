<?php
include 'db_conn.php';
function upload(){
    $namafile = $_FILES['Gambar']['name'];
    $ukuranfile = $_FILES['Gambar']['size'];
    $error = $_FILES['Gambar']['error'];
    $tmpname = $_FILES['Gambar']['tmp_name'];



    // cek apakah gambar yg di upload
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namafile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));


    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {

        echo "<script>
            alert('Anda tidak mengupload gambar')
        </script>";
        return false;
    }
    // cek jika ukuran terlalu besar
    if ($ukuranfile > 2000000) {

        echo "<script>
            alert('ukuran gambar terlalu besar')
        </script>";
        return false;
    }
    // lolos pengecekan gambar siap di upload
    // generate nama baru gambar
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpname, './image/' . $namaFileBaru);

    return $namaFileBaru;
}


function tambah($data){
    global $conn;

    $Kode = $_POST['Kode'];
	$Nama = $_POST['Nama'];
    $Satuan = $_POST['Satuan'];
	$Jumlah = $_POST['Jumlah'];

    $Gambar = upload();
    if (!$Gambar) {
        return  false;
    }

    

    // query insert data
    $sql = "INSERT INTO `barang` VALUES ('', '$Kode', '$Nama', '$Satuan', '$Jumlah' ,'$Gambar')";
    $query=mysqli_query($conn, $sql);    
    return mysqli_affected_rows($conn);

}
?>