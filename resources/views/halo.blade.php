<!doctype html>
<html>
<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/halo.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" >
</head>
<body>
<div class="container">
</div>
    <br/>
    <div class="panel panel-primary">
        <div class="whitebox">
        <h1>
            Selamat Datang
        </h1>
        <h4>
            Pendaftaran Peminjaman
        </h4>
        <a href="{{route('peminjam.create')}}">
            <button class="registrasi">Registrasi Akun</button>
        </a>
        <br>

        <h4>Bila sudah mendaftar, Peminjaman dapat dilakukan didalam halaman yang dipilih</h4>
        <a href="{{route('pinjambulan.create')}}">
            <button class="pinjamBulan">Pinjam Tenor Bulanan (Pinjaman lebih dari Rp 20.000.000)</button>
        </a>
        <a href="{{route('pinjamhari.create')}}">
            <button class="pinjamHarian">Pinjam Tenor Harian (Pinjaman kurang dari Rp 20.000.000)</button>
        </a>
        <h4>Untuk melakukan pembayaran silahkan klik tombol dibawah</h4>
        <a href="{{route('cekbayar.create')}}">
            <button class="pinjamHarian">Pembayaran pinjaman</button>
        </a>
        <br>
        <h4>Untuk melakukan pengecekan total pinjaman, masukkan id anda dan tekan tombol 'Cek'</h4>
        <form method="post" action="{{ route('cek') }}">
            {{csrf_field()}}
            <div class="form-group">
                <input class="kolomID" type="text" class="form-control id" name="id" placeholder="ID check" required/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary cek">Cek</button>
            </div>
        </form>
    </div>
    </div>

</body>
</html>
