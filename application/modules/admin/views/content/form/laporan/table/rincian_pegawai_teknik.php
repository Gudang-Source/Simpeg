						<h4 class="headline">Rincian Pegawai Teknik Non Teknik</h4>

						<table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
							<thead>
							<tr>
								<th>NO</th>
								<th>BAGIAN</th>
								<th>TEKNIK</th>
								<th>UMUM</th>
								<th>JUMLAH</th>
							</tr>
							</thead>

							<tbody>
								<?php $i = 1; ?>
								<?php foreach($queryUnitKerja->result_array() as $row){ ?>
									<tr>
										<?php $teknik = 0; $umum = 0; ?>
										<td><?php echo $i;$i++; ?></td>
										<td><?php echo $row['nama_unit_kerja']; ?></td>
										<td><?php $teknik = modules::run('admin/getCountRincianPegawaiTeknik',$row['nama_unit_kerja'],'TEKNIK'); echo $teknik; ?></td>
										<td><?php $umum = modules::run('admin/getCountRincianPegawaiTeknik',$row['nama_unit_kerja'],'UMUM'); echo $umum; ?></td>
										<td><?php echo $teknik+$umum; ?></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>