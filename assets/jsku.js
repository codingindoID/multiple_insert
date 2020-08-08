$(document).ready(function() {
	$('#filter').click(function(event) {
		var start 	= $('#start').val();
		var end 	= $('#end').val();
		var base 	= $('#baseurl').val();
		var url 	= base+'filter/action/'+start+'/'+end;
		var out = $('#data_table tbody:last-child');
		out.empty();

		$.ajax({
			url: url,
			type: 'get',
			dataType: 'json'
		})
		.done(function(data) {	
			var no = $('#data_table tbody tr').length+1;
			if (data<=0) {
				Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Data Tidak Ditemukan'
				})
			}else{
				for(var i=0;i<= data.length ;i++){
					out.append(
						'<tr>'+
						'<td class="text-center">'+ no++ +'</td>'+
						'<td>'+data[i].tgl_input+'</td>'+
						'<td>'+data[i].barang+'</td>'+
						'<td>'+
						'<a href="'+base+'filter/edit/'+data[i].id+'" class="btn btn-success">edit</a>'+
						'<a href="'+base+'filter/hapus/'+data[i].id+'" class="btn btn-danger">hapus</a>'+
						'</td>'+
						'</tr>'
						);
				}
			}
			
		})
		.fail(function() {
			alert("error");
		});
		
	});

	
});