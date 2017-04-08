<div id="main">
	<div class="page-header">
		<h2>KELUARGA</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default panel-shadow">
				<div class="panel-body">
					<form class="form-horizontal padding-15"  action="<?php echo $action; ?>" method="POST">
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
										<option <?php echo isset($valuenip)?$valuenip == $row['nip'] ? "selected":"":""; ?> value="<?php echo $row['nip']; ?>"><?php echo $row['nip']; ?>-<?php echo $row['nama_pegawai']; ?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">NAMA ISTRI / SUAMI</label>
							<div class="col-sm-9">
								<input type="text" name="nama-istri-suami" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuenamaistrisuami : ""; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">TEMPAT LAHIR ISTRI / SUAMI</label>
							<div class="col-sm-9">
								<input type="text" name="tempat-istri-suami" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuetempatistrisuami : ""; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">TANGGAL LAHIR ISTRI / SUAMI</label>
							<div class="col-sm-9">
								<input type="text" name="tgl-istri-suami" class="datepicker form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuetglistrisuami : ""; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">NAMA ANAK 1</label>
							<div class="col-sm-9">
								<input type="text" name="anak1" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuenamaanak1 : ""; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">TANGGAL LAHIR ANAK 1</label>
							<div class="col-sm-9">
								<input type="text" name="tgl-anak1" class="datepicker form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuetglanak1 : ""; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">PENDIDIKAN ANAK 1</label>
							<div class="col-sm-9">
								<input type="text" name="pendidikan-anak1" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuependidikananak1 : ""; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">NAMA ANAK 2</label>
							<div class="col-sm-9">
								<input type="text" name="anak2" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuenamanak2 : ""; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">TANGGAL LAHIR ANAK 2</label>
							<div class="col-sm-9">
								<input type="text" name="tgl-anak2" class="datepicker form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuetglanak2 : ""; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">PENDIDIKAN ANAK 2</label>
							<div class="col-sm-9">
								<input type="text" name="pendidikan-anak2" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuependidikananak2 : ""; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">NAMA ANAK 3</label>
							<div class="col-sm-9">
								<input type="text" name="anak3" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuenamanak3 : ""; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">TANGGAL LAHIR ANAK 3</label>
							<div class="col-sm-9">
								<input type="text" name="tgl-anak3" class="datepicker form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuetglanak3 : ""; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">PENDIDIKAN ANAK 3</label>
							<div class="col-sm-9">
								<input type="text" name="pendidikan-anak3" class="form-control" value="<?php echo $mode=='update' || $mode=='delete' ? $valuependidikananak3 : ""; ?>">
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
							<th class="text-center">NAMA ISTRI SUAMI</th>
							<th class="text-center">TANGGAL LAHIR ISTRI SUAMI</th>
							<!--<th class="text-center">TEMPAT LAHIR ISTRI SUAMI</th>-->
							<th class="text-center">NAMA ANAK 1</th>
							<th class="text-center">TANGGAL LAHIR ANAK 1</th>
							<!--<th class="text-center">PENDIDIKAN ANAK 1</th>-->
							<th class="text-center">NAMA ANAK 2</th>
							<th class="text-center">TANGGAL LAHIR ANAK 2</th>
							<!--<th class="text-center">PENDIDIKAN ANAK 2</th>-->
							<th class="text-center">NAMA ANAK 3</th>
							<th class="text-center">TANGGAL LAHIR ANAK 3</th>
							<!--<th class="text-center">PENDIDIKAN ANAK 3</th>-->
							<th class="text-center">ACTION</th>
						</tr>
						</thead>

						<tbody>
						<?php if($data->num_rows() > 0){ ?>
							<?php foreach($data->result_array() as $row){ ?>
								<tr>
									<td><?php echo $row['id_dt_keluarga']; ?></td>
									<td><?php echo $row['nama_pegawai']; ?></td>
									<td><?php echo $row['nama_istri_suami']; ?></td>
									<td><?php echo $row['tgl_lahir_istri_suami']; ?></td>
									<!--<td><?php echo $row['tempat_lahir_istri_suami']; ?></td>-->
									<td><?php echo $row['anak1']; ?></td>
									<td><?php echo $row['tgl_lahir_anak1']; ?></td>
									<!--<td><?php echo $row['pendidikan_anak1']; ?></td>-->
									<td><?php echo $row['anak2']; ?></td>
									<td><?php echo $row['tgl_lahir_anak2']; ?></td>
									<!--<td><?php echo $row['pendidikan_anak2']; ?></td>-->
									<td><?php echo $row['anak3']; ?></td>
									<td><?php echo $row['tgl_lahir_anak3']; ?></td>
									<!--<td><?php echo $row['pendidikan_anak3']; ?></td>-->
									<td class="text-center">
										<?php $id = $row['id_dt_keluarga']; ?>
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
</div>