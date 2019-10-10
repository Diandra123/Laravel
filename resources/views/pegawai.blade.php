<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/Cianjur-Today.jpg') }}">
    <title>Data Penduduk Desa Sabandar Cianjur</title>

    <style>
        body {
            padding: 25px;
            background: skyblue;
        }

        .cari {}

    </style>
</head>

<body>
    <div class="container" style="background:white;padding: 20px;border-radius: 15px;">
        <h1 style="font-family: 'Times New Roman', Times, serif">Data Penduduk / Warga Desa Sabandar</h1>
        <table>
            <form class="cari" action="/pegawai/cari" method="GET">
                <input class="btn btn-outline-primary" type="text" name="cari" placeholder="SEARCH..."
                    value="{{ old('cari') }}">
                <button type="submit" class="btn btn-outline-success" style="">CARI</button>
            </form>
        </table>
        <br />
        <table border="2" class="table table-striped" style="border-radius: 10px;">
            <thead>
                <tr style="background:yellow;">
                    <th>No</th>
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
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->notelepon }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->email }}</td>
                    <td>
                        <center>
                            <a href="/pegawai/edit/{{ $p->id }}" class="btn btn-outline-success">Ubah</a>
                        </center>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/pegawai/tambah" class="btn btn-outline-primary">Tambahkan Penduduk Baru</a>
    </div>
</body>

</html>
