
<?php

require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM pembayaran

              WHERE

              nis LIKE '%$keyword%' OR

              nama_siswa LIKE '%$keyword%' OR

              kelas LIKE '%$keyword%' OR

              jenis_biaya LIKE '%$keyword%' OR

              total_beban LIKE '%$keyword%'



	          ";

$siswa = query($query);

?>

         
        
              
		<table class="data-table">
         
		<thead>
			

			<tr>
				<th>NO</th>
				<th>Nis</th>
				<th>Nama Siswa</th>
				<th>Kelas</th>
				<th>Jenis Biaya</th>
				<th>Total Beban</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
            <?php $i = 1; ?>
			<?php foreach($siswa as $row) : ?>
		
		</thead>

		<tbody>

			<tr>
				
                   <td><?= $i;  ?></td>

                   <td><?= $row['nis']; ?></td>

                   <td><?= $row['nama_siswa']; ?></td>

                   <td><?= $row['kelas']; ?></td>

                   <td><?= $row['jenis_biaya']; ?></td>

                   <td><?= $row['total_beban']; ?></td>

                   <td><?= $row['status']; ?></td>

                   <td>

                  <a href="hapus.php4?id_laporan=<?= $row['id_laporan']; ?>" onclick="return confirm('yakin');"><img src="img/delete.png"></a> |
					 <a href="ubah.php4?id_laporan=<?= $row['id_laporan']; ?>"><img src="img/ubah.png"></a>

                   </td>
                   
                  </tr>
               <?php $i++; ?>

              <?php endforeach; ?>
		</tbody>
	</table>