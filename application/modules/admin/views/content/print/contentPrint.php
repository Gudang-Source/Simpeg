<?php
	$print == 1 ? $this->load->view($dataPrint) : "";
	$this->load->view($dataReport);
?>