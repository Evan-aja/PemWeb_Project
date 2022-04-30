<!doctype html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" >
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    <style>
        tr, th , td {
            border: 2px solid #c65990;
            padding: 8px;
        }
        table{
            border-collapse: collapse;
            width: 00px;
            height:100px;
            margin: 15px 0px 0px 5px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
</div>
    <br/>
    <div class="panel panel-primary">
        <div class="panel-body">
            <table style="width: 90%;margin-left: auto;margin-right: auto">
                <tr>
                    <th colspan="5">
                        <div class="panel-heading">
                            Added Pinjam Hari Details
                        </div>
                    </th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Jumlah</th>
                    <th>Durasi</th>
                    <th>ID Peminjam</th>
                </tr>
                <tr>
                    <td>{{$pinjamhari->id}}</td>
                    <td>{{$pinjamhari->jumlah}}</td>
                    <td>{{$pinjamhari->durasi}}</td>
                    <td>{{$pinjamhari->peminjam_id}}</td>
                </tr>
            </table>
            <div style="margin-right: auto;margin-left: auto; text-align: center;display: block">
                <a href="{{ route('halo') }}">
                    <button>
                        Kembali ke halaman utama
                    </button>
                </a>
                <a href="{{ route('pinjambulan.create') }}">
                    <button>
                        Kembali ke halaman pinjam tenor bulanan (>= Rp. 20.000.000)
                    </button>
                </a>
                <a href="{{ route('pinjamhari.create') }}">
                    <button>
                        Masuk halaman pinjam tenor harian (< Rp. 20.000.000)
                    </button>
                </a>
            </div>
        </div>
    </div>

</body>
</html>
