<?php
	include 'koneksi.php';
	session_start();
	$user = $_SESSION['user'];
	$pass = $_SESSION['pass'];
	$sql = "SELECT * FROM data WHERE username = '$user' AND password = '$pass'";
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		while ($row = mysqli_fetch_assoc($query)) {
			?>
			<form method="POST">
			<table width="40%" align="center">
							<tr>
					<td colspan="3" align="center">
						<h2>Data Diri Pengguna</h2><hr>
					</td>
					</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td><?php echo $row['nama'] ?></td>
					<td rowspan="7" width="30%">
						<td><button formaction="posting.php" class="side">POST</button></td><br>
						<td><button formaction="daftarpostingan.php" class="side">SHOW POST</button></td>
					</td>
				</tr>
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><?php echo $row['nim'] ?></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td>:</td>
					<td><?php echo $row['kelas'] ?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><?php echo $row['jKel'] ?></td>
				</tr>
				<tr>
					<td>Hobi</td>
					<td>:</td>
					<td>
						<?php
							$temp = $row['hobi'];
							$hobi = explode(',', $temp);
							for ($i=1; $i < count($hobi); $i++) { 
							echo $hobi[$i];
								if ($i < count($hobi)-1) {
									echo ", ";
								}
							}
						?>
				</td>
				</tr>
				<tr>
					<td>Fakultas</td>
					<td>:</td>
					<td><?php echo $row['fakultas'] ?></td>
				</tr>
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><?php echo $row['alamat'] ?></td>
				</tr>
				<tr>
					<td><a href="editprofile.php">Edit Profil</a></td>
				</tr>
			</table>
			</form>
			<?php
		}
	} else {
		echo "<center>Data Kosong</center>";
	}
?>