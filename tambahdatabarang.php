<?php
require 'tambahdatabarangup.php';
if(isset($_POST["upload"])){
	if( tambah($_POST) < 0){
        echo "
            <script>
                alert  ('no data added!');
                document.location.href = 'lobby.php';
            </script>
        ";
    } else {
        echo "<script>
        alert  ('data has been added!');
        document.location.href = 'lobby.php';
    </script>";
    }
}
?>






<?php
include 'db_conn.php';
$id = (int) $_GET['id']; 
$sql = "SELECT * FROM Barang WHERE id='$id'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($query);
?>


<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="tambahsuplayer.css">
    </head>
    <body>
      <div class="row">
    <div class="col-md-12">
      <form action="" method="post">
        <h1> Create Barang </h1>
        
        <fieldset>
          <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
          <label for="Kode">Kode:</label>
          <input type="text" name="Kode" value="<?php  echo $data['Kode'];?>" >
          <label for="Nama">Nama:</label>
          <input type="text"  name="Nama" value="<?php  echo $data['Nama'];?>">
       
          <label for="Satuan">Satuan:</label>
          <input type="text" name="Satuan" value="<?php  echo $data['Satuan'];?>">
        
          <label for="Jumlah">Jumlah Awal</label>
          <input type="text"  name="Jumlah" value="<?php  echo $data['Jumlah'];?>">
          
          <input type="hidden" name="Gambar" value="<?php echo  $data['Gambar'];?>">



          <label for="Jumlah">Menambahkan Jumlah</label>
          <input type="text"  name="JumlahTambah" required>
          

        </fieldset>        
        <button type="submit" name="upload">Create</button>
       </form>
        </div>
      </div>
      
    </body>
</html>
