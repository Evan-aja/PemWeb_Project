<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="{{asset('css/pembayaran_4.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Pembayaran</title>
</head>
<body>
    <div class="container">
    </div>
    <div class="whitebox">
        <!-- <h4 style="text-decoration: underline;">Kembali</h4> -->


        <div class="deskripsi">
        <img src="{{asset('image/Check Circle Icon.svg')}}" alt="Berhasil" width="150" >
            <h2>Pendaftaran Berhasil</h2>
        </div>
        <a href="{{ route('halo') }}">
                    <button class="bayar">
                        Kembali ke halaman utama
                    </button>
        </a>



    </div>

</body>
</html>
