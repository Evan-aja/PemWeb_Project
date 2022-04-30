<!doctype html>
<html>
<head>
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
    <br/>
    <div class="panel panel-primary">
        <div class="panel-body">
            <table style="width: 90%;margin-left: auto;margin-right: auto">
                <th colspan="4">
                    <div class="panel-heading">
                        Total pinjam Bulan
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
                        Total pinjam Hari
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
            <div style="margin-right: auto;margin-left: auto; text-align: center;display: block">
                <a href="{{ route('halo') }}">
                    <button>
                        Kembali ke halaman utama
                    </button>
                </a>
                <a href="{{ route('peminjam.create') }}">
                    <button>
                        Masuk halaman daftar
                    </button>
                </a>
                <a href="{{ route('pinjambulan.create') }}">
                    <button>
                        Masuk halaman pinjam tenor bulanan (>= Rp. 20.000.000)
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
</div>
</body>
</html>
