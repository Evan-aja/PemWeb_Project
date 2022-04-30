<!doctype html>
<html>
<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/css/halo.css">
    <link rel="stylesheet" href="/css/createPeminjam.css">


</head>
<body>
<div class="container">
    <div class="whitebox">
    <br/>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1>Add Peminjam Details</h1>
        </div>
        <div class="panel-body">
            <form method="post" action="{{ route('peminjam.store') }}">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-md-4 ">Nama</label>
                    <input type="text" class="form-control kolom" name="nama" placeholder="Nama"/>
                </div>
                <div class="form-group" >
                    <label class="col-md-4">NIK</label>
                    <input type="text" class="form-control kolom2" name="nik" placeholder="NIK"/>
                </div>
                <div class="form-group">
                    <label class="">Alamat</label>
                    <input type="text" class="form-control kolom3" name="alamat" placeholder="Alamat"/>
                </div>
                <div class="form-group">
                    <label class="col-md-4">Pekerjaan</label>
                    <input type="text" class="form-control kolom4" name="pekerjaan" placeholder="Pekerjaan"/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary kirim">Add</button>
                    <button type="submit" class="btn btn-primary kirim2" formaction="{{route('halo')}}">Return</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>
