		<div class="panel panel-default">
			<div class="panel-body">
				<h4 class="margin-t-none">Golongan</h4>
				<table class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>NO</th>
							<th>GOLONGAN</th>
							<th>NOMER SK</th>
							<th>TANGGAL SK</th>
							<th>TANGGAL AKHIR</th>
							<th>KETERANGAN</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($golongan->result_array() as $row ){ ?>
							<tr>
								<th><?php echo $i; $i++; ?></th>
								<th><?php echo $row['nama_golongan']; ?></th>
								<th><?php echo $row['tgl_sk_gol']; ?></th>
								<th><?php echo $row['tgl_awal_gol']; ?></th>
								<th><?php echo $row['tgl_akhir_gol']; ?></th>
								<th><?php echo $row['keterangan']; ?></th>
							</tr>
						<?php } ?>
					<tbody>
				</table>
			</div>
		</div>