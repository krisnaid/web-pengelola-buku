<div class="container">
	<h4 class="text-center h4 mt-4">Daftar Kategori</h4>
	<a class="btn btn-outline-primary" href="<?php echo base_url('admin/kategori/tambah'); ?>">Tambah</a>
<div class="alert alert-light" role="alert">
  Jumlah Kategori :	<?php echo $jumlah; ?>
</div>
	<table class="table table-hover ">
		<thead>
			<tr>
				<th>No</th>
				<th >Nama Kategori</th>
				<th class="text-center" colspan="2">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php 
				$no = 1;
				foreach ($kategori as $kategori) {
				?>
				<td class="align-middle"><?php echo $no++; ?></td>
				<td class="align-middle"><?php echo $kategori->nama_kategori; ?></td>
				<td class="align-middle text-right"><a href="<?php echo base_url('admin/kategori/edit/'.$kategori->id_kategori); ?>"><i class="fa fa-pencil" aria-hidden="true"></i>
</a></td>
				<td class="align-middle text-center"><a href="<?php echo base_url('crud/hapuskat/'.$kategori->id_kategori); ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
			</tr>
				<?php
				}
				 ?>
		</tbody>
	</table>
</div>