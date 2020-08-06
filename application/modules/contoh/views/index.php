<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap.min.css' ?>">
	<script src="<?php echo base_url().'assets/jquery-3.5.1.min.js' ?>"></script>
</head>
<body>
	<div class="container mb-2">
		<br><br>

		<input type="text" name="nis" id="tes">
		<input type="text" name="nama" id="tes2">
		<input type="text" name="telp" id="tes3">
		<input type="text" name="alamat" id="tes4">
		<input type="button" name="" value="post" id="append"><br><br><br>

		<table class="table table-striped" id="data_table">
			<thead>
				<tr>
					<th>No</th>
					<th>NIS</th>
					<th>Nama</th>
					<th>Telepon</th>
					<th>Alamat</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no = 1;
				foreach ($siswa as $siswa): ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $siswa->nis ?></td>
						<td><?php echo $siswa->nama ?></td>
						<td><?php echo $siswa->telp ?></td>
						<td><?php echo $siswa->alamat ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</body>
</html>

<script type="text/javascript">
	function clear(){
		$('#tes').val('');
		$('#tes2').val('');
		$('#tes3').val('');
		$('#tes4').val('');
	}

	$("#append").click(function(){
		var tes = $('#tes').val();
		var tes2 = $('#tes2').val();
		var tes3 = $('#tes3').val();
		var tes4 = $('#tes4').val();

		var out = $('#data_table tbody:last-child');
		
		if(tes=='' || tes2 == '' || tes3 == ''){
			alert('data tidak boleh kosong');
		}else{
			$.ajax({
				url: '<?php echo site_url().'contoh/add' ?>',
				type: 'post',
				dataType: 'json',
				data: {'nis': tes, 'nama' : tes2, 'telp' : tes3, 'alamat' : tes4},
			})
			.done(function(data) {
				alert(data.success);

				var no = $('#data_table tbody tr').length+1;
				out.append(
					'<tr>'+
					'<td>'+no+'</td>'+
					'<td>'+tes+'</td>'+
					'<td>'+tes2+'</td>'+
					'<td>'+tes3+'</td>'+
					'<td>'+tes4+'</td>'+
					'</tr>');
				clear();
			})
			.fail(function() {
				alert('error post data');
			}); //end ajax
	
		}
		
	});
</script>