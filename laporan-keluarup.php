

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Monthly Report</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
</head>


<body>

<br><br>
<div class="container">
<center>

<h2>Laporan Keluar</h2>
</center>
<br><br>
<table class="table table-bordered">
			<thead>				
            <tr>
                                                <tr>
                                                <th>Kode</th>
                                                <th>Nama</th>
                                                <th>Satuan</th>
                                                <th>Tanggal</th>
                                                <th>Gambar</th>
                                                <th>Jumlah Awal</th>
                                                <th>Barang Keluar</th>
                                                <th>Hasil</th>
            </tr>				
			</thead>
			<tbody>
            <?php
                                            include 'db_conn.php';
                                            $sql = mysqli_query($conn, "SELECT * from laporankeluar ORDER BY id desc");
                                            while($data=mysqli_fetch_array($sql)){
                                            ?>
                                            <tr>
                                                <td><?php echo $data['Kode']; ?></td>
                                                <td><?php echo $data['Nama']; ?></td>
                                                <td><?php echo $data['Satuan']; ?></td>
                                                <td><?php echo $data['Tanggal']; ?></td>
                                                <td><img src="image/<?php echo $data['Gambar']; ?>" alt="" style="width:70px; height:70px;"></td>
                                                <td><?php echo $data['Jumlah']; ?></td>
                                                <td><?php echo $data['JumlahKurang']; ?></td>
                                                <td><?php echo $data['Hasil']; ?></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>

                
							
			</tbody>
		</table>
	</div>

<script>

window.print();

</script>

</body>

</html>