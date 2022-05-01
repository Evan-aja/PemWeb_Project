<!doctype html>
<html>
<head>
    <link href="{{asset('css/cekRincian.css')}}" rel="stylesheet" type="text/css" />
{{--    <link href="{{asset('css/cekRincian.css')}}" rel="stylesheet" type="text/css" />--}}
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
<div class="whitebox">
    <div class="panel panel-primary">
        <div class="panel-body">
            <table style="width: 90%;margin-left: auto;margin-right: auto;">
                <th colspan="5">
                    <div class="panel-heading">
                        Cicilan Pinjaman Bulanan
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
                    @php
                        $exploder=explode(' ',$pinjam->durasi);
                    	if((double)$exploder[0]<=0){
                    		$cicilan=((double)$pinjam->jumlah)+((double)$pinjam->jumlah*(10/100));
                    	}else{
	                    	$cicilan=((double)$pinjam->jumlah/(double)$exploder[0])+((double)$pinjam->jumlah*(10/100));
	                    }
                    @endphp
                    <td>{{($cicilan)}}</td>
                </tr>
            </table>
            <div style="margin-right: auto;margin-left: auto; text-align: center;display: block">
                <a href="{{route('cekbayar.create')}}">
                    <button class="tombol">Kembali</button>
                </a>
            </div>
        </div>
</div>
</div>

</body>
</html>
