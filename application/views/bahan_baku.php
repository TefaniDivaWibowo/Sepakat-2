<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		echo $this->session->userdata('username');
	?>
Haloo
<a href="<?= base_url('login/logout/');?>">Logout</a>
</body>
</html>