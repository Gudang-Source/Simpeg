						<h4 class="headline">Rincian Pegawai</h4>

						<table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
							<thead>
							<tr>
								<th>NO</th>
								<th>BAGIAN</th>
								<th>KARYAWATI</th>
								<th>KARYAWAN</th>
								<th>JUMLAH</th>
							</tr>
							</thead>

							<tbody>
								<?php $i = 1; ?>
								<?php foreach($queryBagian->result_array() as $row){ ?>
									<tr>
										<?php $wanita = 0; $pria = 0; ?>
										<td><?php echo $i;$i++; ?></td>
										<td><?php echo $row['nama_bagian']; ?></td>
										<td><?php $wanita = modules::run('admin/getCountRincianPegawai','PEREMPUAN',$row['nama_bagian']); echo $wanita; ?></td>
										<td><?php $pria = modules::run('admin/getCountRincianPegawai','LAKI-LAKI',$row['nama_bagian']); echo $pria; ?></td>
										<td><?php echo $wanita+$pria; ?></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>