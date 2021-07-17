@extends('layouts.publicapp')

@section('content')
<div class="col-12 bamboo py-5  ">
    <h1 class="section-heading text-center display-4 custitle finger font-weight-bolder">Home Page</h1>
</div>
<div class="container-fluid backgrgreen pb-5" >
    <div class="row justify-content-center ">
        <div class="container col-sm-10 mb-5">
            
            <div id="carouselExampleIndicators" class="carousel slide mt-5 rounded" data-ride="carousel" data-interval="false">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <div class="card " >
                        <div class="row">
                            <div class="col-sm-6 mx-1 my-5">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <img style="object-fit: fill; border-radius: 1.5rem;" src="/img/index.jpg" class=" float-left embed-responsive-item" alt="...">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="card-body">
                                    <div class="col-12 mb-4">
                                    <h5 class="card-title text-center">Wisata Edukasi</h5>
                                    </div>
                                    <div class="col-12">
                                    <p class="card-text"> Desa Wisata Jipangan disingkat Dewi Jipang adalah sebuah Dusun Rekreasi
                                        Jipangan yang dikenali dengan beragam kekayaan alam dan kerajinan
                                        kipasnya.
                                        Biasa disingkat DEWI JIPANG dusun ini berada +- 2,5 km di samping selatan
                                        Sentral kerajinan gerabah Kasongan.
                                        Secara geografis, Dusun Rekreasi Jipangan masuk ke daerah kelurahan
                                        Bangunjiwo, Kecamatan Kasihan, Kabupaten Bantul, Yogyakarta.
                                        Pencanangan Dusun Rekreasi Jipangan oleh GKR Hemas pada tanggal 15
                                        Maret 2014, adalah tonggak awalnya di bangunya dusun rekreasi ini jadi salah
                                        satunya ikon lawatan pariwisata di kabupaten Bantul, Ygyakarta.
                                        Sekarang ini banyak pelancong yang bertandang di Dusun Rekreasi Jipangan.
                                        Mereka terbagi dalam : beberapa anak TK, pelajar, Kampus, atau dari lembaga
                                        Pemerintahan/ swasta.
                                        Baik tamu yang dating dari Yogyakarta sendiri, luar kota bahkan juga di luar
                                        pulau Jawa.
                                        Di Dusun Rekreasi Jipangan, anda akan di sajikan bermacam jenis aktivitas
                                        aktivitas rekreasi yang tarik. Dan yang jelas, paket rekreasi yang kami pasarkan
                                        benar-benar dapat dijangkau.  </p>
                                    </div>
                                    <div class="col-12 my-5 text-center">
                                    <a href="{{route('wisedu')}}" role="button" class="btn btn-primary btn-lg">Cari Tahu Lebih Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="carousel-item">
                <div class="card " >
                        <div class="row">
                            <div class="col-sm-6 mx-1 my-5">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <img style="object-fit: fill; border-radius: 1.5rem;" src="/img/unnamed.jpg" class="float-left embed-responsive-item" alt="...">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="card-body">
                                    <div class="col-12 mb-4">
                                    <h5 class="card-title text-center">Kerajinan</h5>
                                    </div>
                                    <div class="col-12">
                                    <p class="card-text"> Produk utama dan unggulan dari kerajinan yang terletak di Dusun Jipangan ini adalah Kipas Bambu. Kipas dari Jipangan menggunakan bahan baku bambu sebagai kerangka kipas. Bambu yang digunakan adalah bambu wulung atau bambu hitam karena seratnya halus dan tidak banyak serabut.</p>
                                    </div>
                                    <div class="col-12 my-5 text-center">
                                    <a href="{{route('krjn')}}" role="button" class="btn btn-primary btn-lg">Cari Tahu Lebih Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="carousel-item">
                <div class="card" >
                        <div class="row">
                            <div class="col-sm-6 mx-1 my-5">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <img style="object-fit: fill; border-radius: 1.5rem;" src="/img/unnamed.jpg" class="float-left embed-responsive-item" alt="...">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="card-body">
                                    <div class="col-12 mb-4">
                                    <h5 class="card-title text-center">Tentang Jipangan</h5>
                                    </div>
                                    <div class="col-12">
                                    <p class="card-text"> Secara geografis, Dusun Jipangan merupakan daerah pegunungan dan hamparan persawahan. Dusun Jipangan berbatasan dengan Dusun Banyon, Pendowoharjo dan sungai Bedog.
Luas Dusun Jipangan adalah 71.489 Ha, dengan jumlah penduduk 1.680 jiwa, terbagi dalam 10 kelurahan dan terdiri dari 455 KK.
Menggarap lahan pertanian dan membuat kerajinan bambu merupakan sumber pendapatan utama bagi warga untuk kelangsungan hidupnya. Produk kipas bambu yang dikembangkan sejak tahun 1985 hingga sekarang ini telah berhasil mendobrak perekonomian dan menjadi sumber pendapatan utama masyarakat Jipangan.
Dusun Jipangan sendiri terletak di Desa Bangunjiwo, Kecamatan Kasihan, Kabupaten Bantul, Provinsi DIY.

Dusun Jipangan merupakan salah satu daerah tujuan wisata yang ingin meningkatkan pengelolaan lingkungan dan menjaga kualitas produknya. Dari segi pemasaran, produk kerajinan kipas bambu tidak hanya di pasar dalam negeri, tetapi sudah diekspor ke mancanegara.</p>
                                    </div>
                                    <div class="col-12 my-5 text-center">
                                    <a href="{{route('tentang')}}" role="button" class="btn btn-primary btn-lg">Cari Tahu Lebih Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container-fluid backgrcyan pb-5">
    <div class="col-12 py-5 ">
        <h1 class="section-heading text-center display-4 custitle finger font-weight-bolder">Lokasi</h1>
    </div>
    <div class="row justify-content-center ">
        <div class="col-sm-10">
            <div class="row">
                <div class=" container col-sm-6">
                    <p class="text-white">Sentra Kerajinan Kipas Bambu ini terletak di Dusun Jipangan. Untuk sampai kelokasi, kita dapat menggunakan berbagai ragam moda kendaraan, mulai dari sepeda motor roda dua, mobil hingga minibus. Akses jalan menuju Sentra Kerajinan relative mudah dan nyaman.
Dari perempatan Balai Desa Bangunjiwo, ambil arah keselatan, satu jalur dengan ObyekWisata Goa Selarong. Anda akan melewati ‘mbulak’ atau areal persawahan yang cukup besar di sebelah kiri anda. Tepat setelah itu, anda akan menjumpai perempatan, dengan SD Bibis di salah satu sudutnya. Ambil arah kiri atau timur, dan lanjutkan perjalanan mengikuti jalan aspal. Kira-kira 500 meter setelahnya, anda akan menemukan gapura yang menjadi pintu masuk Sentra Kerajinan Kipas Bambu Jipangan.  </p>
                </div>
            
                <div class=" container col-sm-6 ">
                    <img src="/img/capture.png" class="col-sm-12" style="border-radius: 1.5rem" alt="...">
                </div>
            </div>
        </div> 
    </div> 
</div>
@endsection
