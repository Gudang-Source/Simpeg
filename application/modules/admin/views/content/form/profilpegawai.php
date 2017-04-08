<script src="<?php echo base_url('assets/gallery/js/jquery.blueimp-gallery.min.js');?>"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/gallery/css/blueimp-gallery.min.css');?>">
<div id="main">
	<div class="page-header">
		<h2> <?php echo strtoupper($nama_pegawai); ?></h2>
		<a href="<?php echo base_url('index.php/admin/input/create/pegawai'); ?>" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
	</div>
	<div id="blueimp-gallery" class="blueimp-gallery">
	    <div class="slides"></div>
	    <h3 class="title"></h3>
	    <a class="prev">‹</a>
	    <a class="next">›</a>
	    <a class="close">×</a>
	    <a class="play-pause"></a>
	    <ol class="indicator"></ol>
	    <div class="modal fade">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <button type="button" class="close" aria-hidden="true">&times;</button>
	                    <h4 class="modal-title"></h4>
	                </div>
	                <div class="modal-body next"></div>
	                <div class="modal-footer">
	                    <button type="button" class="btn btn-default pull-left prev">
	                        <i class="glyphicon glyphicon-chevron-left"></i>
	                        Previous
	                    </button>
	                    <button type="button" class="btn btn-primary next">
	                        Next
	                        <i class="glyphicon glyphicon-chevron-right"></i>
	                    </button>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<div role="tabpanel">
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active">
				<a href="#detail" aria-controls="detail" role="tab" data-toggle="tab"><i class="fa fa-fw fa-user"></i> Detail</a>
			</li>
			<li role="presentation">
				<a href="#keluarga" aria-controls="keluarga" role="tab" data-toggle="tab"><i class="fa fa-fw fa-home"></i> Keluarga</a>
			</li>
			<li role="presentation">
				<a href="#golongan" aria-controls="golongan" role="tab" data-toggle="tab"><i class="fa fa-fw fa-group"></i> Golongan</a>
			</li>
			<li role="presentation">
				<a href="#jabatan" aria-controls="jabatan" role="tab" data-toggle="tab"><i class="fa fa-fw fa-power-off"></i> Jabatan</a>
			</li>
			<li role="presentation">
				<a href="#pelatihan" aria-controls="pelatihan" role="tab" data-toggle="tab"><i class="md md-accessibility"></i> Pelatihan</a>
			</li>
			<li role="presentation">
				<a href="#pendidikan" aria-controls="pendidikan" role="tab" data-toggle="tab"><i class="fa fa-fw fa-institution"></i> Pendidikan</a>
			</li>
			<li role="presentation">
				<a href="#seminar" aria-controls="seminar" role="tab" data-toggle="tab"><i class="fa fa-fw fa-train"></i> Seminar</a>
			</li>
			<li role="presentation">
				<a href="#teguran" aria-controls="teguran" role="tab" data-toggle="tab"><i class="fa fa-fw fa-warning"></i> Teguran</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content tab-content-default">
			<div role="tabpanel" class="tab-pane active" id="detail">
				<?php $this->load->view('admin/content/form/detail/detail_pegawai'); ?>
			</div>
			<div role="tabpanel" class="tab-pane" id="keluarga">
				<?php $this->load->view('admin/content/form/detail/keluarga_pegawai'); ?>
			</div>
			<div role="tabpanel" class="tab-pane" id="golongan">
				<?php $this->load->view('admin/content/form/detail/golongan_pegawai'); ?>
			</div>
			<div role="tabpanel" class="tab-pane" id="jabatan">
				<?php $this->load->view('admin/content/form/detail/jabatan_pegawai'); ?>
			</div>
			<div role="tabpanel" class="tab-pane" id="pelatihan">
				<?php $this->load->view('admin/content/form/detail/pelatihan_pegawai'); ?>
			</div>
			<div role="tabpanel" class="tab-pane" id="pendidikan">
				<?php $this->load->view('admin/content/form/detail/pendidikan_pegawai'); ?>
			</div>
			<div role="tabpanel" class="tab-pane" id="seminar">
				<?php $this->load->view('admin/content/form/detail/seminar_pegawai'); ?>
			</div>
			<div role="tabpanel" class="tab-pane" id="teguran">
				<?php $this->load->view('admin/content/form/detail/hukuman_pegawai'); ?>
			</div>
		</div>
	</div>
</div>
