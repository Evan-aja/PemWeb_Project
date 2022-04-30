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
                <th colspan="5">
                    <div class="panel-heading">
                        Simulasi pinjam Bulan
                    </div>
                </th>
                <tr>
                    <th>Bulan Ke</th>
                    <th>Sisa Pinjaman</th>
                    <th>Angsuran</th>
                    <th>Bunga</th>
                    <th>Total yang harus dibayar</th>
                </tr>
                @php($durasi=explode(" ",$pinjamhari->durasi))
                @php ($angsuran=$pinjamhari->jumlah/(int)$durasi[0])
                @for($i=1;$i<=(int)$durasi[0];$i++)
                    @php($bunga=(float)$pinjamhari->jumlah*(10/100))
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$pinjamhari->jumlah}}</td>
                        <td>{{$angsuran}}</td>
                        <td>{{$bunga}}</td>
                        <td>{{$bunga+$angsuran}}</td>
                    </tr>
                    @php($pinjamhari->jumlah-=$angsuran)
                @endfor
            </table>
            <div style="margin-right: auto;margin-left: auto; text-align: center;display: block">
                <a href="{{ route('halo') }}">
                    <button>
                        Kembali ke halaman utama
                    </button>
                </a>
                <a href="{{ route('peminjam.create') }}">
                    <button>
                        Kembali ke halaman daftar
                    </button>
                </a>
                <a href="{{ route('pinjambulan.create') }}">
                    <button>
                        Masuk halaman pinjam tenor bulanan (>= Rp. 20.000.000)
                    </button>
                </a>
                <a href="{{ route('pinjamhari.create') }}">
                    <button>
                        Kembali ke halaman pinjam tenor harian (< Rp. 20.000.000)
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
