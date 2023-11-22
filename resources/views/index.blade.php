@extends('layouts.main')

@section('container')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="admin/css/pilly.css">
    <!-- common css -->
    <link rel="stylesheet" href="admin/css/common.css">
    <!-- font-awesome icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Abakura</title>
  </head>
  <body>
    <div class="parallax filter filter-color-red">
       

       

        

        <!-- who are we ? section  -->
        <div class="who-we-are bg-light">
            <div class="container">
                <div class="d-flex justify-content-center mb-4">
                    <div class="header">
                        <a href="#">
                            <img src="{{ asset('admin/images/icon/ABAKURA.png') }}" alt="biliard" width="300">
                        </a>
                        <h1 class="separator">Abakura Jaya</h1>
                        <p>Abakura Jaya adalah tempat penjualan motor sport di Indonesia. Abakura berhasil meluncurkan berbagai jenis sepeda dengan standar pabrik yang sangat tinggi. Abakura sebenarnya memiliki beberapa tipe motor murah, namun ada tipe off-road dan supermoto yang memiliki mesin lebih rendah.
                            Abakura tidak hanya menguasai pasar motor sport tetapi juga pasar motor trail yang menawarkan Abakura yaitu motor Klx, ninja ss, dan ninja rr Selain itu, ada juga motor supermoto yang nyaman dikendarai di berbagai medan.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <img src="img/kajal.jpg" class="img-fluid rounded-circle" alt="">
                                        <h3>Ninja 150 RR</h3>
                                        <p class="text-success">Rp. 37.000.000</p>
                                       <p>Mesin 2-tak yang bertenaga ini memiliki performa yang cukup menakjubkan. Adapun kecepatan maksimum yang bisa dihasilkan mencapai hampir 138 km/jam.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <img src="img/vidyut.jpg" class="img-fluid rounded-circle" alt="">
                                        <h3>Klx 150 Bf</h3>
                                        <p class="text-success">Rp. 32.000.000</p>
                                        <p>Kawasaki KLX150BF baru menawarkan pengendara performa off-road sejati disegala medan. Body ramping dengan ketinggian jok yang rendah, posisi riding yang nyaman serta kontrol yang mudah.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <img src="img/yuvi.jpg" class="img-fluid rounded-circle" alt="">
                                        <h3>Ninja 150 SS</h3>
                                        <p class="text-success">Rp. 30.000.000</p>
                                        <p>Ninja SS kuning hanya diproduksi dalam jumlah terbatas di tahun 2013, yaitu sekitar 10.000 unit. Hal ini membuat motor ini menjadi sangat langka dan sulit ditemukan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   



  </body>
</html>
@endsection
