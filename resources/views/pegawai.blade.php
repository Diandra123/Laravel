<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Pengguna</title>

    <style>
        body {
            padding: 30px;
            background: skyblue;
        }

    </style>
</head>

<body>
    <div class="container" style="background:white;padding: 20px;border-radius: 15px;">
        <h1 style="font-family: 'Times New Roman', Times, serif">Data Pengguna / User</h1>
        <br />
        <br />
        <table class="table table-striped">
            <thead>
                <tr style="background:yellow">
                    <th>Nama</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>OPSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pegawai as $p)
                <tr>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->notelepon }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->email }}</td>
                    <td>
                        <a href="/pegawai/edit/{{ $p->id }}" class="btn btn-success">Ubah</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/pegawai/tambah" class="btn btn-primary">Tambah Pengguna Baru</a>
    </div>
</body>

</html>
