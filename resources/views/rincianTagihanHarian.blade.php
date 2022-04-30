<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/rincianTagihanHarian.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
    </div>
    <div class="whitebox">
        <!-- <h4 style="text-decoration: underline;">Kembali</h4> -->
        
        <form action="mainpage">
            <input type="button" value="Kembali" class="kembali">
        </form>

        <form action="belumtau.php">
            <h2 >Rincian Tagihan</h2>
            <div class="displayTenorInformation">
                120.000.000 - Tenor 3 Bulan
            </div>
            <div class="displayTenor3">
                @for($i = 0;$i<30;$i++)
                <p>
                    <div class="rincian"> 
                        <p class="tenor3">{{$i+1}}</p>
                        <p>{{11202300+(($i+5)*$i)*300000}}</p>
                    </div>
                    
                @endfor
                
            </div>
            <div class="displayTenorTotal">
                Total Rp.360.000.000
            </div>
            <br>
            <input type="button" value="Konfirmasi" class="kirim">
        </form>
    </div>

</body>
</html>