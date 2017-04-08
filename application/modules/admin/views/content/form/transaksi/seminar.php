<script src="<?php echo base_url('assets/gallery/js/jquery.blueimp-gallery.min.js');?>"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/gallery/css/blueimp-gallery.min.css');?>">

<div id="main">
	<div class="page-header">
		<h2>SEMINAR</h2>
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
										<option <?php echo isset($valuenip)?$valuenip == $row['nip'] ? "selected":"":""; ?> value="<?php echo $row['nip']; ?>"><?php echo $row['nama_pegawai']; ?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">LOKASI</label>
							<div class="col-sm-9">
								<input type="text" name="input-lokasi" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuelokasi : ""; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">TANGGAL MULAI SEMINAR</label>
							<div class="col-sm-9">
								<input type="text" name="input-tglmulaiseminar" class="datepicker form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuetglmulai : ""; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">TANGGAL AKHIR SEMINAR</label>
							<div class="col-sm-9">
								<input type="text" name="input-tglakhirseminar" class="datepicker form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuetglselesai : ""; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">URAIAN SEMINAR</label>
							<div class="col-sm-9">
								<textarea name="input-uraian" id="description" cols="30" rows="10" class="summernote"><?php echo $mode=='update' || $mode=='delete' ? $valueuraian : ""; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">TANGGAL SERTIFIKAT</label>
							<div class="col-sm-9">
								<input type="text" name="input-tglsertifikat" class="datepicker form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuetglsertifikat : ""; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">FOTO</label>
							<div class="col-sm-9">
								<input type="file" name="input-foto" class="filestyle form-control">
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
							<th class="text-center">LOKASI</th>
							<th class="text-center">TANGGAL AWAL SEMINAR</th>
							<th class="text-center">TANGGAL AKHIR SEMINAR</th>
							<th class="text-center">URAIAN SEMINAR</th>
							<th class="text-center">TANGAL SERTIIKAT</th>
							<th class="text-center">FOTO</th>
							<th class="text-center">AKSI</th>
						</tr>
						</thead>

						<tbody>
						<?php if($data->num_rows() > 0){ ?>
							<?php foreach($data->result_array() as $row){ ?>
								<tr>
									<td><?php echo $row['id_dt_seminar']; ?></td>
									<td><?php echo $row['nama_pegawai']; ?></td>
									<td><?php echo $row['lokasi']; ?></td>
									<td><?php echo $row['tgl_mulai_seminar']; ?></td>
									<td><?php echo $row['tgl_akhir_seminar']; ?></td>
									<td><?php echo $row['uraian_seminar']; ?></td>
									<td><?php echo $row['tgl_sertifikat']; ?></td>
									<td>
										<div class="media-left" id="links">
										    <a href="<?php echo base_url('assets/foto/sertifikat/seminar/'.$row['foto']); ?>" title="Photo Certificate" data-gallery>
										        <img src="<?php echo base_url('assets/foto/sertifikat/seminar/'.$row['foto']); ?>" alt="certificate" width="80">
										    </a>
										</div>
									</td>
									<td class="text-center">
										<?php $id = $row['id_dt_seminar']; ?>
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
	                    <button type="button" class="btn btn-default pull-left prev">
	                        <i class="glyphicon glyphicon-chevron-left"></i>
	                        Previous
	                    </button>
	                    <button type="button" class="btn btn-primary next">
	                        Next
	                        <i class="glyphicon glyphicon-chevron-right"></i>
	                    </button>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>	
</div>