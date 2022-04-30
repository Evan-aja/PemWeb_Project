<!doctype html>
<html>
<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
    <br/>
    <div class="panel panel-primary">
        <h1>
            Selamat Datang
        </h1>
        <h3>
            Ada yang bisa kami bantu?
        </h3>
        <a href="{{route('peminjam.create')}}">
            <button>Registrasi Akun</button>
        </a>
        <p>Sudah terdaftar?<br>Jika iya, silahkan memilai transaksi dengan menekan tombol dibawah<br>Simulasi peminjaman dapat dilakukan didalam halaman yang dipilih</p>
        <a href="{{route('pinjambulan.create')}}">
            <button>Pinjam Tenor Bulanan (>=20.000.000)</button>
        </a>
        <a href="{{route('pinjamhari.create')}}">
            <button>Pinjam Tenor Harian (<20.000.000)</button>
        </a>
        <br>
        <p>Untuk melakukan pengecekan total pinjaman, masukkan id anda dan tekan tombol 'Cek'</p>
        <form method="post" action="{{ route('cek') }}">
            {{csrf_field()}}
            <div class="form-group">
                <label class="col-md-4">ID</label>
                <input type="text" class="form-control" name="id"/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Cek</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
