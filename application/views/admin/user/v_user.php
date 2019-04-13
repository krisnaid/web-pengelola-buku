<div class="container">
	<h4 class="text-center h4 mt-4">Daftar User</h4>
	<a class="btn btn-outline-primary" href="<?php echo base_url('admin/user/tambah'); ?>">Tambah</a>
	<br><br>
	<table class="table table-hover ">
		<thead>
			<tr>
				<th>No</th>
				<th>Username</th>
				<th>Password</th>
				<th>Email</th>
				<th colspan="2">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php 
				$no = 1;
				foreach ($user as $u) {
				?>
				<td><?php echo $no++; ?></td>
				<td><?php echo $u->username; ?></td>
				<td><?php echo $u->password; ?></td>
				<td><?php echo $u->email; ?></td>
				<td><a href="<?php echo base_url('admin/user/edit/'.$u->id); ?>"><i class="fa fa-pencil" aria-hidden="true"></i>
</a></td>
				<td><a href="<?php echo base_url('crud/hapus/'.$u->id); ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
			</tr>
				<?php
				}
				 ?>
		</tbody>
	</table>
</div>