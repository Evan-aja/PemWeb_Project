<!doctype html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="{{asset('/css/cekPeminjaman.css')}}" rel="stylesheet" type="text/css" />
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
    <div class="whitebox">
    <div class="panel panel-primary">
        <div class="panel-body">
            <table style="width: 90%;margin-left: auto;margin-right: auto;">
                <th colspan="4">
                    <div class="panel-heading">
                        Total Pinjaman Dengan Tenor Bulanan
                    </div>
                </th>
                <tr>
                    <th>ID</th>
                    <th>ID Peminjam</th>
                    <th>Tenor</th>
                    <th>Jumlah Pinjaman</th>
                </tr>
                @php($bulan=0)
                @foreach($pinjambulan as $i)
                    @php($bulan=$bulan+(int)$i->jumlah)
                    <tr>
                        <td>{{$i->id}}</td>
                        <td>{{$i->peminjam_id}}</td>
                        <td>{{$i->durasi}}</td>
                        <td>{{number_format($i->jumlah,decimal_separator: ',',thousands_separator: '.')}}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="3">Total</td>
                    <td>{{number_format($bulan,decimal_separator: ',',thousands_separator: '.')}}</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>
                <th colspan="4">
                    <div class="panel-heading">
                        Total Pinjaman Dengan Tenor Harian
                    </div>
                </th>
                <tr>
                    <th>ID</th>
                    <th>ID Peminjam</th>
                    <th>Tenor</th>
                    <th>Jumlah Pinjaman</th>
                </tr>
                @php($hari=0)
                @foreach($pinjamhari as $i)
                    @php($hari=$hari+(int)$i->jumlah)
                    <tr>
                        <td>{{$i->id}}</td>
                        <td>{{$i->peminjam_id}}</td>
                        <td>{{$i->durasi}}</td>
                        <td>{{number_format($i->jumlah,decimal_separator: ',',thousands_separator: '.')}}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="3">Total</td>
                    <td>{{number_format($hari,decimal_separator: ',',thousands_separator: '.')}}</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td colspan="3">Total Pinjaman</td>
                    <td>{{number_format($bulan+$hari,decimal_separator: ',',thousands_separator: '.')}}</td>
                </tr>
            </table>
                <a href="{{ route('halo') }}">
                    <button class="kembali">
                        Kembali ke halaman utama
                    </button>
                </a>

        </div>
    </div>
    </div>

</body>
</html>
