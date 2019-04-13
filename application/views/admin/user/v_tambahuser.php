<div class="container">
	<h4 class="text-center h4 mt-4">Tambah User</h4>
<p><a href="<?php echo base_url('admin/user'); ?>">Kembali</a></p>

	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
		<table class="table table-borderless" style="margin:20px auto; width: 800px;">
			<tr>
				<td>Email</td>
				<td><input class="form-control" type="Email" name="email"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input class="form-control" type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input class="form-control" type="Password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input class="btn btn-primary" type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</div>