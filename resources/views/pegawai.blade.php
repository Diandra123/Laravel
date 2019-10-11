<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/Cianjur-Today.jpg') }}">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Data Pengguna</title>

    <style>
        body {
            padding: 25px;
            background: skyblue;
        }

        .cari {}

    </style>
</head>

<body>
    <div class="container-fluid" style="background:white;padding: 20px;border-radius: 15px;">
        <h1 style="font-family: 'Times New Roman', Times, serif">Data Pengguna</h1> <br>
        <table>
            <form class="cari" action="/pegawai/cari" method="GET">
                <input class="btn btn-outline-primary" type="text" name="cari" placeholder="SEARCH..."
                    value="{{ old('cari') }}">
                <button type="submit" class="btn btn-outline-secondary"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
             <a href="/pegawai/tambah" class="btn btn-primary" style="float: right;"><i class="fa fa-plus-square-o" aria-hidden="true">
             Tambahkan Pengguna Baru</i></a>
        </table>

            <p>
                <?php if(Session::has('simpan')): ?>
                <div class="message message-success">
                    <span class="close"></span>
                    <?php echo Session::get('simpan')?>
                </div>
                <?php endif; ?>

                <?php if(Session::has('ubah')): ?>
                <div class="message message-success">
                    <span class="close"></span>
                    <?php echo Session::get('ubah')?>
                </div>
                <?php endif; ?>

                <?php if(Session::has('hapus')): ?>
                <div class="message message-success">
                    <span class="close"></span>
                    <?php echo Session::get('hapus')?>
                </div>
                <?php endif; ?>

            </p>

        <br />
        <table border="2" class="table table-striped" style="border-radius: 10px;">
            <thead>
                <tr style="background:yellow;">
                    <th>No</th>
                    <th>Nama</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Tanggal Dibuat
                        &nbsp;
                        @if($sort == 'desc')
                        <a href="/pegawai/asc"><i style="color: black;" class="fa fa-chevron-circle-up" aria-hidden="true"></i></a>
                        @else($sort == 'asc')
                        <a href="/pegawai"><i style="color: black;" class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
                        @endif
                    </th>
                    <th style="text-align: center">OPSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pegawai as $key => $p)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->notelepon }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->email }}</td>
                    <td>{{ $p->created_at }}</td>
                    <td>
                        <center>
                            <a href="/pegawai/edit/{{ $p->id }}" class="btn btn-secondary"><i class="fa fa-pencil-square-o" aria-hidden="true"> Ubah</i></a>
                            <button type="button" class="btn btn-danger"><a style="color: white; text-decoration: none;" href="/pegawai/hapus/{{ $p->id }}" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fa fa-trash-o" aria-hidden="true"></i>
                            Hapus</a></button>
                        </center>
                    </td>
                </tr>
                @endforeach
                @if(count($pegawai) == 0)
                <tr class="text-center">
                    <td colspan="7">Data tidak di temukan</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
