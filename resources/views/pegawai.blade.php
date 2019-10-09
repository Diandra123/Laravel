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
        <h1 style="font-family: 'Times New Roman', Times, serif">Data Penduduk / Warga Desa Sabandar</h1>
        <br />
        <form action="/pegawai/cari" method="GET">
            <input type="text" name="cari" placeholder="SEARCH..." value="{{ old('cari') }}">
            <input type="submit" value="CARI">
        </form>
        <table class="table table-striped" style="">
            <thead>
                <tr style="background:yellow;">
                    <th>Nama</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th style="text-align: center">OPSI</th>
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
                        <center>
                            <a href="/pegawai/edit/{{ $p->id }}" class="btn btn-success">Ubah</a>
                        </center>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/pegawai/tambah" class="btn btn-primary">Tambahkan Penduduk Baru</a>
    </div>
</body>

</html>
