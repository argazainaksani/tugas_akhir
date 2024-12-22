
<?php


require 'functions.php';

$id = $_GET['id'];

if( hapus_data_siswa($id) > 0 ) {

	echo "<script>
             
             alert('data berhasil dihapus');

             document.location.href= 'index.php?halaman=data_siswa';

	      </script>";
}else{

	echo "<script>
             
             alert('data gagal dihapus');

               document.location.href= 'index.php?halaman=data_siswa';

	      </script>";
}



?>