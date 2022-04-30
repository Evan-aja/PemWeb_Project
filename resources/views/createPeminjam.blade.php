<!doctype html>
<html>
<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
    <br/>
    <div class="panel panel-primary">
        <div class="panel-heading">
            Add Peminjam Details
        </div>
        <div class="panel-body">
            <form method="post" action="{{ route('peminjam.store') }}">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-md-4">Nama</label>
                    <input type="text" class="form-control" name="nama"/>
                </div>
                <div class="form-group">
                    <label class="col-md-4">NIK</label>
                    <input type="text" class="form-control" name="nik"/>
                </div>
                <div class="form-group">
                    <label class="col-md-4">Alamat</label>
                    <input type="text" class="form-control" name="alamat"/>
                </div>
                <div class="form-group">
                    <label class="col-md-4">Pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan"/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button type="submit" class="btn btn-primary" formaction="{{route('halo')}}">Return</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
