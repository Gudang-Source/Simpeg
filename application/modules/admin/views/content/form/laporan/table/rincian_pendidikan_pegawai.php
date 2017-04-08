						<h4 class="headline">Rincian Pegawai</h4>

						<table id="data-table" class="table table-striped table-hover table-bordered dt-responsive" cellspacing="0"width="000%">
							<thead>
							<tr>
								<th class="text-center" rowspan="2">NO</th>
								<th class="text-center" colspan="2">S2</th>
								<th class="text-center" colspan="2">SARJANA</th>
								<th class="text-center" colspan="2">SARJANA MUDA</th>
								<th class="text-center" colspan="2">SD</th>
								<th class="text-center" colspan="2">SMP</th>
								<th class="text-center" colspan="2">SMA</th>
								<th class="text-center" colspan="2">SMEA</th>
								<th class="text-center" colspan="2">SMK</th>
								<th class="text-center" rowspan="2">JUMLAH</th>
							</tr>
							<tr>
								<th class="text-center">WANITA</th>
								<th class="text-center">PRIA</th>
								<th class="text-center">WANITA</th>
								<th class="text-center">PRIA</th>
								<th class="text-center">WANITA</th>
								<th class="text-center">PRIA</th>
								<th class="text-center">WANITA</th>
								<th class="text-center">PRIA</th>
								<th class="text-center">WANITA</th>
								<th class="text-center">PRIA</th>
								<th class="text-center">WANITA</th>
								<th class="text-center">PRIA</th>
								<th class="text-center">WANITA</th>
								<th class="text-center">PRIA</th>
								<th class="text-center">WANITA</th>
								<th class="text-center">PRIA</th>
							</tr>
							</thead>

							<tbody>
									<tr>
									<?php $total1 = 0;?>
										<td class="text-center">1</td>
										<td class="text-center"><?php $total1 += modules::run('admin/getCountRincianPendidikanPegawai','WANITA','S2'); echo modules::run('admin/getCountRincianPendidikanPegawai','WANITA','S2'); ?></td>
										<td class="text-center"><?php $total1 += modules::run('admin/getCountRincianPendidikanPegawai','LAKI-LAKI','S2'); echo modules::run('admin/getCountRincianPendidikanPegawai','LAKI-LAKI','S2');?></td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center"><?php echo $total1; ?></td>
									</tr>
									<tr>
										<?php $total2 = 0;?>
										<td class="text-center">2</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center"><?php $total2 = $total2 + modules::run('admin/getCountRincianPendidikanPegawai','WANITA','S1'); echo modules::run('admin/getCountRincianPendidikanPegawai','WANITA','S1'); ?></td>
										<td class="text-center"><?php $total2 = $total2 + modules::run('admin/getCountRincianPendidikanPegawai','LAKI-LAKI','S1'); echo modules::run('admin/getCountRincianPendidikanPegawai','LAKI-LAKI','S1');?></td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center"><?php echo $total2; ?></td>
									</tr>
									<tr>
										<?php $total3 = 0;?>
										<td class="text-center">3</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center"><?php $total3 += modules::run('admin/getCountRincianPendidikanPegawai','WANITA','D3'); echo modules::run('admin/getCountRincianPendidikanPegawai','WANITA','D3'); ?></td>
										<td class="text-center"><?php $total3 += modules::run('admin/getCountRincianPendidikanPegawai','LAKI-LAKI','D3'); echo modules::run('admin/getCountRincianPendidikanPegawai','LAKI-LAKI','D3');?></td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center"><?php echo $total3; ?></td>
									</tr>
									<tr>
										<?php $total4 = 0;?>
										<td class="text-center">4</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center"><?php $total4 += modules::run('admin/getCountRincianPendidikanPegawai','WANITA','SD'); echo modules::run('admin/getCountRincianPendidikanPegawai','WANITA','SD'); ?></td>
										<td class="text-center"><?php $total4 += modules::run('admin/getCountRincianPendidikanPegawai','LAKI-LAKI','SD'); echo modules::run('admin/getCountRincianPendidikanPegawai','LAKI-LAKI','SD');?></td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center"><?php echo $total4; ?></td>
									</tr>
									<tr>
										<?php $total5 = 0;?>
										<td class="text-center">5</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center"><?php $total5 += modules::run('admin/getCountRincianPendidikanPegawai','WANITA','SMP'); echo modules::run('admin/getCountRincianPendidikanPegawai','WANITA','SMP'); ?></td>
										<td class="text-center"><?php $total5 += modules::run('admin/getCountRincianPendidikanPegawai','LAKI-LAKI','SMP'); echo modules::run('admin/getCountRincianPendidikanPegawai','LAKI-LAKI','SMP');?></td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center"><?php echo $total5; ?></td>
									</tr>
									<tr>
										<?php $total6 = 0;?>
										<td class="text-center">6</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center"><?php $total6 += modules::run('admin/getCountRincianPendidikanPegawai','WANITA','SMA'); echo modules::run('admin/getCountRincianPendidikanPegawai','WANITA','SMA'); ?></td>
										<td class="text-center"><?php $total6 += modules::run('admin/getCountRincianPendidikanPegawai','LAKI-LAKI','SMA'); echo modules::run('admin/getCountRincianPendidikanPegawai','LAKI-LAKI','SMA');?></td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center"><?php echo $total6; ?></td>
									</tr>
									<tr>
										<?php $total7 = 0;?>
										<td class="text-center">7</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center"><?php $total7 += modules::run('admin/getCountRincianPendidikanPegawai','WANITA','SMEA'); echo modules::run('admin/getCountRincianPendidikanPegawai','WANITA','SMEA'); ?></td>
										<td class="text-center"><?php $total7 += modules::run('admin/getCountRincianPendidikanPegawai','LAKI-LAKI','SMEA'); echo modules::run('admin/getCountRincianPendidikanPegawai','LAKI-LAKI','SMEA');?></td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center"><?php echo $total7; ?></td>
									</tr>
									<tr>
										<?php $total8 = 0;?>
										<td class="text-center">8</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center">0</td>
										<td class="text-center"><?php $total8 += modules::run('admin/getCountRincianPendidikanPegawai','WANITA','SMK'); echo modules::run('admin/getCountRincianPendidikanPegawai','WANITA','SMK'); ?></td>
										<td class="text-center"><?php $total8 += modules::run('admin/getCountRincianPendidikanPegawai','LAKI-LAKI','SMK'); echo modules::run('admin/getCountRincianPendidikanPegawai','LAKI-LAKI','SMK');?></td>
										<td class="text-center"><?php echo $total8; ?></td>
									</tr>
							</tbody>
						</table>