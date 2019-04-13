<div class="container">
	<h4 class="text-center h4 mt-4">Daftar Buku</h4>
	<a class="btn btn-outline-primary" href="<?php echo base_url('admin/buku/tambah'); ?>">Tambah</a>
<div class="alert alert-light" role="alert">
  Jumlah Buku :	<?php echo $jumlah; ?>
</div>
	<table class="table table-hover ">
		<thead>
			<tr>
				<th>No</th>
				<th>Foto Buku</th>
				<th>Nama Buku</th>
				<th>Kategori</th>
				<th colspan="2">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php 
				$no = 1;
				foreach ($buku as $buku) {
				?>
				<td class="align-middle"><?php echo $no++; ?></td>
				<td class="align-middle"><img src="<?php echo base_url("img/buku/").$buku->foto; ?>" class="img-thumbnail" style="width: 100px;height: 125px;"></td>
				<td class="align-middle"><?php echo $buku->judul_buku; ?></td>
				<td class="align-middle"><?php echo $buku->nama_kategori; ?></td>
				<td class="align-middle"><a href="<?php echo base_url('admin/buku/edit/'.$buku->id_buku.'/k/'.$buku->id_kategori); ?>"><i class="fa fa-pencil" aria-hidden="true"></i>
</a></td>
				<td class="align-middle"><a href="<?php echo base_url('crud/hapusbuku/'.$buku->id_buku); ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
			</tr>
				<?php
				}
				 ?>
		</tbody>
	</table>
</div>