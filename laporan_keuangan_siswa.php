
<?php

require 'functions.php';

$siswa = query("SELECT * FROM laporan_siswa");


?>

<html>

<head>

	<title>pembayaran</title>

	<link rel="stylesheet" href="css/style2.css">

</head>

</head>
<body>

          <br><br>
		<caption class="title">Laporan keuangan siswa</caption><br><br>
   
    

	 <a href="tambah_laporan_keuangan_siswa.php" class="tambah">+ Tambah </a>
              <br><br>

	<table class="data-table">

        

		<thead>

			

			<tr>
				<th>NO</th>
				<th>Bulan</th>
				<th>Total Beban</th>
				<th>Sudah Dibayar</th>
				<th>Tanggal Bayar</th>
				<th>Status</th>
				<th>Action</th>
			</tr>

			<?php $i = 1; ?>

			<?php foreach($siswa as $row) : ?>
		
		</thead>

		<tbody>

			<tr>
				
                   <td><?= $i; ?></td>
				   
				   <td><?= $row['Bulan']; ?></td>

				   <td><?= $row['Total']; ?></td>
				   
				   <td><?= $row['sudah_dibayar']; ?></td>

				   <td><?= $row['tanggal_bayar']; ?></td>
				   
				   <td><?= $row['status']; ?></td>

				   <td>
                        
					 <a href="hapus_laporan_keuangan_siswa.php?id_laporan=<?= $row['id_laporan']; ?>" onclick="return confirm('yakin');"><img src="img/delete.png"></a> |
					 <a href="ubah_laporan_keuangan_siswa.php?id_laporan=<?= $row['id_laporan']; ?>"><img src="img/ubah.png"></a>

					</td>
                   
                  </tr>

                  <?php $i++; ?>

              <?php endforeach; ?>
		</tbody>
		
</body>
</html>