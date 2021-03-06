<div id="main">
	<div class="page-header">
		<h2> PENDIDIKAN</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default panel-shadow">
				<div class="panel-body">
						<form class="form-horizontal padding-15" action="<?php echo $action; ?>" method="POST">
							<input type="hidden" class="form-control" name="nameform" value="<?php echo $form; ?>">
							<input type="hidden" class="form-control" name="mode" value="<?php echo $mode; ?>">
							<input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">NIP</label>
								<div class="col-sm-9">
									<select class="selectpicker show-tick form-control" data-live-search="true" name="input-nip">
										<?php $queryPegawai = modules::run('admin/getDataMaster','master_pegawai'); ?>
										<?php foreach ($queryPegawai->result_array() as $row): ?>
											<option <?php echo isset($valuenip)?$valuenip == $row['nip'] ? "selected":"":""; ?> value="<?php echo $row['nip']; ?>"><?php echo $row['nama_pegawai']; ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">UNIT KERJA</label>
								<div class="col-sm-9">
									<select class="selectpicker show-tick form-control" data-live-search="true" name="input-nip">
										<?php $queryPegawai = modules::run('admin/getDataMaster','master_pegawai'); ?>
										<?php foreach ($queryPegawai->result_array() as $row): ?>
											<option <?php echo isset($valuenip)?$valuenip == $row['nip'] ? "selected":"":""; ?> value="<?php echo $row['nip']; ?>"><?php echo $row['nama_pegawai']; ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">BAGIAN</label>
								<div class="col-sm-9">
									<select class="selectpicker show-tick form-control" data-live-search="true" name="input-nip">
										<?php $queryPegawai = modules::run('admin/getDataMaster','master_pegawai'); ?>
										<?php foreach ($queryPegawai->result_array() as $row): ?>
											<option <?php echo isset($valuenip)?$valuenip == $row['nip'] ? "selected":"":""; ?> value="<?php echo $row['nip']; ?>"><?php echo $row['nama_pegawai']; ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">JABATAN</label>
								<div class="col-sm-9">
									<select class="selectpicker show-tick form-control" data-live-search="true" name="input-nip">
										<?php $queryPegawai = modules::run('admin/getDataMaster','master_pegawai'); ?>
										<?php foreach ($queryPegawai->result_array() as $row): ?>
											<option <?php echo isset($valuenip)?$valuenip == $row['nip'] ? "selected":"":""; ?> value="<?php echo $row['nip']; ?>"><?php echo $row['nama_pegawai']; ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">STATUS PERNIKAHAN</label>
								<div class="col-sm-9">
									<select class="selectpicker show-tick form-control" data-live-search="true" name="input-nip">
											<option <?php echo isset($valuenip)?$valuenip == $row['nip'] ? "selected":"":""; ?> value="<?php echo $row['nip']; ?>"><?php echo $row['nama_pegawai']; ?></option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">JUMLAH ANAK</label>
								<div class="col-sm-9">
									<input type="text" name="input-jurusan" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuejurusan : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">TANGGUNGAN</label>
								<div class="col-sm-9">
									<select class="selectpicker show-tick form-control" data-live-search="true" name="input-nip">
										<?php $queryPegawai = modules::run('admin/getDataMaster','master_pegawai'); ?>
										<?php foreach ($queryPegawai->result_array() as $row): ?>
											<option <?php echo isset($valuenip)?$valuenip == $row['nip'] ? "selected":"":""; ?> value="<?php echo $row['nip']; ?>"><?php echo $row['nama_pegawai']; ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">GAPOK SETAHUN</label>
								<div class="col-sm-9">
									<input type="text" name="input-teknik" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuetekniknonteknik : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">TOTAL TUNJANGAN</label>
								<div class="col-sm-9">
									<input type="text" name="input-sekolah" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuesekolah : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">JAPROD</label>
								<div class="col-sm-9">
									<input type="text" name="input-tempat-sekolah" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuetempatsekolah : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">GAJI KOTOR DI SETAHUNKAN</label>
								<div class="col-sm-9">
									<input type="text" name="input-nomor-sttb" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuenosttb : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">GAJI KOTOR DI SETAHUNKAN + JAPROD</label>
								<div class="col-sm-9">
									<input type="text" name="input-tanggal-sttb" class="datepicker form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuetglsttb : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">BIAYA JABATAN</label>
								<div class="col-sm-9">
									<input type="text" name="input-tanggal-lulus" class="datepicker form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuetgllulus : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-offset-3 col-sm-9 ">
									<button class="btn btn-primary" type="submit"><?php echo $textButton; ?></button>
								</div>
							</div>

						</form>					
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="panel panel-default panel-shadow">
					<div class="panel-body">
						<h4 class="headline">Data</h4>

						<table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
							<thead>
							<tr>
								<th class="text-center">NIP</th>
								<th class="text-center">NAMA</th>
								<th class="text-center">TINGKAT PENDIDIKAN</th>
								<th class="text-center">JURUSAN</th>
								<th class="text-center">URAIAN</th>
								<th class="text-center">TEKNIK NON TEKNIN</th>
								<th class="text-center">SEKOLAH</th>
								<th class="text-center">TEMPAT SEKOLAH</th>
								<th class="text-center">NOMOR STTB</th>
								<th class="text-center">TANGGAL STTB</th>
								<th class="text-center">TANGGAL LULUS</th>
								<th class="text-center">ACTION</th>
							</tr>
							</thead>

							<tbody>
								<?php foreach($data->result_array() as $row){ ?>
									<tr>
										<td><?php echo $row['nip']; ?></td>
										<td><?php echo $row['nama_pegawai']; ?></td>
										<td><?php echo $row['tingkat_pendidikan']; ?></td>
										<td><?php echo $row['jurusan']; ?></td>
										<td><?php echo $row['uraian']; ?></td>
										<td><?php echo $row['teknik_non_teknik']; ?></td>
										<td><?php echo $row['sekolah']; ?></td>
										<td><?php echo $row['tempat_sekolah']; ?></td>
										<td><?php echo $row['nomor_sttb']; ?></td>
										<td><?php echo $row['tanggal_sttb']; ?></td>
										<td><?php echo $row['tanggal_lulus']; ?></td>
										<td class="text-center">
											<?php $id = $row['id_dt_pendidikan']; ?>
											<a href=<?php echo base_url('index.php/admin/transaksi/update/'.$form.'/'.$id); ?> class="btn btn-default btn-rounded"><i class="md md-edit"></i></a>
											<a href=<?php echo base_url('index.php/admin/transaksi/delete/'.$form.'/'.$id); ?> class="btn btn-default btn-rounded"><i class="md md-delete"></i></a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>