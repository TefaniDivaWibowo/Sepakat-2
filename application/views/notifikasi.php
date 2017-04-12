<?php

	$id_ban 	= $this->session->userdata('id_bahan_baku');

	foreach ($query as $a) {
		$nama 	= $a['nama'];
	}

	echo $nama;
?>

ingin mengajak Anda untuk bekerja sama dengannya.

<a href="<?= base_url('penyedia/ker_set/'.$id_ban)?>"><button>Setuju</button></a>
<a href="<?= base_url('penyedia/ker_taset')?>"><button>Tidak Setuju</button></a>