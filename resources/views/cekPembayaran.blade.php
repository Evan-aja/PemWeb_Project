<!doctype html>
<html>
<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
{{--    <link href="{{asset('css/createPinjamBulan.css')}}" rel="stylesheet" type="text/css" />--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" >
</head>
<body>
<div class="container">
</div>
    <br/>
    <div class="panel panel-primary">

        <h1>Pembayaran Pinjaman</h1>

        <div class="panel-body">
            <form method="post" action="{{route('cekbayar.store')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-md-4">ID Pinjaman
                    <input type="text" class="form-control kolom3" name="ids"/>
                    </label>
                </div>
                <br>
                <label for="pilihan">Pilih jenis pinjaman:</label>
                <select name="pilihan" id="pilihan">
                    <option value="bulan">Pinjam Tenor Bulanan</option>
                    <option value="hari">Pinjam Tenor Harian</option>
                </select>
                <div class="form-group">
                    <button type="submit">Cek Cicilan</button>
                    <button type="submit" formaction="{{route('bayar.store')}}">Bayar</button>
                    <button type="submit" formaction="{{route('halo')}}">Kembal ke Beranda</button>
                </div>
            </form>
            <div id="hasil_cek"></div>
        </div>
</div>


</body>
</html>
