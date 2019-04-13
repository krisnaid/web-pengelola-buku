<div class="container">
	<h4 class="text-center h4 mt-4">Edit User</h4>
	<p><a href="<?php echo base_url('admin/buku'); ?>">Kembali</a></p>
	<?php foreach($buku as $b){ ?>
		<?php echo form_open_multipart('crud/updatebuku');?>
		<table class="table table-borderless" style="margin:20px auto; width: 800px;">
			<tr>
				<td>Judul</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $b->id_buku ?>">
					<input type="text" class="form-control" name="nama_buku" value="<?php echo $b->judul_buku ?>">
				</td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>
					<textarea name="deskripsi_buku" class=" form-control" rows="5"><?php echo $b->deskripsi ?></textarea>
				</td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>
					<select class="form-control" required name="kategori">
							<option value="">Pilih Kategori</option>
						<?php 
						foreach ($kategori as $k) {
							?>
							<option value="<?php echo $k->id_kategori; ?>"><?php echo $k->nama_kategori; ?></option>
							<?php
						}
						?>
					</select>
					</td>
				</tr>
			<tr>
				<td>Foto</td>
				<td>
					<div class="custom-file">
						<input type="file" name="foto" class="custom-file-input">
						<label for="customFile" id="preview" class="custom-file-label">Pilih Gambar</label>
					</div>
				</td>
			<tr>
				<tr>
					<td></td>
					<td><input type="submit" class="btn btn-primary" value="Simpan"></td>
				</tr>
			</table>
		</form>	
		<?php } ?>

		<script>
$('.custom-file-input').on('change', function() { 
   let fileName = $(this).val().split('\\').pop(); 
   $(this).next('.custom-file-label').addClass("selected").html(fileName); 
});
</script>