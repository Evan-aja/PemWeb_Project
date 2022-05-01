<!doctype html>
<html>
<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
{{--    <link href="{{asset('css/createPinjamBulan.css')}}" rel="stylesheet" type="text/css" />--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" >
    <style>
        tr, th , td {
            border: 2px solid #2862D1;
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
            <table style="width: 90%;margin-left: auto;margin-right: auto;">
                <th colspan="5">
                    <div class="panel-heading">
                        Cicilan Pinjaman Harian
                    </div>
                </th>
                <tr>
                    <th>ID</th>
                    <th>ID Peminjam</th>
                    <th>Tenor</th>
                    <th>Jumlah Pinjaman</th>
                    <th>Cicilan yang harus dibayar</th>
                </tr>
                <tr>
                    <td>{{$pinjam->id}}</td>
                    <td>{{$pinjam->peminjam_id}}</td>
                    <td>{{$pinjam->durasi}}</td>
                    <td>{{$pinjam->jumlah}}</td>
                    @php ($exploder=explode(' ',$pinjam->durasi))
                    @php ($cicilan=((double)$pinjam->jumlah/(double)$exploder[0])+((double)$pinjam->jumlah*(0.5/100)))
                    <td>{{($cicilan)}}</td>
                </tr>
            </table>
            <div style="margin-right: auto;margin-left: auto; text-align: center;display: block">
                <a href="{{route('cekbayar.create')}}">
                    <button>Kembali</button>
                </a>
            </div>
        </div>
</div>


</body>
</html>
