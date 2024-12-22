
<?php


require 'functions.php';

if( isset($_POST["submit"]) ) {

if( tambah_laporan($_POST) > 0 ) {
  
   echo "<script>
           
           alert('data berhasil ditambahkan !!');

           document.location.href = 'index.php?halaman=laporan';

         </script>";

}else{
   
   "<script>
           
           alert('data gagal ditambahkan !!');

           document.location.href = 'index.php?halaman=laporan';

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
    <label for="nama_pemabayaran">Nama Pembayaran</label>
    <input type="text" id="nama_pembayaran" name="nama_pembayaran">

    <label for="nominal">Nominal</label>
    <input type="text" id="nominal" name="nominal">

    <label for="cicilan">Jumlah Cicilan</label>
    <input type="text" id="cicilan" name="cicilan">
     
    <label for="aktif">Aktif</label>
    <select id="aktif" name="aktif">
      <option value="aktif">Aktif </option>
      <option value="tidak aktif">Tidak aktif</option>
    
    <input type="submit"  name="submit" value="Tambah Data">
  </form>
</div>

</body>
</html>