<script type="text/javascript" src="<?php echo base_url(); ?>/assets/inner-loader/datatable/datatable.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/inner-loader/datatable-bootstrap.js"></script>
<script src="<?php echo base_url(); ?>/assets/inner-loader/jquery-ui/js/jquery-1.10.2.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#formcari').submit(function (event) {
            dataString = $("#formcari").serialize();
            $('#loaderResult').css('display','block');
            $('#result').css('display','none');
            $.ajax({
                type:"POST",
                url:"cari",
                data:dataString,

                success:function (data) {
                    $('#loaderResult').css('display','none');
                    $('#result').css('display','block');
                    $('#result').html(data);
                }

            });
            event.preventDefault();
        });
    });
</script>
<div id="main">
	<div class="page-header">
		<h2>PENCARIAN</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default panel-shadow">
				<div class="panel-body">
					<form class="form-horizontal padding-15" action="cari" method="POST" id="formcari">
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">
								<div class="checkbox checkbox-primary">
									<input id="checkbox2" type="checkbox" name="opsi[]" value="umur">
									<label for="checkbox2">
										UMUR
									</label>
								</div>
							</label>
							<div class="col-sm-3">
								<select name="operator-umur" class="form-control">
									<option value="="> SAMA DENGAN</option>
									<option value=">"> LEBIH DARI</option>
									<option value="<"> KURANG DARI</option>
									<option value=">="> LEBIH DARI SAMA DENGAN</option>
									<option value="<="> KURANG DARI SAMA DENGAN</option>
								</select>
							</div>
							<div class="col-sm-6">
								<input type="number" name="input-umur" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">
								<div class="checkbox checkbox-primary">
									<input id="checkbox3" type="checkbox" name="opsi[]" value="jabatan">
									<label for="checkbox3">
										JABATAN
									</label>
								</div>
							</label>
							<div class="col-sm-9">
								<select class="selectpicker show-tick form-control" data-live-search="true" name="input-jabatan">
									<?php $queryjabatan = modules::run('admin/getDataMaster','master_jabatan'); ?>
									<?php foreach ($queryjabatan->result_array() as $row): ?>
										<option value="<?php echo $row['id_jabatan']; ?>"><?php echo $row['nama_jabatan']; ?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">
								<div class="checkbox checkbox-primary">
									<input id="checkbox4" type="checkbox" name="opsi[]" value="golongan">
									<label for="checkbox4">
										GOLONGAN
									</label>
								</div>
							</label>
							<div class="col-sm-9">
								<select class="selectpicker show-tick form-control" data-live-search="true" name="input-golongan">
									<?php $querygolongan = modules::run('admin/getDataMaster','master_gol'); ?>
									<?php foreach ($querygolongan->result_array() as $row): ?>
										<option value="<?php echo $row['id_golongan']; ?>"><?php echo $row['nama_golongan']; ?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">
								<div class="checkbox checkbox-primary">
									<input id="checkbox5" type="checkbox" name="opsi[]" value="pendidikan">
									<label for="checkbox5">
										PENDIDIKAN
									</label>
								</div>
							</label>
							<div class="col-sm-9">
									<select class="selectpicker show-tick form-control" data-live-search="true" name="input-tingkat-pendidikan">
										<option value="S2">S2</option>
										<option value="SARJANA">SARJANA</option>
										<option value="SARJANA MUDA">SARJANA MUDA</option>
										<option value="SD">SD</option>
										<option value="SMP">SMP</option>
										<option value="SMA">SMA</option>
										<option value="SMEA">SMEA</option>
										<option value="SMK">SMK</option>
									</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-3 col-sm-9 ">
								<input type="hidden" name="submit" value="proses">
								<input type="submit" class="btn btn-primary" value="PROSES">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="panel panel-default panel-shadow">
					<div class="panel-body">
						<div class="col-sm-4">
						</div>
						<div class="col-sm-4">
							<img id="loaderResult" src="<?php echo base_url(); ?>/assets/inner-loader/spinner/magnify.svg" style="display:none;">
						</div>
						<div class="col-sm-4">
						</div>
		                <div id="result" style="display:block;">
		                </div>
					</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>