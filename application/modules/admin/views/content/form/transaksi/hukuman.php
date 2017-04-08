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
							<label for="" class="col-sm-3 control-label">ID HUKUMAN</label>
							<div class="col-sm-9">
								<select class="selectpicker show-tick form-control" data-live-search="true" name="input-id-hukuman">
									<?php $queryHukuman = modules::run('admin/getDataMaster','master_hukuman'); ?>
									<?php foreach ($queryHukuman->result_array() as $row): ?>
										<option <?php echo isset($valuehukuman)?$valuehukuman == $row['id_hukuman'] ? "selected":"":""; ?> value="<?php echo $row['id_hukuman']; ?>"><?php echo $row['nama_hukuman']; ?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">TANGGAL SURAT</label>
							<div class="col-sm-9">
								<input type="text" name="input-tglsurat" class="datepicker form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuetglsurat : ""; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">PERIHAL</label>
							<div class="col-sm-9">
								<input type="text" name="input-perihal" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valueperihal : ""; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">KETERANGAN HUKUMAN</label>
							<div class="col-sm-9">
								<textarea name="input-keterangan-hukuman" id="description" cols="30" rows="10" class="summernote"><?php echo $mode=='update' || $mode=='delete' ? $valueketeranganhukuman : ""; ?></textarea>
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
							<th>NOMOR</th>
							<th>PEGAWAI</th>
							<th>HUKUMAN</th>
							<th>TANGGAL SURAT</th>
							<th>PERIHAL</th>
							<th>KETERANGAN</th>
							<th>AKSI</th>
						</tr>
						</thead>

						<tbody>
						<?php if($data->num_rows() > 0){ ?>
							<?php foreach($data->result_array() as $row){ ?>
								<tr>
									<td><?php echo $row['id_dt_teguran']; ?></td>
									<td><?php echo $row['nama_pegawai']; ?></td>
									<td><?php echo $row['nama_hukuman']; ?></td>
									<td><?php echo $row['tgl_surat']; ?></td>
									<td><?php echo $row['perihal']; ?></td>
									<td><?php echo $row['ket_hukuman']; ?></td>
									<td class="text-center">
										<?php $id = $row['id_dt_teguran']; ?>
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