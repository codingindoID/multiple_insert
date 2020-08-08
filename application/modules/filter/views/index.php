<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap.min.css' ?>">
	<script src="<?php echo base_url().'assets/jquery-3.5.1.min.js' ?>"></script>
	<script src="<?php echo base_url().'assets/sweetalert.min.js' ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/datatable/jquery.dataTables.min.css' ?>">
</head>
<body>
	<div class="container mb-2">
		<br><br>
		<input type="hidden" id="baseurl" value="<?php echo site_url() ?>" />
		<input type="date" name="start" id="start">
		<input type="date" name="end" id="end">
		<input type="button" name="" value="post" id="filter"><br><br><br>

		<table class="table table-striped" id="data_table">
			<thead>
				<tr>
					<th class="text-center">#</th>
					<th>tgl</th>
					<th>barang</th>
					<th>aksi</th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
		
	</div>
</body>
</html>

<script src="<?php echo base_url().'assets/jquery-3.5.1.min.js' ?>"></script>
<script src="<?php echo base_url().'assets/datatable/jquery.dataTables.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/jsku.js'?>"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$("#data_table").on("draw.dt", function () {
			$(this).find(".dataTables_empty").parents('tbody').empty();
		}).DataTable();
	});
	
</script>