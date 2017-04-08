<!doctype html>
<html>
<head>
	<?php $this->load->view('html/headerjs'); ?>	
</head>
<body class="sidebar-push">
<?php $this->load->view('html/navbar-default'); ?>
<?php $this->load->view('html/left-side'); ?>
<?php $this->load->view('html/right-side'); ?>
  <div class="container-fluid ">
		<div id="main">
			<!-- notif  -->
			<?php if( $this->session->flashdata('notif_succes') == "success" ){?>
				<div id="notification" data-position="top-right" class="display-none">
					OPERATION SUKSES..
				</div>
			<?php }elseif( $this->session->flashdata('notif_succes') == "error" ){ ?>
				<div id="notification" data-position="top-right" class="display-none">
					OPERATION GAGAL..
				</div>
			<?php } ?>
			<!-- content -->
			<?php $this->load->view($contentview); ?>
		</div>

	<?php $this->load->view('html/foot'); ?>
  	<div class="overlay-disabled"></div>
<?php $this->load->view('html/footjs'); ?>
</body>
</html>