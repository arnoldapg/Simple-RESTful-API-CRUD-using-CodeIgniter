<!DOCTYPE html>
<html>
<head>
	<title>RESTful Client</title>
</head>
<body>
	<font color="orange">
		<?php echo $this->session->flashdata('hasil'); ?>
	</font>

	<table border="1">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Nomor</th>
			<th>Action</th>
		</tr>
		<?php
			foreach($dataKontak as $kontak){
				echo
					"<tr>
						<td>$kontak->id</td>
			              <td>$kontak->nama</td>
			              <td>$kontak->nomor</td>
			              <td>".anchor('kontak/edit/'.$kontak->id,'Edit')."
			                  ".anchor('kontak/delete/'.$kontak->id,'Delete')."</td>
					</tr>";
			}
		?>
	</table>

	<a href="http://localhost/rest_ci_client/index.php/kontak/create">Tambah data</a>
</body>
</html>