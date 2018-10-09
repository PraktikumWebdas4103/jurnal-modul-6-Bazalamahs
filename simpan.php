 <?php 
include 'koneksi.php'; 
 $nama			=	$_POST['nama']. "<br />";
 $nim			=	$_POST['nim']. "<br />";
 $kelas			=	$_POST['kelas']. "<br />";
 $hobi			=	$_POST['hobi']. "<br />";
 $fakultas		=	$_POST['fakultas']. "<br />";
 $alamat		=	$_POST['alamat']. "<br />";
$query=mysql_query("insert into anggota (nim,nama,jk,email,alamat) value ('$nim','$nama','$jk','$email','$alamat')"); 
 
if ($query) 
{ 
header ('location : formtampildata.php'); 
} 
else 
{ 
header ('location : forminputdata.php'); 
} 
include "form.php"; 
 
?>