<!doctype html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" >
    <link href="{{asset('css/simulasiPinjamanBulanan.css')}}" rel="stylesheet" type="text/css" />
    <style>
        tr, th , td {
            /* border: 2px solid #c65990; */
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
        <table style="width: 90%;margin-left: auto;margin-right: auto">
            <th colspan="5">
                    <div class="panel-heading">
                        Simulasi Peminjaman Dengan Tenor Harian
                    </div>
                </th>
                <tr>
                    <th>Bulan Ke</th>
                    <th>Sisa Pinjaman</th>
                    <th>Angsuran</th>
                    <th>Bunga</th>
                    <th>Total yang harus dibayar</th>
                </tr>
            </table>
            <div class="detail">
            <table style="width: 90%;margin-left: auto;margin-right: auto">
    
                @php($durasi=explode(" ",$pinjamhari->durasi))
                @php ($angsuran=$pinjamhari->jumlah/(int)$durasi[0])
                @for($i=1;$i<=(int)$durasi[0];$i++)
                    @php($bunga=(float)$pinjamhari->jumlah*(10/100))
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{number_format($pinjamhari->jumlah,decimal_separator: ',',thousands_separator: '.')}}</td>
                        <td>{{number_format($angsuran,decimal_separator: ',',thousands_separator: '.')}}</td>
                        <td>{{number_format($bunga,decimal_separator: ',',thousands_separator: '.')}}</td>
                        <td>{{number_format($bunga+$angsuran,decimal_separator: ',',thousands_separator: '.')}}</td>
                    </tr>
                    @php($pinjamhari->jumlah-=$angsuran)
                @endfor
            </table>
            </div>
            <div style="margin-right: auto;margin-left: auto; text-align: center;display: block">
                <a href="{{ route('halo') }}">
                    <button class="kembali">
                        Kembali
                    </button>
                </a>
               
            </div>
        </div>
    </div>
    </div>
</body>
</html>
