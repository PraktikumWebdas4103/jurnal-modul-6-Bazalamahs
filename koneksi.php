 <?php 
$host ="localhost"; 
$user ="root"; 
$pass =""; 
$daba ="mahasiswa"; 

mysql_select_db($daba) or die ("database tidak bisa dibuka"); 
$sql="INSERT INTO mahasiswa(nama,nim,kelas,hobi,fakultas,alamat)VALUES ('$nama,')  " 
?>