<?php

require 'functions.php';

$siswa = query("SELECT * FROM laporan");

?>

<html>

<head>

	<title>pembayaran</title>

	<link rel="stylesheet" href="css/style2.css">

</head>

</head>
<body>

          <br><br>
		<caption class="title">Laporan pembayaran</caption><br><br>
  
	    <a href="tambah_laporan.php" class="tambah">+ Tambah </a>
              <br><br>

	<table class="data-table">

		<thead>

			

			<tr>
				<th>NO</th>
				<th>Nama Pembayaran</th>
				<th>Nominal</th>
				<th>Jumlah cicilan</th>
				<th>Aktif</th>
				<th>Action</th>
				
			</tr>

			<?php $i = 1; ?>

			<?php foreach($siswa as $row) : ?>
		
		</thead>

		<tbody>

			<tr>
				
                   <td><?= $i; ?></td>
				   
				   <td><?= $row['nama_pembayaran']; ?></td>

				   <td><?= $row['nominal']; ?></td>
				   
				   <td><?= $row['cicilan']; ?></td>

				   <td><?= $row['aktif']; ?></td>
				   <td>

				   	<a href="hapus_laporan.php?id=<?= $row['id']; ?>" onclick="return confirm('yakin');"><img src="img/delete.png"> |</a>
				   	<a href="ubah_laporan.php?id=<?= $row['id']; ?>"><img src="img/ubah.png"></a>

				   </td>
				
                  </tr>

                  <?php  $i++; ?>
                  <?php endforeach; ?>
		</tbody>
		
</body>
</html>