@extends('layouts.app')

@section('content')
<div class="col-12 kipas py-5  ">
    <h1 class="section-heading text-center display-4 custitle finger font-weight-bolder">Penjadwalan</h1>
</div>
<div class="container-fluid backgrbrwn pb-5" >
    <div class="row justify-content-center ">
        <div class="col-sm-10">
            <h2 class="text-white">Wisata</h2>
        @foreach($wisata as $row)
            <div class="card my-3" >
                <div class="row g-0">
                <div class="col-sm-2 m-3 ml-4">
                    <img src="/storage/wisata/{{DB::table('wisata_detail')->where('id_wisata', $row['id'])->value('img')}}" class="imgpaket rounded" alt="...">
                </div>
                <div class="col-sm-7">
                    <div class="card-body">
                    <h5 class="card-title mt-5">{{DB::table('wisata_detail')->where('id_wisata', $row['id'])->value('nama')}}</h5>
                    </div>
                </div>
                <div class="col-2 mt-5 text-right">
                <a href="/paketlist/penjadwalan/{{$row['id']}}" role="button" class="btn btn-primary btn-lg">Lihat Detail</a>
                </div>
                </div>
            </div>
        @endforeach
        <h2 class="text-white">Homestay</h2>
        @foreach($homestay as $row)
            <div class="card my-3" >
                <div class="row g-0">
                <div class="col-sm-2 m-3 ml-4">
                    <img src="/storage/homestay/{{DB::table('homestay_detail')->where('id_hmsty', $row['id'])->value('img')}}" class="imgpaket rounded" alt="...">
                </div>
                <div class="col-sm-7">
                    <div class="card-body">
                    <h5 class="card-title mt-5">{{DB::table('homestay_detail')->where('id_hmsty', $row['id'])->value('nama')}}</h5>
                    </div>
                </div>
                <div class="col-2 mt-5 text-right">
                <a href="/paketlist/penjadwalanH/{{$row['id']}}" role="button" class="btn btn-primary btn-lg">Lihat Detail</a>
                </div>
                </div>
            </div>
        @endforeach

            
        </div>    
        
    </div>  
</div>
@endsection
