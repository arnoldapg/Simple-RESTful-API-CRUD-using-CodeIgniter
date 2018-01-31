<!DOCTYPE html>
<html>
<head>
	<title>RESTful Client</title>
</head>
<body>
	<?php echo form_open('kontak/edit'); ?>
	<?php echo form_hidden('id', $dataKontak[0]->id); ?>

	<table>
		<tr>
			<td>ID</td>
			<td><?php echo form_input('', $dataKontak[0]->id, 'disabled'); ?></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><?php echo form_input('nama', $dataKontak[0]->nama); ?></td>
		</tr>
		<tr>
			<td>Nomor</td>
			<td><?php echo form_input('nomor', $dataKontak[0]->nomor); ?></td>
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