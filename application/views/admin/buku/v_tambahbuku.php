<div class="container">
	<h4 class="text-center h4 mt-4">Tambah Buku</h4>
<p><a href="<?php echo base_url('admin/buku'); ?>">Kembali</a></p>

    <?php echo form_open_multipart('crud/tambahbuku');?>
		<table class="table table-borderless" style="margin:20px auto; width: 800px;">
			<tr>
				<td>Nama Buku</td>
				<td><input class="form-control" type="text" name="nama_buku"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><textarea name="deskripsi_buku" class=" form-control" rows="5"></textarea></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>
					<select class="form-control" name="kategori">
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
				<td></td>
				<td><input class="btn btn-primary" type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</div>
<script>
$('.custom-file-input').on('change', function() { 
   let fileName = $(this).val().split('\\').pop(); 
   $(this).next('.custom-file-label').addClass("selected").html(fileName); 
});
</script>