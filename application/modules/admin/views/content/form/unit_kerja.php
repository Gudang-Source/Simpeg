<div id="main">
	<div class="page-header">
		<h2> MASTER UNIT KERJA</h2>
	</div>
	<div role="tabpanel">
		<div class="tab-content tab-content-default">
			<div role="tabpanel" class="tab-pane active" id="account">
				<form class="form-horizontal padding-15" action="<?php echo $action; ?>" method="POST">
					<input type="hidden" class="form-control" name="nameform" value="unitkerja">
					<input type="hidden" class="form-control" name="mode" value="<?php echo $mode; ?>">
					<input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">NAMA UNIT KERJA</label>
						<div class="col-sm-9">
							<input type="text" name="unit-kerja" class="form-control" value="<?php echo $namaunitkerja ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">UNIT SATUAN</label>
						<div class="col-sm-9">
							<input type="text" name="unit-satuan" class="form-control" value="<?php echo $unitsatuan ?>">
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
			<div class="panel panel-default panel-shadow">
				<div class="panel-body">
					<h4 class="headline">Data</h4>

					<table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
						<thead>
						<tr>
							<th class="text-center">KODE UNIT KERJA</th>
							<th class="text-center">NAMA UNIT KERJA</th>
							<th class="text-center">UNIT SATUAN</th>
							<th class="text-center">ACTION</th>
						</tr>
						</thead>

						<tbody>
						<?php if($data->num_rows() > 0){ ?>
							<?php foreach($data->result_array() as $row){ ?>
								<tr>
									<td><?php echo $row['id_unit_kerja']; ?></td>
									<td><?php echo $row['nama_unit_kerja']; ?></td>
									<td><?php echo $row['unit_satuan']; ?></td>
									<td class="text-center">
										<?php $id = $row['id_unit_kerja']; ?>
										<a href=<?php echo base_url('index.php/admin/input/update/unitkerja/'.$id); ?> class="btn btn-default btn-rounded"><i class="md md-edit"></i></a>
										<a href=<?php echo base_url('index.php/admin/input/delete/unitkerja/'.$id); ?> class="btn btn-default btn-rounded"><i class="md md-delete"></i></a>
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