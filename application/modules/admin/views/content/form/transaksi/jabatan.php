<script src="<?php echo base_url('assets/gallery/js/jquery.blueimp-gallery.min.js');?>"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/gallery/css/blueimp-gallery.min.css');?>">
<div id="main">
	<div class="page-header">
		<h2>JABATAN</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default panel-shadow">
				<div class="panel-body">
					<form class="form-horizontal padding-15"  action="<?php echo $action; ?>" method="POST" enctype="multipart/form-data">
						<div class="form-group">
						<input type="hidden" class="form-control" name="nameform" value="<?php echo $form; ?>">
						<input type="hidden" class="form-control" name="mode" value="<?php echo $mode; ?>">
						<input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">PEGAWAI</label>
							<div class="col-sm-9">
								<select class="selectpicker show-tick form-control" data-live-search="true" name="input-nip">
									<?php $queryPegawai = modules::run('admin/getDataMaster','master_pegawai'); ?>
									<?php foreach ($queryPegawai->result_array() as $row): ?>
										<option <?php echo isset($valuenip)?$valuenip == $row['nip'] ? "selected":"":""; ?> value="<?php echo $row['nip']; ?>"><?php echo $row['nip']."-".$row['nama_pegawai']; ?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">JABATAN</label>
							<div class="col-sm-9">
								<select class="selectpicker show-tick form-control" data-live-search="true" name="input-jabatan">
									<?php $queryjabatan = modules::run('admin/getDataMaster','master_jabatan'); ?>
									<?php foreach ($queryjabatan->result_array() as $row): ?>
										<option <?php echo isset($valuejab)?$valuejab == $row['id_jabatan'] ? "selected":"" : ""; ?> value="<?php echo $row['id_jabatan']; ?>"><?php echo $row['nama_jabatan']; ?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">TANGGAL SK</label>
							<div class="col-sm-9">
								<input type="text" name="input-tglsk" class="datepicker form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuetglsk : ""; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">TANGGAL AWAL</label>
							<div class="col-sm-9">
								<input type="text" name="input-tgla" class="datepicker form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuetgla : ""; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">TANGGAL AKHIR</label>
							<div class="col-sm-9">
								<input type="text" name="input-tglb" class="datepicker form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuetglb : ""; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">KETERANGAN</label>
							<div class="col-sm-9">
								<textarea name="input-keterangan" id="description" cols="30" rows="10" class="summernote"><?php echo $mode=='update' || $mode=='delete' ? $valueket : ""; ?></textarea>
							</div>
						</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">FOTO</label>
								<div class="col-sm-3">
									<input type="file" name="filesatu" class="form-control filestyle">
								</div>
								<div class="col-sm-3">
									<input type="file" name="filedua" class="form-control filestyle">
								</div>
								<div class="col-sm-3">
									<input type="file" name="filetiga" class="form-control filestyle">
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
							<th class="text-center">NOMOR</th>
							<th class="text-center">PEGAWAI</th>
							<th class="text-center">JABATAN</th>
							<th class="text-center">TANGGAL SK JABATAN</th>
							<th class="text-center">TANGGAL AWAL JABATAN</th>
							<th class="text-center">TANGAL AKHIR JABATAN</th>
							<th class="text-center">KETERANGAN</th>
							<th class="text-center">FOTO</th>
							<th class="text-center">AKSI</th>
						</tr>
						</thead>

						<tbody>
						<?php if($data->num_rows() > 0){ ?>
							<?php foreach($data->result_array() as $row){ ?>
								<tr>
									<td><?php echo $row['id_dt_jabatan']; ?></td>
									<td><?php echo $row['nama_pegawai']; ?></td>
									<td><?php echo $row['nama_jabatan']; ?></td>
									<td><?php echo $row['tgl_sk_jabatan']; ?></td>
									<td><?php echo $row['tgl_awal_jab']; ?></td>
									<td><?php echo $row['tgl_akhir_jab']; ?></td>
									<td><?php echo $row['keterangan']; ?></td>
									<td>
										<div class="media-left" id="links">
										    <a href="<?php echo base_url('assets/foto/sk/jabatan/1/'.$row['foto1']); ?>" title="SK" data-gallery>
										        <img src="<?php echo base_url('assets/foto/sk/jabatan/1/'.$row['foto1']); ?>" alt="certificate" width="80">
										    </a>
										    <a href="<?php echo base_url('assets/foto/sk/jabatan/2/'.$row['foto2']); ?>" title="SK" data-gallery>
										        <img src="<?php echo base_url('assets/foto/sk/jabatan/2/'.$row['foto2']); ?>" alt="certificate" width="80">
										    </a>
										    <a href="<?php echo base_url('assets/foto/sk/jabatan/3/'.$row['foto3']); ?>" title="SK" data-gallery>
										        <img src="<?php echo base_url('assets/foto/sk/jabatan/3/'.$row['foto3']); ?>" alt="certificate" width="80">
										    </a>
										</div>
									</td>
									<td class="text-center">
										<?php $id = $row['id_dt_jabatan']; ?>
										<a href=<?php echo base_url('index.php/admin/transaksi/update/'.$form.'/'.$id); ?> class="btn btn-default btn-rounded"><i class="md md-edit"></i></a>
										<a href=<?php echo base_url('index.php/admin/transaksi/delete/'.$form.'/'.$id); ?> class="btn btn-default btn-rounded"><i class="md md-delete"></i></a>
									</td>
								</tr>
							<?php } ?>
						<?php }else{ ?>
							No More Data.
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="clearfix"></div>
				</div>
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