<?php
require 'tambahbarangup.php';
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
          <label for="Kode">Kode:</label>
          <input type="text" name="Kode" required>

          <label for="Nama">Nama:</label>
          <input type="text"  name="Nama" required>
       
          <label for="Satuan">Satuan:</label>
          <input type="text" name="Satuan" required>
        
          <label for="Jumlah">Jumlah:</label>
          <input type="text"  name="Jumlah" required>
            
          <label >Gambar:</label>
          <input type="text"  name="Gambar" required>

        </fieldset>        
        <button type="submit" name="upload">Create</button>
       </form>
        </div>
      </div>
      
    </body>
</html>
