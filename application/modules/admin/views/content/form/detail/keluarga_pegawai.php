		<div class="panel panel-default">
			<div class="panel-body">
				<h4 class="margin-t-none">Anggota Keluarga</h4>
				<?php foreach ($keluarga->result_array() as $row ){ ?>
					<form class="form-horizontal padding-15">
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">NAMA ISTRI / SUAMI</label>
							<div class="col-sm-9">
								<?php echo $row['nama_istri_suami']; ?>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">TANGGAL LAHIR</label>
							<div class="col-sm-9">
								<?php echo modules::run('admin/convertDate',$row['tgl_lahir_istri_suami']); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">TEMPAT LAHIR</label>
							<div class="col-sm-9">
								<?php echo $row['tempat_lahir_istri_suami']; ?>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">ANAK PERTAMA</label>
							<div class="col-sm-9">
								<?php echo $row['anak1']; ?>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">TANGGAL LAHIR ANAK PERTAMA</label>
							<div class="col-sm-9">
								<?php echo modules::run('admin/convertDate',$row['tgl_lahir_anak1']); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">PENDIDIKAN ANAK PERTAM</label>
							<div class="col-sm-9">
								<?php echo $row['pendidikan_anak1']; ?>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">ANAK KEDUA</label>
							<div class="col-sm-9">
								<?php echo $row['anak2']; ?>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">TANGGAL LAHIR ANAK KEDUA</label>
							<div class="col-sm-9">
								<?php echo modules::run('admin/convertDate',$row['tgl_lahir_anak2']); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">PENDIDIKAN ANAK KEDUA</label>
							<div class="col-sm-9">
								<?php echo $row['pendidikan_anak2']; ?>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">ANAK KETIGA</label>
							<div class="col-sm-9">
								<?php echo $row['anak3']; ?>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">TANGGAL LAHIR ANAK KETIGA</label>
							<div class="col-sm-9">
								<?php echo modules::run('admin/convertDate',$row['tgl_lahir_anak3']); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">PENDIDIKAN ANAK KETIGA</label>
							<div class="col-sm-9">
								<?php echo $row['pendidikan_anak3']; ?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-3 col-sm-9 ">
							</div>
						</div>
					</form>				
				<?php } ?>
			</div>
		</div>