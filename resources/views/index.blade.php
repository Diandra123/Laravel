<!-- <!DOCTYPE html>
<html>
<head>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<title>list</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
            <div class="alert alert-primary" role="alert">
                    Selamat Datang!!
                  </div>
    <br>
	<h3>List User</h3>
 

	<br/>
 
	<table class="table table-bordered" style="text-align: center;">
        <tr  style="background: linear-gradient( #0f0c29,  #302b63, #24243e); text-align: center; " >
            
			<th style="color: white;">NO</th>
			<th style="color: white;">NAMA</th>
			<th style="color: white;" >NO TLPN</th>
			<th style="color: white;" >ALAMAT</th>
			<th style="color: white;" >EMAIL</th>
			<th style="color: white;" >TANGGAL DAFTAR
				@if($sort == 'asc')
				<a href="/siswa">
					&nbsp;<i  style="color:white; text-decoration: none;" class="fa fa-sort-asc" aria-hidden="true"></i>
				</a>
				@else($sort == 'desc')
				<a href="/siswa/asc">
					&nbsp;<i  style="color:white; text-decoration: none;"class="fa fa-sort-desc" aria-hidden="true"></i></a>
				 @endif
			
			
			</th>
            <th style="color: white;" >OPSI</th>
            

		</tr>
		@foreach($list as $key => $p)
		<tr style="background: linear-gradient(to right,
        
#780206, #061161); color: whitesmoke;">
			<td>{{ $key + 1 }}</td>
			<td > {{ $p->nama }}</td>
			<td>{{ $p->notlp }}</td>
			<td>{{ $p->alamat }}</td>
			<td>{{ $p->email }}</td>
            <td>{{ $p->tanggaldaftar }}</td>
            
			<td>
                   
                <button type="button" class="btn btn-danger"><a style="color: white; text-decoration: none;" href="/siswa/hapus/{{ $p->id }}" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fa fa-trash-o" aria-hidden="true"></i>
Hapus</a></button>
			</td>
		</tr>
		@endforeach
	</table>
	
</div>

 
</body>
</html> -->