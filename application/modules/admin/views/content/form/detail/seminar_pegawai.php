		<div class="panel panel-default">
			<div class="panel-body">
				<h4 class="margin-t-none">Seminar</h4>
				<table class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>NO</th>
							<th>LOKASI</th>
							<th>TANGGAL MULAI</th>
							<th>TANGGAL AKHIR</th>
							<th>URAIAN</th>
							<th>TANGGAL SERTIFIKAT</th>
							<th>FOTO</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($seminar->result_array() as $row ){ ?>
							<tr>
								<th><?php echo $i; $i++; ?></th>
								<th><?php echo $row['lokasi']; ?></th>
								<th><?php echo $row['tgl_mulai_seminar']; ?></th>
								<th><?php echo $row['tgl_akhir_seminar']; ?></th>
								<th><?php echo $row['uraian_pelatihan']; ?></th>
								<th><?php echo $row['tgl_sertifikat']; ?></th>
								<th>
									<div class="media">
										<div class="media-left" id="links">
										    <a href="<?php echo base_url('assets/foto/sertifikat/seminar/'.$row['foto']); ?>" title="Photo Person" data-gallery>
										        <img src="<?php echo base_url('assets/foto/sertifikat/seminar/'.$row['foto']); ?>" alt="person" width="80">
										    </a>
										</div>
									</div>
								</th>
							</tr>
						<?php } ?>
					<tbody>
				</table>
			</div>
		</div>