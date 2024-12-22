
<?php




require 'functions.php';

$id_laporan = $_GET["id_laporan"];

$mhs = query("SELECT * FROM laporan_siswa WHERE id_laporan = $id_laporan")[0];

if( isset($_POST["submit"]) ) {


if( ubah_keuangan($_POST) > 0 ) {
  
   echo "<script>
           
           alert('data berhasil diubah !!');

           document.location.href = 'index.php?halaman=laporan2';

         </script>";

}else{

  echo 
   
   "<script>
           
           alert('data gagal diubah !!');

           document.location.href = 'index.php?halaman=laporan2';

         </script>";

}

}

?>





<html>
<body>
 <link rel="stylesheet" href="css/style3.css">
 
<div>
  <center>
     <h2>Ubah Data</h2>
  </center>
  <form action="" method="post">
    <input type="hidden" name="id_laporan" value="<?= $mhs['id_laporan']; ?>">
    <label for="bulan">Bulan</label>
    <select id="bulan" name="Bulan" value="<?= $mhs['Bulan']; ?>">
      <option value="januari">Januari</option>
      <option value="februari">Febuari</option>
      <option value="maret">Maret</option>
      <option value="april">April</option>
      <option value="mei">Mei</option>
      <option value="juni">Juni</option>
      <option value="juli">Juli</option>
      <option value="agustus">Agustus</option>
      <option value="september">September</option>
      <option value="oktober">Oktober</option>
      <option value="november">november</option>
      <option value="desember">Desember</option>

    </select>
    <label for="total_beban">Total Beban</label>
    <input type="text" id="total_beban" name="Total" value="<?= $mhs['Total']; ?>">

    <label for="sudah_dibayar">Sudah Dibayar</label>
    <input type="text" id="sudah_dibayar" name="sudah_dibayar" value="<?= $mhs['sudah_dibayar']; ?>">

    <label for="tanggal">Tanggal Bayar</label>
    <input type="text" id="tanggal" name="tanggal_bayar" value="<?= $mhs['tanggal_bayar']; ?>">
     
    <label for="status">Status</label>
    <select id="status" name="status" value="<?= $mhs['status']; ?>">
      <option value="Sudah Lunas">Sudah Lunas </option>
      <option value="belum Lunas">Belum Lunas</option>
    
    <input type="submit" name="submit" value="Ubah Data">
  </form>
</div>

</body>
</html>