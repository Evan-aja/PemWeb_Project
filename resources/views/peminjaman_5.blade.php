<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/peminjaman_5.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Peminjaman</title>
</head>
<body>
    <div class="container">
    </div>
    <div class="whitebox">
        <!-- <h4 style="text-decoration: underline;">Kembali</h4> -->

        <div class="deskripsi">
        <img src="{{asset('image/Check Circle Icon.svg')}}" alt="Berhasil" width="150" >
            <h2>Peminjaman Berhasil</h2>
                <a href="{{route('halo')}}">
                    <button class="bayar">Kembali Ke Menu Utama</button>
                </a>
        </div>
    </div>

</body>
</html>
