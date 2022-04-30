<!doctype html>
<html>
<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/css/halo.css">

</head>
<body>
<div class="container">
    <br/>
    <div class="panel panel-primary">
        <div class="whitebox">
        <h1>
            Selamat Datang
        </h1>
        <h3>
            Pendaftaran Peminjaman
        </h3>
        <a href="{{route('peminjam.create')}}">
            <button class="registrasi">Registrasi Akun</button>
        </a>
        <br>

        <p>Bila sudah mendaftar, Peminjaman dapat dilakukan didalam halaman yang dipilih</p>
        <a href="{{route('pinjambulan.create')}}">
            <button class="pinjamBulan">Pinjam Tenor Bulanan (>=20.000.000)</button>
        </a>
        <a href="{{route('pinjamhari.create')}}">
            <button class="pinjamHarian">Pinjam Tenor Harian (<20.000.000)</button>
        </a>
        <br>
        <p>Untuk melakukan pengecekan total pinjaman, masukkan id anda dan tekan tombol 'Cek'</p>
        <form method="post" action="{{ route('cek') }}">
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" class="form-control id" name="id" placeholder="ID check"/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary cek">Cek</button>
            </div>
        </form>
    </div>
    </div>
</div>
</body>
</html>
