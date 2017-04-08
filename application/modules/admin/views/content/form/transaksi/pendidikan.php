<script src="<?php echo base_url('assets/gallery/js/jquery.blueimp-gallery.min.js');?>"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/gallery/css/blueimp-gallery.min.css');?>">
<div id="main">
	<div class="page-header">
		<h2> PENDIDIKAN</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default panel-shadow">
				<div class="panel-body">
						<form class="form-horizontal padding-15" action="<?php echo $action; ?>" method="POST" enctype="multipart/form-data">
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
								<label for="" class="col-sm-3 control-label">TINGKAT PENDIDIKAN</label>
								<div class="col-sm-9">
									<select class="selectpicker show-tick form-control" data-live-search="true" name="input-tingkat-pendidikan">
										<option <?php echo isset($valuetingkatpendidikan)?$valuetingkatpendidikan == "S2" ? "selected":"":""; ?> value="S2">S2</option>
										<option <?php echo isset($valuetingkatpendidikan)?$valuetingkatpendidikan == "S1" ? "selected":"":""; ?> value="S1">SARJANA</option>
										<option <?php echo isset($valuetingkatpendidikan)?$valuetingkatpendidikan == "D3" ? "selected":"":""; ?> value="D3">SARJANA MUDA</option>
										<option <?php echo isset($valuetingkatpendidikan)?$valuetingkatpendidikan == "SD" ? "selected":"":""; ?> value="SD">SD</option>
										<option <?php echo isset($valuetingkatpendidikan)?$valuetingkatpendidikan == "SMP" ? "selected":"":""; ?> value="SMP">SMP</option>
										<option <?php echo isset($valuetingkatpendidikan)?$valuetingkatpendidikan == "SMA" ? "selected":"":""; ?> value="SMA">SMA</option>
										<option <?php echo isset($valuetingkatpendidikan)?$valuetingkatpendidikan == "SMEA" ? "selected":"":""; ?> value="SMEA">SMEA</option>
										<option <?php echo isset($valuetingkatpendidikan)?$valuetingkatpendidikan == "SMK" ? "selected":"":""; ?> value="SMK">SMK</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">JURUSAN</label>
								<div class="col-sm-9">
									<input type="text" name="input-jurusan" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuejurusan : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">URAIAN</label>
								<div class="col-sm-9">
									<textarea name="input-uraian" id="description" cols="30" rows="10" class="summernote"><?php echo $mode=='update' || $mode=='delete' ? $valueuraian : ""; ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">TEKNIK NON TEKNIK</label>
								<div class="col-sm-9">
									<input type="text" name="input-teknik" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuetekniknonteknik : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">SEKOLAH</label>
								<div class="col-sm-9">
									<input type="text" name="input-sekolah" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuesekolah : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">TEMPAT SEKOLAH</label>
								<div class="col-sm-9">
									<input type="text" name="input-tempat-sekolah" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuetempatsekolah : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">NOMOR STTB</label>
								<div class="col-sm-9">
									<input type="text" name="input-nomor-sttb" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuenosttb : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">TANGGAL STTB</label>
								<div class="col-sm-9">
									<input type="text" name="input-tanggal-sttb" class="datepicker form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuetglsttb : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">TANGGAL LULUS</label>
								<div class="col-sm-9">
									<input type="text" name="input-tanggal-lulus" class="datepicker form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuetgllulus : ""; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">FOTO</label>
								<div class="col-sm-3">
									<input type="file" name="filefoto" class="form-control filestyle">
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
								<th class="text-center">FOTO</th>
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
										<td>
											<div class="media-left" id="links">
											    <a href="<?php echo base_url('assets/foto/sertifikat/pendidikan/'.$row['foto']); ?>" title="Photo Certificate" data-gallery>
											        <img src="<?php echo base_url('assets/foto/sertifikat/pendidikan/'.$row['foto']); ?>" alt="certificate" width="80">
											    </a>
											</div>
										</td>
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
	<div id="blueimp-gallery" class="blueimp-gallery">
	    <div class="slides"></div>
	    <h3 class="title"></h3>
	    <a class="prev">‹</a>
	    <a class="next">›</a>
	    <a class="close">×</a>
	    <a class="play-pause"></a>
	    <ol class="indicator"></ol>
	    <div class="modal fade">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <button type="button" class="close" aria-hidden="true">&times;</button>
	                    <h4 class="modal-title"></h4>
	                </div>
	                <div class="modal-body next"></div>
	                <div class="modal-footer">
	                    <!--<button type="button" class="btn btn-default pull-left prev">
	                        <i class="glyphicon glyphicon-chevron-left"></i>
	                        Previous
	                    </button>
	                    <button type="button" class="btn btn-primary next">
	                        Next
	                        <i class="glyphicon glyphicon-chevron-right"></i>
	                    </button>-->
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>