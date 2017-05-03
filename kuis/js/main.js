function store($nim, $nama, $alamat, $username, $password)
{
	$.ajax({
		type 	: 'POST',
		url 	: 'database/store.php',
		data 	: 
		{
			'nim' 		: $nim,
			'nama' 		: $nama,
			'alamat' 	: $alamat,
			'username' 	: $username,
			'password' 	: $password,
		},
		success : function(payload)
		{
			$("#result").text("Success");
			select();
		},
		error 	: function()
		{	
			$("#result").text("Failed");
		}
	});
}

function select()
{
	$.ajax({
		type 	: 'GET',
		url 	: 'database/select.php',
		success : function(payload)
		{
			$("#mahasiswa").html("");
			mahasiswa = JSON.parse('{"data":'+payload+'}');
			for (var i = 0; i < mahasiswa.data.length; i++) {
				$("#mahasiswa").append(
					"<tr><td> "+
					mahasiswa.data[i].username+" </td><td>"+
					mahasiswa.data[i].nim+" </td><td>"+
					mahasiswa.data[i].nama+" </td><td>"+
					mahasiswa.data[i].alamat+" </td><td><button onclick='edit("+mahasiswa.data[i].id+")' class='btn btn-warning'>Edit</button><button onclick='destroy("+mahasiswa.data[i].id+")' class='btn btn-danger'>Delete</button></td></tr>"
					);
			}
		},
		error 	: function()
		{
			$("#mahasiswa").text("404 NO DATA FOUND");
		}
	});
}

function edit($id)
{
	$.ajax({
		type 	: 'GET',
		url 	: 'database/edit.php?id='+$id,
		success : function(payload){
			mahasiswa = JSON.parse('{"data":'+payload+'}');
			$("#username").val(mahasiswa.data[0].username);
			$("#password").val(mahasiswa.data[0].password);
			$("#nim").val(mahasiswa.data[0].nim);
			$("#nama").val(mahasiswa.data[0].nama);
			$("#alamat").val(mahasiswa.data[0].alamat);
			$("#id").val(mahasiswa.data[0].id);
			$("#store").hide();
			$("#update").show();
		},
		error 	: function(){

		}
	});
}

function update($id, $nim, $nama, $alamat, $username, $password)
{
	$.ajax({
		type 	: 'POST',
		url 	: 'database/update.php?id='+$id,
		data 	: 
		{
			'nim' 		: $nim,
			'nama' 		: $nama,
			'alamat' 	: $alamat,
			'username' 	: $username,
			'password' 	: $password,
		},
		success : function(payload)
		{
			$("#result").text("Success Update");
			select();
		},
		error 	: function()
		{	
			$("#result").text("Failed");
		}

	});
}


function destroy($id)
{
	$.ajax({
		type 	: 'GET',
		url 	: 'database/destroy.php?id='+$id,
		success : function(payload)
		{
			$("#result").text("Success "+payload);
			select();
		},
		error 	: function()
		{
			$("#result").text("Failed");
		}
	});
}