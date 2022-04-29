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
            Add Pinjam Hari Details
        </div>
        <div class="panel-body">
            <form method="post" action="{{ route('pinjambulan.store') }}">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-md-4">Jumlah</label>
                    <input type="text" class="form-control" name="jumlah"/>
                </div>
                <div class="form-group">
                    <label class="col-md-4">Durasi</label>
                    <input type="text" class="form-control" name="durasi"/>
                </div>
                <div class="form-group">
                    <label class="col-md-4">ID Peminjam</label>
                    <input type="text" class="form-control" name="peminjam_id"/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
