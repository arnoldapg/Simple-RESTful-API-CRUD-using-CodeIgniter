<!DOCTYPE html>
<html>
<head>
	<title>RESTful Client</title>
</head>
<body>
	<?php echo form_open_multipart('kontak/create'); ?>
	<table>
		<tr>
			<td>Nama</td>
			<td><?php echo form_input('nama'); ?></td>
		</tr>
		<tr>
			<td>Nomor</td>
			<td><?php echo form_input('nomor'); ?></td>
		</tr>
		<tr>
			<td colspan="2">
				<?php echo form_submit('submit', 'Simpan'); ?>
				<?php echo anchor('kontak', 'Kembali'); ?>
			</td>
		</tr>
	</table>
	<?php echo form_close(); ?>
</body>
</html>