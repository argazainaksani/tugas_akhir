
<?php



require 'functions.php';

$id_laporan = $_GET['id_laporan'];

if( hapus_keuangan($id_laporan) > 0 ) {

	echo "<script>
             
             alert('data berhasil dihapus');

             document.location.href= 'index.php?halaman=laporan2';

	      </script>";
}else{

	echo "<script>
             
             alert('data gagal dihapus');

               document.location.href= 'index.php?halaman=laporan2';

	      </script>";
}



?>