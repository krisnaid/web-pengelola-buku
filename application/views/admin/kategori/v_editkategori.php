<div class="container">
	<h4 class="text-center h4 mt-4">Edit Kategori</h4>
<p><a href="<?php echo base_url('admin/kategori'); ?>">Kembali</a></p>
	<?php foreach($kategori as $k){ ?>
	<form action="<?php echo base_url(). 'crud/updatekat'; ?>" method="post">
		<table class="table table-borderless" style="margin:20px auto; width: 800px;">
			<tr>
				<td>Nama Kategori</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $k->id_kategori ?>">
					<input type="text" class="form-control" name="kategori" value="<?php echo $k->nama_kategori ?>">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-primary" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>