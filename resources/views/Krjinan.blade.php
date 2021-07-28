@extends('layouts.publicapp')

@section('content')
<div class="col-12 kipas py-5  ">
    <h1 class="section-heading text-center display-4 custitle finger font-weight-bolder">Kerajinan</h1>
</div>
<div class="container-fluid backgrbrwn pb-5" >
    <div class="row justify-content-center ">
        <div class="col-sm-10" style="color: white">
            <h2 class="finger pt-3" >Asal Usul</h2>
            <p>
            Pelopor kerajinan kipas bambu di Jipangan adalah Bapak Alifa. Sebenarnya, kerajinan ini bukanlah asli dari PedukuhanJ ipangan, melainkan dibawa oleh Pak Alifa dari daerah Pendowoharjo, yang lokasinya takjauh dari Pedukuhan Jipangan. Akan tetapi, seiring perkembangan jaman, Kerajinan KipasBambu di Jipangan jauh lebih pesat berkembang dari pada di daerah aslinya, yaitu Ndowo.
Mulai sekitar tahun 1987, kerajinan kipas bamboo mulai dibawa & diproduksi di Dusun Jipangan. Dari awalnya yang hanya satu pengrajin, yaitu Bpk. Alifa sendiri, sekarang telah ada lebih dari 50 pengrajin yang menyerap lebih dari 457 tenaga pekerja untuk menggerakkan Sentra Kerajinan Kipas Bambu di Pedukuhan Jipangan ini.
Saat ini telah berdiri sebuah kelompok pengrajin kipas dari Jipangan dengan nama “Mas Panji” yang merupakan singkatan dari Masyarakat Pengrajin Jipangan dengan kantor sekretariat yang terletak di RT 04. Mas Panji didirikan bertujuan sebagai sarana komunikasi antara pengrajin dalam membangun dan mengembangkan usaha kerajinan di Dusun Jipangan. Usaha kerajinan kipas bamboo ini telah berhasil mengangkat perekonomian masyarakat Jipangan khususnya setelah hancur oleh gempa pada tahun 2006 silam.
            </p>
        </div>
        <div class="col-sm-10">
            
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    @foreach($car as $row)
                    <li data-target="#carouselExampleCaptions" data-slide-to="{{$loop->iteration}}" class="@if($loop->iteration==1)active @endif"></li>
                    @endforeach
                    </ol>
                    <div class="carousel-inner">
                    @foreach($car as $row)
                        <div class="carousel-item @if($loop->iteration==1)active @endif">
                            <img src="/storage/carousel/{{$row['img']}}" class="d-block w-100 " alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>{{$row['title']}}</h5>
                            <p>{{$row['desk']}}</p>
                            </div>
                        </div>
                    @endforeach
                        
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
            <a href="{{route('umkm')}}" role="button" class="btn btn-primary btn-block btn-lg"><h1>Daftar Penjual Kerajinan<i class="bi bi-arrow-right-short"></i></h1> </a>
            </div>
        </div>
    </div>
</div>
@endsection
