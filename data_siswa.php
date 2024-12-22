<?php

require 'functions.php';

$siswa = query("SELECT * FROM data_siswa");

?>




<html>

<head>

	<title>data siswa</title>

	<link rel="stylesheet" href="css/style2.css">

</head>

</head>
<body>

          <br><br>
		<caption class="title">Data Siswa</caption><br><br>
  
	    <a href="tambah_data_siswa.php" class="tambah">+ Tambah </a>
              <br><br>
			  <select  name="kelas">
      <option value="rpl">Rpl</option>
      
</select><br><br>
	<table class="data-table">

		<thead>

			

			<tr>
				<th>NO</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>No telepon</th>
				<th>Action</th>
				
			</tr>
			<?php $i = 1; ?>

			<?php foreach($siswa as $row) : ?>
		
		</thead>

		<tbody>

			<tr>
				
                   <td><?= $i; ?></td>
				   
				   <td><?= $row['nama']; ?></td>

				   <td><?= $row['alamat']; ?></td>
				   
				   <td><?= $row['no_telepon']; ?></td>

				   <td>
					   <a href="hapus_data_siswa.php?id=<?= $row['id']; ?>" onclick="return confirm('yakin');"><img src="img/delete.png"> |</a>
				   	<a href="ubah_data_siswa.php?id=<?= $row['id']; ?>"><img src="img/ubah.png"></a>
				   </td>
				
                  </tr>
                  <?php  $i++; ?>
                  <?php endforeach; ?>
		</tbody>
		
</body>
</html>