<div class="container">
	<h4 class="text-center h4 mt-4">Tambah kategori</h4>
<p><a href="<?php echo base_url('admin/kategori'); ?>">Kembali</a></p>

	<form action="<?php echo base_url(). 'crud/tambahkat_aksi'; ?>" method="post">
		<table class="table table-borderless" style="margin:20px auto; width: 800px;">
			<tr>
				<td>Nama Kategori</td>
				<td><input class="form-control" type="text" name="kategori"></td>
			</tr>
			<tr>
				<td></td>
				<td><input class="btn btn-primary" type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</div>