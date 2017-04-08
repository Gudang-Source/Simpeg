						<h4 class="headline">Rincian Pegawai</h4>

						<table id="data-table" class="table table-striped table-hover table-bordered dt-responsive" cellspacing="0"width="000%">
							<thead>
							<tr>
								<th class="text-center">NO</th>
								<th class="text-center">BAGIAN / UNIT</th>
								<th class="text-center">K</th>
								<th class="text-center">TK</th>
								<th class="text-center">JUMLAH</th>
								<th class="text-center">A1</th>
								<th class="text-center">A2</th>
								<th class="text-center">A3</th>
								<th class="text-center">A4</th>
								<th class="text-center">B1</th>
								<th class="text-center">B2</th>
								<th class="text-center">B3</th>
								<th class="text-center">B4</th>
								<th class="text-center">C1</th>
								<th class="text-center">C2</th>
								<th class="text-center">C3</th>
								<th class="text-center">C4</th>
								<th class="text-center">CAPEG-A3</th>
								<th class="text-center">D1</th>
								<th class="text-center">DIREKSI</th>
								<th class="text-center">HRK</th>
								<th class="text-center">HRP</th>
								<th class="text-center">JUMLAH</th>
							</tr>
							</thead>

							<tbody>
								<?php $i = 1; ?>
								<?php $total = 0; ?>
								<?php foreach ($queryUnit->result_array() as $row) { ?>
									<tr>
										<td class="text-center"><?php echo $i; $i++; ?></td>
										<td class="text-center"><?php echo $row['nama_unit_kerja']; ?></td>
										<?php $totalTanggungan = 0; ?>
										<td class="text-center"><?php $tanggungan = modules::run('admin/getRincianKawinPegawai', 'KAWIN', $row['nama_unit_kerja']); $totalTanggungan += $tanggungan; echo $tanggungan; ?></td>
										<td class="text-center"><?php $tanggungan = modules::run('admin/getRincianKawinPegawai', 'TIDAK KAWIN', $row['nama_unit_kerja']); $totalTanggungan += $tanggungan; echo $tanggungan; ?></td>
										<td class="text-center"><?php echo $totalTanggungan; ?></td>
										<?php $totalPangkat = 0; ?>
										<td class="text-center"><?php $pangkat = modules::run('admin/getCountRincianPangkatPegawai',$row['nama_unit_kerja'],'A1'); $totalPangkat += $pangkat; echo $pangkat;?></td>
										<td class="text-center"><?php $pangkat = modules::run('admin/getCountRincianPangkatPegawai',$row['nama_unit_kerja'],'A2'); $totalPangkat += $pangkat; echo $pangkat;?></td>
										<td class="text-center"><?php $pangkat = modules::run('admin/getCountRincianPangkatPegawai',$row['nama_unit_kerja'],'A3'); $totalPangkat += $pangkat; echo $pangkat;?></td>
										<td class="text-center"><?php $pangkat = modules::run('admin/getCountRincianPangkatPegawai',$row['nama_unit_kerja'],'A4'); $totalPangkat += $pangkat; echo $pangkat;?></td>
										<td class="text-center"><?php $pangkat = modules::run('admin/getCountRincianPangkatPegawai',$row['nama_unit_kerja'],'B1'); $totalPangkat += $pangkat; echo $pangkat;?></td>
										<td class="text-center"><?php $pangkat = modules::run('admin/getCountRincianPangkatPegawai',$row['nama_unit_kerja'],'B2'); $totalPangkat += $pangkat; echo $pangkat;?></td>
										<td class="text-center"><?php $pangkat = modules::run('admin/getCountRincianPangkatPegawai',$row['nama_unit_kerja'],'B3'); $totalPangkat += $pangkat; echo $pangkat;?></td>
										<td class="text-center"><?php $pangkat = modules::run('admin/getCountRincianPangkatPegawai',$row['nama_unit_kerja'],'B4'); $totalPangkat += $pangkat; echo $pangkat;?></td>
										<td class="text-center"><?php $pangkat = modules::run('admin/getCountRincianPangkatPegawai',$row['nama_unit_kerja'],'C1'); $totalPangkat += $pangkat; echo $pangkat;?></td>
										<td class="text-center"><?php $pangkat = modules::run('admin/getCountRincianPangkatPegawai',$row['nama_unit_kerja'],'C2'); $totalPangkat += $pangkat; echo $pangkat;?></td>
										<td class="text-center"><?php $pangkat = modules::run('admin/getCountRincianPangkatPegawai',$row['nama_unit_kerja'],'C3'); $totalPangkat += $pangkat; echo $pangkat;?></td>
										<td class="text-center"><?php $pangkat = modules::run('admin/getCountRincianPangkatPegawai',$row['nama_unit_kerja'],'C4'); $totalPangkat += $pangkat; echo $pangkat;?></td>
										<td class="text-center"><?php $pangkat = modules::run('admin/getCountRincianPangkatPegawai',$row['nama_unit_kerja'],'A3','CAPEG'); $totalPangkat += $pangkat; echo $pangkat;?></td>
										<td class="text-center"><?php $pangkat = modules::run('admin/getCountRincianPangkatPegawai',$row['nama_unit_kerja'],'D1'); $totalPangkat += $pangkat; echo $pangkat;?></td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center"><?php echo $totalPangkat; ?></td>
										<?php $total += $totalPangkat; ?>
									</tr>
								<?php } ?>
								<thead>
									<tr>
										<th colspan="4" class="text-right">TOTAL</th>
										<th class="text-center"><?php echo $total; ?></th>
										<th colspan="17" class="text-right">TOTAL</th>
										<th class="text-center"><?php echo $total; ?></th>
									</tr>
								</thead>
							</tbody>
						</table>