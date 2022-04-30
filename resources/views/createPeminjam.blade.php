<!doctype html>
<html>
<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/halo.css">
    <link rel="stylesheet" href="css/createPeminjam.css">
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
        <div class="panel-heading">
            <h1>Pendaftaran</h1>
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
                    <button type="submit" class="btn btn-primary kirim">Daftar</button>
                </div>
            </form>
            <a href="{{route('halo')}}">
            <button type="submit" class="btn btn-primary kirim2">Kembali</button>
            </a>
        </div>
    </div>
</div>

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
</body>
</html>
