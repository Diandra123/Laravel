<!DOCTYPE html>
<html>

<head>
    <title>SEARCH</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <div class="container"> <br>
        <form action="/pegawai/cari" method="GET">
            <input type="text" name="cari" placeholder="SEARCH..." value="{{ old('cari') }}">
            <input type="submit" value="CARI">
        </form>
        <br />

        <table class="table table-striped">
            <tr>
                <th>Nama</th>
                <th>No-Telepon</th>
                <th>Alamat</th>
                <th>Email</th>
            </tr>
            @foreach($pegawai as $p)
            <tr>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->notlp }}</td>
                <td>{{ $p->alamat }}</td>
                <td>{{ $p->email }}</td>
            </tr>
            @endforeach
        </table>
    </div>


</body>

</html>
