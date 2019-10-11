<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Pengguna</title>
    <style>
        body {
            padding: 8px;
            background: skyblue;
        }

        .btn-primary {
            float: left;
        }

        .btn-outline-success {
            float: right;
        }

    </style>
</head>

<body>
    <div class="container" style="background:white;padding: 20px;border-radius: 15px;">
        <div class="card mt-4">
            <div class="card-header text-center">
                <h2 style="font-family: 'Times New Roman', Times, serif">Ubah Data Penduduk</h2>
            </div>
            <div class="card-body">
                <br />
                <br />


                <form method="post" action="/pegawai/update/{{ $pegawai->id }}">

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Pengguna..."
                            value=" {{ $pegawai->nama }}">

                        @if($errors->has('nama'))
                        <div class="text-danger">
                            {{ $errors->first('nama')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>No Telepon</label>
                        <input type="text" name="notelepon" class="form-control" placeholder="No Telepon Anda..."
                            value=" {{ $pegawai->notelepon }}">

                        @if($errors->has('notelepon'))
                        <div class="text-danger">
                            {{ $errors->first('notelepon')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control"
                            placeholder="Alamat Pengguna .."> {{ $pegawai->alamat }} </textarea>

                        @if($errors->has('alamat'))
                        <div class="text-danger">
                            {{ $errors->first('alamat')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <textarea type="email" name="email" class="form-control"
                            placeholder="Email anda .."> {{ $pegawai->email }} </textarea>

                        @if($errors->has('email'))
                        <div class="text-danger">
                            {{ $errors->first('email')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-outline-success" value="Simpan">
                        <a href="/pegawai" class="btn btn-warning">Kembali</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>

</html>
