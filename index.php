<!doctype html>
<html lang="en" id="covid-19">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <!-- My Font -->
    <link href=" https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Pantau COVID-19</title>
</head>

<body class="font">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand page-scroll" href="#covid-19">
                Pantau
                <br><b> COVID-19</b></br>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar navbar-nav ml-auto">
                    <a class="nav-link active page-scroll" href="#covid-19">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link page-scroll" href="#kasus">Kasus</a>
                    <a class="nav-link page-scroll" href="#pencegahan">Pencegahan</a>
                </ul>
            </div>
        </div>
    </nav>
    <!-- endnav -->

    <!-- home -->
    <section class="home" id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-6 home-text">
                    <h1 class="home-judul">Pantau Penyebaran <br>
                        <b>COVID -19</b></h1>
                    <p><span>Penyebaran Covid -19 untuk Bersama Melawan <b>CORONA.</b></span></p>
                    <div class="button justify-content-center d-flex">
                        <a class="page-scroll" href="#kasus">
                            <button type="button" class="btn btn-primary tombol tombol-data"><span>DATA KASUS CORONA</span></button></a>
                    </div> <br>
                </div>
                <div class="col-md-6 home-img">
                    <img src="img/ilus/corona.svg" class="img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
    </section>
    <!-- endhome -->

    <!-- kasus -->
    <section class="kasus" id="kasus">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 ">
                    <h2 class="kasus-judul"><b>Data Kasus</b> COVID-19 <b>di Indonesia.</b></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h5 class="text-center kasus-text">Jumlah Kasus di Indonesia</h5>
                    <h1 id="data-kasus" class="text-center kasus-angka"><b></b></h1>
                </div>
            </div>
            <!-- Card -->
            <div class="row">
                <!-- Card Positif -->
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="shadow p-2 mb-5 card bg-positif img-card box-primary-shadow panel">
                        <div class="card-body ">
                            <div class="d-flex">
                                <div class="text-white">
                                    <p style="font-size: 18px" class="text-white mb-0">TOTAL POSITIF</p>
                                    <h2 id="data-positif" style="font-size: 48px" class="mb-0 number-font"></h2>
                                    <p class="text-white mb-0">ORANG</p>
                                </div>
                                <div class="ml-auto"> <img src="img/positif.svg" width="100" height="100" alt="Positif"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Positif -->

                <!-- Card Sembuh -->
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="shadow p-2 mb-5 card bg-sembuh img-card box-primary-shadow panel">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="text-white">
                                    <p style="font-size: 18px" class="text-white mb-0">TOTAL SEMBUH</p>
                                    <h2 style="font-size: 48px" id="data-sembuh" class="mb-0 number-font"></h2>
                                    <p class="text-white mb-0">ORANG</p>
                                </div>
                                <div class="ml-auto"> <img src="img/sembuh.svg" width="100" height="100" alt="Positif"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Sembuh -->

                <!-- Card Mati -->
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="shadow p-2 mb-5 card bg-mati img-card box-primary-shadow panel">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="text-white">
                                    <p style="font-size: 18px" class="text-white mb-0">TOTAL MENINGGAL</p>
                                    <h2 style="font-size: 48px" id="data-meninggal" class="mb-0 number-font"></h2>
                                    <p class="text-white mb-0">ORANG</p>
                                </div>
                                <div class="ml-auto"> <img src="img/mati.svg" width="100" height="100" alt="mati"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Mati -->

                <!-- Card Kasus di Bali -->
                <div class="col mt-3">
                    <div class="shadow bg-bali panel">
                        <div class="row">
                            <div class="col-lg-3 d-flex">
                                <div class="text-white mt-3">
                                    <h2 style="font-size: 48px;"><b>BALI</b></h2>
                                    <h2 id="bali-kasus" class="angka"><b></b></h2>
                                    <h5 style="font-size: 25px;">Kasus</h5>
                                </div>
                                <div class="ml-auto"> <img src="img/bali.png" width="200" alt="bali"> </div>
                            </div>
                            <div class="panel-bali mt-4">
                                <p>Total Positif</p>
                                <h2 id="bali-positif" class="angka"><span><b></b></span></h2>
                                <p>Orang</p>
                            </div>
                            <div class="panel-bali mt-4">
                                <p>Total Sembuh</p>
                                <h2 id="bali-sembuh" class="angka"><span><b></b></span></h2>
                                <p>Orang</p>
                            </div>
                            <div class="panel-bali mt-4">
                                <p>Total Meninggal</p>
                                <h2 id="bali-meninggal" class="angka"><span><b></b></span></h2>
                                <p>Orang</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Kasus di Bali -->

            </div>
            <!-- source API -->
            <div class="col text-center mt-3">
                <p style="font-size: 18px;">Source API : <a href="https://kawalcorona.com/">kawalcorona.com</a> </p>
            </div>
            <!-- End source API -->
        </div>
    </section>
    <br><br>
    <!-- endkasus -->

    <!-- Pencegahan -->
    <section class="pencegahan" id="pencegahan">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 ">
                    <h2 class="pencegahan-judul"><b>Pencegahan</b> COVID-19 <span>Lawan COVID-19 dengan.</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="container-fluid col-12 row m-0 my-5 font-weight-bold">
                    <div class="motion col-md-4 p-2 p-md-4 text-center mt-auto "><img class="img-fluid mb-4" src="img/ilus/cucitangan.png" alt="cucitangan" width="300px">
                        <p>Rutin mencuci tangan sebelum atau
                            sesudah beraktivitas.</p>
                    </div>
                    <div class="motion col-md-4 p-2 p-md-4 text-center mt-auto "><img class="img-fluid mb-4" src="img/ilus/sosial.png" alt="sosial" width="300px">
                        <p>Sosial Distancing, jaga jarak
                            dengan orang.</p>
                    </div>
                    <div class="motion col-md-4 p-2 p-md-4 text-center mt-auto "><img class="img-fluid mb-4" src="img/ilus/masker.png" alt="masker" width="300px">
                        <p>Selalu menggunakan masker
                            ketika berada diluar.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- EndPencegahan -->



    <!-- scrollTop -->
    <button id=topBtn class="rounded-circle"><i class="fas fa-angle-double-up"></i></button>
    <!-- EndscrollTop -->

    <!-- footer -->

    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12 text-white">
                    <p> Made With <img src="img/lope.png" width="20" title="love"> by Andi Suartika</a>.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- myscript -->
    <script src="js/script.js"></script>

