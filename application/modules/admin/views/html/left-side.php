	  	<div class="sidebar left-side" id="sidebar-left">
	<div class="sidebar-user">
		<div class="media sidebar-padding">
			<div class="media-left media-middle">
				<!--<img src="images/guy.jpg" alt="person" style="width: 60px" class="img-circle"/>-->
			</div>
			<div class="media-body media-middle">
				<a href="#" class="h4 margin-none">ADMIN</a>
				<!--<ul class="list-unstyled list-inline margin-none">
					<li><a href="#"><i class="md-person-outline"></i></a></li>
					<li><a href="#"><i class="md-email"></i></a></li>
					<li><a href="#"><i class="md-settings"></i></a></li>
					<li><a href="#"><i class="md-exit-to-app"></i></a></li>
				</ul>-->
			</div>
		</div>
	</div>
	<div class="nicescroll">
		<div class="wrapper" style="margin-bottom:90px">
			<ul class="nav nav-sidebar" id="sidebar-menu">
                <h4 class="sidebar-headline">Sidebar Menu</h4>
				<li class="submenu">
					<a href="#"><i class="md md-my-library-add"></i>MASTER</a>
					<ul >
						<li><a href="<?php echo base_url('index.php/admin/input/create/bagian'); ?>">BAGIAN</a></li>
						<li><a href="<?php echo base_url('index.php/admin/input/create/golongan'); ?>">GOLONGAN</a></li>
						<li><a href="<?php echo base_url('index.php/admin/input/create/hukuman'); ?>">HUKUMAN</a></li>
						<li><a href="<?php echo base_url('index.php/admin/input/create/jabatan'); ?>">JABATAN</a></li>
						<li><a href="<?php echo base_url('index.php/admin/input/create/potongan'); ?>">POTONGAN</a></li>
						<li><a href="<?php echo base_url('index.php/admin/input/create/tunjangan'); ?>">TUNJANGAN JABATAN</a></li>
						<li><a href="<?php echo base_url('index.php/admin/input/create/unitkerja'); ?>">UNIT KERJA</a></li>
						<li><a href="<?php echo base_url('index.php/admin/input/create/statuskepegawaian'); ?>">STATUS</a></li>
						<li><a href="<?php echo base_url('index.php/admin/input/create/tanggungan'); ?>">TANGGUNGAN</a></li>
						<li><a href="<?php echo base_url('index.php/admin/input/create/pegawai'); ?>">PEGAWAI</a></li>
					</ul>
				</li>
				<li class="submenu">
					<a href="#"><i class="md md-book"></i>DATA</a>
					<ul >
						<li><a href="<?php echo base_url('index.php/admin/transaksi/create/golongan'); ?>">GOLONGAN</a></li>
						<li><a href="<?php echo base_url('index.php/admin/transaksi/create/jabatan'); ?>">JABATAN</a></li>
						<li><a href="<?php echo base_url('index.php/admin/transaksi/create/keluarga'); ?>">KELUARGA</a></li>
						<li><a href="<?php echo base_url('index.php/admin/transaksi/create/pelatihan'); ?>">PELATIHAN</a></li>
						<li><a href="<?php echo base_url('index.php/admin/transaksi/create/pendidikan'); ?>">PENDIDIKAN</a></li>
						<li><a href="<?php echo base_url('index.php/admin/transaksi/create/seminar'); ?>">SEMINAR</a></li>
						<li><a href="<?php echo base_url('index.php/admin/transaksi/create/teguran'); ?>">TEGURAN</a></li>
					</ul>
				</li>
				<li class="submenu">
					<a href="#"><i class="md md-print"></i>LAPORAN</a>
					<ul >
						<li><a href="<?php echo base_url('index.php/admin/RincianPegawai'); ?>">RINCIAN PEGAWAI</a></li>
						<li><a href="<?php echo base_url('index.php/admin/RincianPendidikanPegawai'); ?>">PENDIDIKAN PEGAWAI</a></li>
						<li><a href="<?php echo base_url('index.php/admin/RincianPangkatPegawai'); ?>">PANGKAT PEGAWAI</a></li>
					</ul>
				</li>
				<li><a href="<?php echo base_url('index.php/admin/cari'); ?>"><i class="md md-search"></i>CARI</a></li>
			</ul>
		</div>
	</div>
</div>