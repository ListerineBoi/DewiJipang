@extends('layouts.publicapp')

@section('content')
<div class="col-12 kipas py-5  ">
    <h1 class="section-heading text-center display-4 custitle finger font-weight-bolder">Wisata Edukasi</h1>
</div>
<div class="container-fluid backgrbrwn pb-5" >
    <div class="row justify-content-center ">
        <div class="col-sm-10" style="color: white">
            <h2 class="finger pt-3" >Desa Wisata Jipangan</h2>
            <p>
            Desa Wisata Jipangan disingkat Dewi Jipang adalah sebuah Dusun Rekreasi
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
                                        benar-benar dapat dijangkau. 
            </p>
        </div>
        <div class="col-sm-10">
            
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="/img/Photo0525[1].jpg" class="d-block w-100 " alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                        <div class="carousel-item">
                        <img src="/img/index.jpg" class="d-block w-100 " alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                        <div class="carousel-item">
                            <img src="/img/imagess.jpg" class="d-block w-100 " alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-12 my-5 text-right">
            <a href="{{route('paket')}}" role="button" class="btn btn-primary btn-block btn-lg"><h1>Paket Wisata <i class="bi bi-arrow-right-short"></i></h1> </a>
            </div>
        </div>
    </div>
</div>
@endsection
