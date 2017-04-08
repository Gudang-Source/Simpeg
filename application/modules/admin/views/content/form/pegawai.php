<div id="main">
	<div class="page-header">
		<h2> MASTER PEGAWAI</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default panel-shadow">
				<div class="panel-body">
						<form class="form-horizontal padding-15" action="<?php echo $action; ?>" method="POST" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="nameform" value="pegawai">
							<input type="hidden" class="form-control" name="mode" value="<?php echo $mode; ?>">
							<input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
							
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">NIP</label>
								<div class="col-sm-9">
									<input type="text" name="nip" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuenip : ""; ?>" size="9" maxlength="9">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">NAMA</label>
								<div class="col-sm-9">
									<input type="text" name="nama" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuenama : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">TEMPAT LAHIR</label>
								<div class="col-sm-9">
									<input type="text" name="tempat-lahir" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuetempatlahir : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">TANGGAL LAHIR</label>
								<div class="col-sm-9">
									<input type="text" name="tanggal-lahir" class="datepicker form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuetanggallahir : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">JENIS KELAMIN</label>
								<div class="col-sm-9">
									<select name="jenis-kelamin" id="basic" class="selectpicker show-tick form-control" data-live-search="true">
										<option value="LAKI-LAKI">LAKI-LAKI</option>
										<option value="PEREMPUAN">PEREMPUAN</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">AGAMA</label>
								<div class="col-sm-9">
									<input type="text" name="agama" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valueagama : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">ALAMAT SEKARANG</label>
								<div class="col-sm-9">
									<input type="text" name="alamat-sekarang" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuealamatskrg : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">ALAMAT KTP</label>
								<div class="col-sm-9">
									<input type="text" name="alamat-ktp" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuealamatktp : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">NOMOR KTP</label>
								<div class="col-sm-9">
									<input type="text" name="no-ktp" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuenoktp : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">STATUS KEPEGAWAIAN</label>
								<div class="col-sm-9">
									<select id="basic" class="selectpicker show-tick form-control" data-live-search="true" name="status-kepegawaian">
										<?php $queryStatuskepegawaian = modules::run('admin/getDataMaster','master_status_pegawai'); ?>
										<?php foreach ($queryStatuskepegawaian->result_array() as $row): ?>
											<option <?php echo $valuestatuspegawai == $row['id_status_pegawai'] ? "selected":""; ?> value="<?php echo $row['id_status_pegawai']; ?>"><?php echo $row['nama_status']; ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">NOMOR NPWP</label>
								<div class="col-sm-9">
									<input type="text" name="no-npwp" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuenpwp : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">GOLONGAN</label>
								<div class="col-sm-9">
									<select id="basic" class="selectpicker show-tick form-control" data-live-search="true" name="golongan">
										<?php $queryStatusGolongan = modules::run('admin/getDataMaster','master_gol'); ?>
										<?php foreach ($queryStatusGolongan->result_array() as $row): ?>
											<option <?php echo $valuegolongan == $row['id_golongan'] ? "selected":""; ?> value="<?php echo $row['id_golongan']; ?>"><?php echo $row['nama_golongan']; ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">JABATAN</label>
								<div class="col-sm-9">
									<select id="basicjabatan" class="selectpicker show-tick form-control" data-live-search="true" name="jabatan">
										<?php $queryStatusJabatan = modules::run('admin/getDataMaster','master_jabatan'); ?>
										<?php foreach ($queryStatusJabatan->result_array() as $row): ?>
											<option <?php echo $valuejabatan == $row['id_jabatan'] ? "selected":""; ?> value="<?php echo $row['id_jabatan']; ?>"><?php echo $row['nama_jabatan']; ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">UNIT KERJA</label>
								<div class="col-sm-9">
									<select id="basic" class="selectpicker show-tick form-control" data-live-search="true" name="unit-kerja">
										<?php $queryStatusJabatan = modules::run('admin/getDataMaster','master_unit_kerja'); ?>
										<?php foreach ($queryStatusJabatan->result_array() as $row): ?>
											<option <?php echo $valueunitkerja == $row['id_unit_kerja'] ? "selected":""; ?> value="<?php echo $row['id_unit_kerja']; ?>"><?php echo $row['nama_unit_kerja']; ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">BAGIAN</label>
								<div class="col-sm-9">
									<select id="basic" class="selectpicker show-tick form-control" data-live-search="true" name="bagian">
										<?php $queryStatusJabatan = modules::run('admin/getDataMaster','master_bagian'); ?>
										<?php foreach ($queryStatusJabatan->result_array() as $row): ?>
											<option <?php echo $valuebagian == $row['id_bagian'] ? "selected":""; ?> value="<?php echo $row['id_bagian']; ?>"><?php echo $row['nama_bagian']; ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">STATUS NIKAH</label>
								<div class="col-sm-9">
									<select id="basic" class="selectpicker show-tick form-control" data-live-search="true" name="status-nikah">
										<option <?php echo $valuestatusnikah == "BELUM MENIKAH" ? "selected":""; ?> value="BELUM MENIKAH">BELUM MENIKAH</option>
										<option <?php echo $valuestatusnikah == "MENIKAH" ? "selected":""; ?> value="MENIKAH">MENIKAH</option>
										<option <?php echo $valuestatusnikah == "JANDA" ? "selected":""; ?> value="JANDA">JANDA</option>
										<option <?php echo $valuestatusnikah == "DUDA" ? "selected":""; ?> value="DUDA">DUDA</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">STATUS PERKAWINAN</label>
								<div class="col-sm-9">
									<select id="basic" class="selectpicker show-tick form-control" data-live-search="true" name="status-kawin">
										<?php $queryStatusPerkawinan = modules::run('admin/getDataMaster','master_tanggungan'); ?>
										<?php foreach ($queryStatusPerkawinan->result_array() as $row): ?>
											<option <?php echo $valuestatuskawin == $row['id_tanggungan'] ? "selected":""; ?> value="<?php echo $row['id_tanggungan']; ?>"><?php echo $row['nama_tanggungan']; ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">NOMOR SK TMT</label>
								<div class="col-sm-9">
									<input type="text" name="sk-terdaftar" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valueskterdaftar : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">TERHITUNG MULAI TANGGAL</label>
								<div class="col-sm-9">
									<input type="text" name="tmt-tetap" class="datepicker form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuestmttetap : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">PERIODE SK NORMAL</label>
								<div class="col-sm-9">
									<input type="text" name="tmt-tetap" class="datepicker form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuestmttetap : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">NOMOR REKENING JATIM</label>
								<div class="col-sm-9">
									<input type="text" name="no-rekening" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuesnorek : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">BPJS KETENAGAKERJAAN</label>
								<div class="col-sm-9">
									<input type="text" name="no-astek" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuesnoastek : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">BPJS KESEHATAN</label>
								<div class="col-sm-9">
									<input type="text" name="no-astek" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuesnoastek : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">DAPENMA PAMSI</label>
								<div class="col-sm-9">
									<input type="text" name="no-aspek" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuesnoaspek : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">GAJI POKOK</label>
								<div class="col-sm-9">
									<input type="text" name="gaji-pokok" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuegapok : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">FOTO</label>
								<div class="col-sm-9">
									<input type="file" name="filefoto" class="form-control filestyle">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">STATUS</label>
								<div class="col-sm-9">
									<select name="status" id="basic" class="selectpicker show-tick form-control" data-live-search="true" >
										<option value="0" <?php echo $valuestatus == '0' ? "selected":"" ?> >TIDAK AKTIF</option>
										<option value="1" <?php echo $valuestatus == '1' ? "selected":"" ?> >AKTIF</option>
									</select>
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
								<th class="text-center">TEMPAT LAHIR</th>
								<th class="text-center">TANGGAL LAHIR</th>
								<th class="text-center">JENIS KELAMIN</th>
								<th class="text-center">AGAMA</th>
								<th class="text-center">ALAMAT SEKARANG</th>
								<th class="text-center">ALAMAT KTP</th>
								<th class="text-center">NOMOR KTP</th>
								<th class="text-center">STATUS PEGAWAI</th>
								<th class="text-center">NPWP</th>
								<th class="text-center">ACTION</th>
							</tr>
							</thead>

							<tbody>
								<?php foreach($data->result_array() as $row){ ?>
									<tr>
										<td><?php echo $row['nip']; ?></td>
										<td><?php echo $row['nama_pegawai']; ?></td>
										<td><?php echo $row['tempat_lahir']; ?></td>
										<td><?php echo $row['tanggal_lahir']; ?></td>
										<td><?php echo $row['jenis_kelamin']; ?></td>
										<td><?php echo $row['agama']; ?></td>
										<td><?php echo $row['alamat_skrg']; ?></td>
										<td><?php echo $row['alamat_ktp']; ?></td>
										<td><?php echo $row['no_ktp']; ?></td>
										<td><?php echo $row['nama_status']; ?></td>
										<td><?php echo $row['no_npwp']; ?></td>
										<td class="text-center">
											<?php $id = $row['id_pegawai']; ?>
											<a href=<?php echo base_url('index.php/admin/input/update/pegawai/'.$id); ?> class="btn btn-default btn-rounded"><i class="md md-edit"></i></a>
											<a href=<?php echo base_url('index.php/admin/input/delete/pegawai/'.$id); ?> class="btn btn-default btn-rounded"><i class="md md-delete"></i></a>
											<a href=<?php echo base_url('index.php/admin/detailPegawai/'.$id); ?> class="btn btn-default btn-rounded"><i class="md md-details"></i></a>
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