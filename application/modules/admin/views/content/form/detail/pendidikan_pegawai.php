		<div class="panel panel-default">
			<div class="panel-body">
				<h4 class="margin-t-none">Pendidikan</h4>
				<table class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>NO</th>
							<th>TINGKAT PENDIDIKAN</th>
							<th>JURUSAN</th>
							<th>URAIAN</th>
							<th>TEKNIK / NON TEKNIK</th>
							<th>SEKOLAH</th>
							<th>TEMPAT SEKOLAH</th>
							<th>NOMOR STTB</th>
							<th>TANGGAL STTB</th>
							<th>TANGGAL LULUS</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($pendidikan->result_array() as $row ){ ?>
							<tr>
								<th><?php echo $i; $i++; ?></th>
								<th><?php echo $row['tingkat_pendidikan']; ?></th>
								<th><?php echo $row['jurusan']; ?></th>
								<th><?php echo $row['uraian']; ?></th>
								<th><?php echo $row['teknik_non_teknik']; ?></th>
								<th><?php echo $row['sekolah']; ?></th>
								<th><?php echo $row['tempat_sekolah']; ?></th>
								<th><?php echo $row['nomor_sttb']; ?></th>
								<th><?php echo $row['tanggal_sttb']; ?></th>
								<th><?php echo $row['tanggal_lulus']; ?></th>
							</tr>
						<?php } ?>
					<tbody>
				</table>
			</div>
		</div>