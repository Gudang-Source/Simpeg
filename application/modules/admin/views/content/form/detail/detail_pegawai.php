				<form class="form-horizontal padding-15">
					<div class="form-group">
						<label for="avatar" class="col-sm-3 control-label">Profile Picture</label>
						<div class="col-sm-9">
							<div class="media">
								<div class="media-left" id="links">
								    <a href="<?php echo base_url('assets/foto/'.$foto); ?>" title="Photo Person" data-gallery>
								        <img src="<?php echo base_url('assets/foto/'.$foto); ?>" alt="person" width="80">
								    </a>
									<!--<img src="<?php echo base_url('assets/foto/'.$foto); ?>" width="80" alt="person">-->
								</div>
							</div>

						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">NIP</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?php echo $nip; ?>" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Tempat / Tanggal Lahir</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" value="<?php echo $tempat_lahir."/".modules::run('admin/convertDate',$tanggal_lahir); ?>" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Agama</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?php echo $agama; ?>" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Alamat Sekarang</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?php echo $alamat_skrg;  ?>" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Alamat Ktp</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?php echo $alamat_ktp;  ?>" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Jenis Kelamin</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?php echo $jenis_kelamin; ?>" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Nomor KTP</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?php echo $no_ktp; ?>" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Gaji Pokok</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="Rp. <?php echo number_format($gapok); ?>" disabled>
						</div>
					</div>
					<hr>
					<div class="form-group">
						<div class="col-md-offset-3 col-sm-9 ">
							<a href=<?php echo base_url('index.php/admin/input/update/pegawai/'.$id); ?> class="btn btn-success">Ubah</a>
							<a href=<?php echo base_url('index.php/admin/input/delete/pegawai/'.$id); ?> class="btn btn-alert">Hapus</a>
						</div>
					</div>

				</form>
