<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dataPeminjam.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
    </div>
    <div class="whitebox">
        <!-- <h4 style="text-decoration: underline;">Kembali</h4> -->

        <form action="mainpage">
            {{-- <input type="button" value="Kembali" class="kembali"> --}}
            <a href="{{route('mainpage')}}">Kembali</a>
        </form>

        <form method="post" action="{{ route('data.store') }}">
            {{csrf_field()}}
            {{ method_field('PUT') }}
            <h2>Data Peminjam</h2>
            <input type="text" class="kolom" name="nik" placeholder="NIK">
            <input type="text" class="kolom" name="nama" placeholder="Nama Lengkap">
            <input type="text" class="kolom" name="alamat" placeholder="Alamat">
            <input type="text" class="kolom" name="pekerjaan" placeholder="Pekerjaan">
            <br>
            {{-- <a href="jumlahPinjaman" class="kirim" formaction="{{route('jumlahPinjaman')}}">Kirim</a> --}}
            <input type="submit" value="Kirim" class="kirim" formaction="{{route('jumlahPinjaman')}}">
            {{-- <div class="form-group">
                <button type="submit" class="btn btn-primary">Add</button>
                <button type="submit" class="btn btn-primary" formaction="{{route('halo')}}">Return</button>
            </div> --}}
        </form>
    </div>

</body>
</html>
