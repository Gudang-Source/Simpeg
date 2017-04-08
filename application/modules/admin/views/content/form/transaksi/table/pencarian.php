						<?php if($print == 0){ ?>
							<div class="row">
								<div class="col-sm-12">
									<form class="form-horizontal padding-15" action="<?php echo $submitCetak; ?>" method="POST" target="_blank">
										<input type="hidden" class="form-control" name="viewCetak" value="<?php echo $viewCetak; ?>">
										<input type="hidden" class="form-control" name="namaQuery" value="<?php echo $namaQuery; ?>">
										<input type="hidden" class="form-control" name="query" value="<?php echo $query; ?>">
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">
												<div class="checkbox checkbox-primary">
													<input id="checkboxExcel" type="checkbox" name="excel[]" value="excel">
													<label for="checkboxExcel"> EXCEL</label>
												</div>
											</label>
											<div class="col-sm-10">
												<input type="submit" class="btn btn-success" value="CETAK">
											</div>
										</div>
									</form>
								</div>
							</div>
						<?php } ?>
						<h4 class="headline">HASIL PENCARIAN</h4>
						<table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
							<thead>
							<tr>
								<th>NO</th>
								<th>NIP</th>
								<th>NAMA</th>
								<th>JABATAN</th>
								<th>GOLONGAN</th>
								<th>UNIT KERJA</th>
								<?php if($print == 0){  ?> <th class="text-center">AKSI</th> <?php } ?>
							</tr>
							</thead>

							<tbody>
								<?php $i = 1; ?>
								<?php foreach($QueryHasilCari->result_array() as $row){ ?>
									<tr>
										<td><?php echo $i;$i++; ?></td>
										<td><?php echo $row['nip']; ?></td>
										<td><?php echo $row['nama_pegawai']; ?></td>
										<td><?php echo $row['nama_jabatan']; ?></td>
										<td><?php echo $row['nama_golongan']; ?></td>
										<td><?php echo $row['nama_unit_kerja']; ?></td>
										<?php if($print == 0){  ?>
										<td class="text-center">
											<a href=<?php echo base_url('index.php/admin/detailPegawai/'.$row['id_pegawai']); ?> class="btn btn-default btn-rounded"><i class="md md-details"></i></a>
										</td>
										<?php } ?>
									</tr>
								<?php } ?>
							</tbody>
						</table>