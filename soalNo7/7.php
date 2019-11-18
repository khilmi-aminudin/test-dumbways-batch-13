
<?php  
	$koneksi = mysqli_connect("localhost","root","","dbperpus");
 
	// Check connection
	if( !$koneksi ){
	    die("Gagal terhubung dengan database: " . mysqli_connect_error());
	}


	//ambil data dari tabel mahasiswa
	$tampil = "SELECT * FROM category";
	$result = mysqli_query($koneksi,$tampil);
	$tampil2= "SELECT * FROM books";
	$r 		= mysqli_query($koneksi,$tampil2);
	// $ctg 	= mysqli_fetch_assoc($result);
	// var_dump($ctg["id"]);
	 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
			<th colspan="2" align="center" >Category</th>
			</tr>
			<tr>
				<th>Id</th>
				<th>nama</th>
			</tr>
		</thead>
		<tbody>

			<?php while ( $row=mysqli_fetch_assoc($result)) : ?>
			<tr>
				<td><?= $row['id'] ?></td>
				<td><?= $row['nama']?></td>
			</tr>
		<?php endwhile; ?>
		</tbody>
	</table>
	<br>
	<br>
	<table border="1">
		<thead>
			<tr>
			<th colspan="5" align="center" >Daftar Buku</th>
			<th>
				<a href="">tambah</a>
			</th>
			</tr>
			<tr>
				<th>Id</th>
				<th>nama</th>
				<th>stok</th>
				<th>image</th>
				<th>deskripsi</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>

			<?php while ( $r2=mysqli_fetch_assoc($r)) : ?>
			<tr>
				<td><?= $r2['id']?></td>
				<td><?= $r2['nama']?></td>
				<td><?= $r2['stok']?></td>
				<td><?= $r2['image']?></td>
				<td><?= $r2['deskripsi']?></td>
				<td>
					<a href="">hapus</a> |
					<a href="">ubah</a>
				</td>

			</tr>
		<?php endwhile; ?>
		</tbody>
	</table>



</body>
</html>

