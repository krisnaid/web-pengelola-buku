<div class="container">
	<h4 class="text-center h4 mt-4">Edit User</h4>
<p><a href="<?php echo base_url('admin/user'); ?>">Kembali</a></p>
	<?php foreach($users as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<table class="table table-borderless" style="margin:20px auto; width: 800px;">
			<tr>
				<td>Username</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" class="form-control" name="username" value="<?php echo $u->username ?>">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" class="form-control" name="password" value="<?php echo $u->password ?>" disabled></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" class="form-control" name="email" value="<?php echo $u->email ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-primary" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>