</body>

</html>

<script>
    $(document).ready(function() {

        dataIndo();
        dataBali();


        // API-Indo
        function dataIndo() {
            $.ajax({
                url: 'https://coronavirus-19-api.herokuapp.com/countries',
                success: function(data) {
                    try {
                        var json = data;
                        var html = [];

                        if (json.length > 0) {
                            var i;
                            for (i = 0; i < json.length; i++) {
                                var dataIndo = json[i];
                                var namaNegara = dataIndo.country;

                                if (namaNegara === 'Indonesia') {
                                    var kasus = dataIndo.cases;
                                    var sembuh = dataIndo.recovered;
                                    var meninggal = dataIndo.deaths;

                                    $('#data-kasus').html(kasus);
                                    $('#data-positif').html(kasus);
                                    $('#data-sembuh').html(sembuh);
                                    $('#data-meninggal').html(meninggal);
                                }
                            }
                        }
                    } catch {
                        alert('Error');
                    }
                }
            });
        }

        // API data-Bali
        function dataBali() {
            $.ajax({
                url: 'curl.php',
                type: 'GET',
                success: function(data) {
                    try {




                        alert(data);
                        // $('#bali-kasus').html(coba);
                        // $('#bali-positif').html(bali_Posi);
                        // $('#bali-sembuh').html(bali_Semb);
                        // $('#bali-meninggal').html(bali_Meni);
                    } catch {
                        alert('Error');
                    }
                }
            });
        }
    });
</script>