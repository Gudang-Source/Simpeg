		<div class="panel panel-default">
			<div class="panel-body">
				<h4 class="margin-t-none">Jabatan</h4>
				<table class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>NO</th>
							<th>NAMA HUKUMAN</th>
							<th>TANGGAL SURAT</th>
							<th>PERIHAL</th>
							<th>KETERANGAN HUKUMAN</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($teguran->result_array() as $row ){ ?>
							<tr>
								<th><?php echo $i; $i++; ?></th>
								<th><?php echo $row['nama_hukuman']; ?></th>
								<th><?php echo $row['tgl_surat']; ?></th>
								<th><?php echo $row['perihal']; ?></th>
								<th><?php echo $row['ket_hukuman']; ?></th>
							</tr>
						<?php } ?>
					<tbody>
				</table>
			</div>
		</div>