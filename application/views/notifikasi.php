<?php if($_SESSION['tipe_user'] == 'Manufaktur'){?>
	<?php foreach ($kerjasama as $data) { ?>
		<p>Penyedia bahan baku <?php echo $data['nama']?> ingin mengajak anda untuk bekerja sama.</p>
		<a href="<?php echo base_url('kerjasama/terima_bahanbaku/'.$data['id_bahan_baku'])?>"><button>Setuju</button></a>
		<a href="<?php echo base_url('kerjasama/tolak_bahanbaku/'.$data['id_bahan_baku'])?>"><button>Tidak Setuju</button></a>
	<?php } ?>
<?php }?>


<?php if($_SESSION['tipe_user'] == 'Bahan Baku'){?>
	<?php foreach ($kerjasama as $data) { ?>
		<p>Perusahaan manufaktur <?php echo $data['nama']?> ingin mengajak anda untuk bekerja sama.</p>
		<a href="<?php echo base_url('kerjasama/terima_manufaktur/'.$data['id_manufaktur'])?>"><button>Setuju</button></a>
		<a href="<?php echo base_url('kerjasama/tolak_manufaktur/'.$data['id_manufaktur'])?>"><button>Tidak Setuju</button></a>
	<?php } ?>
<?php }?>
