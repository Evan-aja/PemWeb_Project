<!doctype html>
<html>
<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/createPinjamBulan.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" >
</head>
<body>
<div class="container">
</div>
    <div class="whitebox">

    <br/>
    <div class="panel panel-primary">

        <h1>Peminjaman Tenor Bulanan</h1>

        <div class="panel-body">
            <form method="post" action="{{ route('pinjambulan.store') }}">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-md-4">Jumlah</label>
                    <input type="text" class="form-control kolom" name="jumlah"/>
                </div>
                <div class="form-group">
                    <label class="col-md-4">Tenor</label>
                    <input type="text" class="form-control kolom2" name="durasi"/>
                </div>
                <div class="form-group">
                    <label class="col-md-4">ID Peminjam</label>
                    <input type="text" class="form-control kolom3" name="peminjam_id"/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary add">Pinjam</button>
                    <button type="submit" class="btn btn-primary simulate" formaction="{{route('pinjambulan.simulate')}}">Simulasikan Angsuran</button>
                </div>
            </form>
            <a href="{{route('halo')}}">
            <button type="submit" class="btn btn-primary return">Kembali</button>
            </a>
        </div>
    </div>
</div>


</body>
</html>
