<!doctype html>
<html>
<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/css/createPinjamBulan.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" >
</head>
<body>
<div class="container">
    <div class="whitebox">

    <br/>
    <div class="panel panel-primary">

        <h1>Add Pinjam Bulan Details</h1>   

        <div class="panel-body">
            <form method="post" action="{{ route('pinjambulan.store') }}">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-md-4">Jumlah</label>
                    <input type="text" class="form-control kolom" name="jumlah"/>
                </div>
                <div class="form-group">
                    <label class="col-md-4">Durasi</label>
                    <input type="text" class="form-control kolom2" name="durasi"/>
                </div>
                <div class="form-group">
                    <label class="col-md-4">ID Peminjam</label>
                    <input type="text" class="form-control kolom3" name="peminjam_id"/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary add">Add</button>
                    <button type="submit" class="btn btn-primary simulate" formaction="{{route('pinjambulan.simulate')}}">Simulate</button>
                    <button type="submit" class="btn btn-primary return" formaction="{{route('halo')}}">Return</button>
                </div>
            </form>
        </div>
    </div>
</div>

</div>
</body>
</html>
