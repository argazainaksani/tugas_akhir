
<?php

$conn = mysqli_connect("localhost", "root", "", "tugas_akhir");

function query($query) {

	global $conn;

 $result = mysqli_query($conn, $query);

 $rows = [];

 while( $row = mysqli_fetch_assoc($result) ) {

 	$rows[] = $row;
 }

 return $rows;

}

function cari($keyword) {

	$query = "SELECT * FROM pembayaran

              WHERE

              nis LIKE '%$keyword%' OR

              nama_siswa LIKE '%$keyword%' OR

              kelas LIKE '%$keyword%' OR

              jenis_biaya LIKE '%$keyword%' OR

              total_beban LIKE '%$keyword%'

              ";

	 return query($query);
}

function tambah_pembayaran($data) {

	global $conn;

	$nis = htmlspecialchars($data['nis']);

	$nama_siswa = htmlspecialchars($data['nama_siswa']);

	$kelas = htmlspecialchars($data['kelas']);

	$jenis_biaya = htmlspecialchars($data['jenis_biaya']);

	$total_beban = htmlspecialchars($data['total_beban']);

	$status = htmlspecialchars($data['status']);

	$query = "INSERT INTO pembayaran VALUES('', '$nis', '$nama_siswa', '$kelas', '$jenis_biaya', '$total_beban', '$status')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubah_pembayaran($data) {

	global $conn;

	$id = $data['id'];

	$nis = htmlspecialchars($data['nis']);

	$nama_siswa = htmlspecialchars($data['nama_siswa']);

	$kelas = htmlspecialchars($data['kelas']);

	$jenis_biaya = htmlspecialchars($data['jenis_biaya']);

	$total_beban = htmlspecialchars($data['total_beban']);

	$status = htmlspecialchars($data['status']);

	$query = "UPDATE pembayaran SET 
               
               nis = '$nis',

               nama_siswa = '$nama_siswa',

               kelas = '$kelas',

               jenis_biaya = '$jenis_biaya',

               total_beban = '$total_beban',

			   status = '$status'

               WHERE id = $id;

	           ";

	         mysqli_query($conn, $query);

	         return mysqli_affected_rows($conn);
}

function hapus_pembayaran($id) {

	global $conn;

	mysqli_query($conn, "DELETE FROM pembayaran WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function tambah_laporan($data) {

	global $conn;

	$nama_pembayaran = htmlspecialchars($data['nama_pembayaran']);

	$nominal = htmlspecialchars($data['nominal']);

	$cicilan = htmlspecialchars($data['cicilan']);

	$aktif = htmlspecialchars($data['aktif']);

	$query = "INSERT INTO laporan VALUES('', '$nama_pembayaran', '$nominal', '$cicilan', '$aktif')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubah_laporan($data) {

	global $conn;

	$id = $data['id'];

	$nama_pembayaran = htmlspecialchars($data['nama_pembayaran']);

	$nominal = htmlspecialchars($data['nominal']);

	$cicilan = htmlspecialchars($data['cicilan']);

	$aktif = htmlspecialchars($data['aktif']);

	$query = "UPDATE laporan SET 
              
              nama_pembayaran = '$nama_pembayaran',

              nominal = '$nominal',

              cicilan = '$cicilan',

              aktif = '$aktif'

              WHERE id = $id;

	           ";

	         mysqli_query($conn, $query);

	         return mysqli_affected_rows($conn);


}
function hapus_laporan($id) {

	global $conn;

	mysqli_query($conn, "DELETE FROM laporan WHERE id = $id");

	return mysqli_affected_rows($conn);
}
function tambah_keuangan($data) {

	global $conn;

	$bulan = htmlspecialchars($data['bulan']);

	$total_beban = htmlspecialchars($data['total_beban']);

	$sudah_dibayar = htmlspecialchars($data['sudah_dibayar']);

	$tanggal = htmlspecialchars($data['tanggal']);

	$status = htmlspecialchars($data['status']);

	$query = "INSERT INTO laporan_siswa VALUES('', '$bulan', '$total_beban', '$sudah_dibayar', '$tanggal', '$status')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubah_keuangan($data) {

	global $conn;

	$id_laporan = $data['id_laporan'];

	$Bulan = htmlspecialchars($data['Bulan']);

	$Total = htmlspecialchars($data['Total']);

	$sudah_dibayar = htmlspecialchars($data['sudah_dibayar']);

	$tanggal_bayar = htmlspecialchars($data['tanggal_bayar']);

	$status = htmlspecialchars($data['status']);

	$query = "UPDATE laporan_siswa SET 
              
              Bulan = '$Bulan',

              Total = '$Total',

              sudah_dibayar = '$sudah_dibayar',

              tanggal_bayar = '$tanggal_bayar',

              status = '$status'

              WHERE id_laporan = $id_laporan;

	           ";

	         mysqli_query($conn, $query);

	         return mysqli_affected_rows($conn);


}

function hapus_keuangan($id_laporan) {

	global $conn;

	mysqli_query($conn, "DELETE FROM laporan_siswa WHERE id_laporan = $id_laporan");

	return mysqli_affected_rows($conn);
}

function tambah_data_siswa($data) {

	global $conn;

	$nama = htmlspecialchars($data['nama']);

	$alamat = htmlspecialchars($data['alamat']);

	$no_telepon = htmlspecialchars($data['no_telepon']);

	$query = "INSERT INTO data_siswa VALUES('', '$nama', '$alamat', '$no_telepon')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus_data_siswa($id) {

	global $conn;

	mysqli_query($conn, "DELETE FROM data_siswa WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function ubah_data_siswa($data) {

	global $conn;

	$id = $data['id'];

	$nama = htmlspecialchars($data['nama']);

	$alamat = htmlspecialchars($data['alamat']);

	$no_telepon = htmlspecialchars($data['no_telepon']);

	$query = "UPDATE data_siswa SET 
              
              nama = '$nama',

              alamat = '$alamat',

              no_telepon = '$no_telepon'

              WHERE id = $id;

	           ";

	         mysqli_query($conn, $query);

	         return mysqli_affected_rows($conn);


}



?>