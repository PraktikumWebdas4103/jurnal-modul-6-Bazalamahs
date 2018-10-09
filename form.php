<form action="simpan.php" method="post">
	Nama: <input type="text" name="nama" value="Nama Kamu" />
		<br />
	Nim: <input type="number" name="nim" />
		<br />
	Kelas: 
		<input type="radio" name="kelas" value="D3MI-4101" /> 
		D3MI-4101
		<input type="radio" name="kelas" value="D3MI-4102" /> 
		D3MI-4102
		<input type="radio" name="kelas" value="D3MI-4103" /> 
		D3MI-4103
		<input type="radio" name="kelas" value="D3MI-4104" /> 
		D3MI-4104
		<br />

	Hobi: 	<input type="checkbox" name="hobi"  value="baca" />Membaca Buku
      		<input type="checkbox" name="hobi" value="nulis" /> Menulis
      		<input type="checkbox" name="hobi" value="memancing"/> Memancing
		<br />

	Fakultas:
 	<select name="fakultas" >
     		<option value="Fakultas FIT"selected>Fakultas Ilmu Terapan</option>
     		<option value="Fakultas FEB">Fakultas Ekonomi Bisnis</option>
     		<option value="Fakultas FKB">Fakultas Komunikasi Bisnis</option>
     		<option value="Fakultas FIK">Fakultas Industri Kreatif</option>
     		<option value="Fakultas FRI">Fakultas Rekayasa Industri</option>
     		<option value="Fakultas FIF">Fakultas Informatika</option>
     		<option value="Fakultas FTE">Fakultas Teknik Eletro</option>
 	</select>
		<br />

	Alamat:
			<textarea name="alamat" rows="5" cols="20">
			
			</textarea>
		<br />
	<input type="submit" value="submit" >
</form>


<?php
 echo "Nama 	: ". $_POST['nama']. "<br />";
 echo "Nim 		: ". $_POST['nim']. "<br />";
 echo "Kelas 	: ". $_POST['kelas']. "<br />";
 echo "Hobi 	: ". $_POST['hobi']. "<br />";
 echo "Fakultas : ". $_POST['fakultas']. "<br />";
 echo "Alamat 	: ". $_POST['alamat']. "<br />";
?>