<?php





require 'functions.php';

if( isset($_POST["submit"]) ) {

if( tambah_keuangan($_POST) > 0 ) {
  
   echo "<script>
           
           alert('data berhasil ditambahkan !!');

           document.location.href = 'index.php?halaman=laporan2';

         </script>";

}else{
   
   "<script>
           
           alert('data gagal ditambahkan !!');

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
     <h2>Tambah Data</h2>
  </center>
  <form action="" method="post">
    <label for="bulan">Bulan</label>
    <select id="bulan" name="bulan">
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
           <option value="november">November</option>

           <option value="desember">Desember</option>

    </select>
    <label for="total_beban">Total Beban</label>
    <input type="text" id="total_beban" name="total_beban">

    <label for="sudah_dibayar">Sudah Dibayar</label>
    <input type="text" id="sudah_dibayar" name="sudah_dibayar">

    <label for="tanggal">Tanggal Bayar</label>
    <input type="text" id="tanggal" name="tanggal">
     
    <label for="status">Status</label>
    <select id="status" name="status">
      <option value="Sudah Lunas">Sudah Lunas </option>
      <option value="belum Lunas">Belum Lunas</option>
    
    <input type="submit"  name="submit" value="tambahkan Data">
  </form>
</div>

</body>
</html>