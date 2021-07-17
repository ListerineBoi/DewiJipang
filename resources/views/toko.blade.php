@extends('layouts.publicapp')

@section('content')
<div class="col-12 kayu py-5  ">
    <h1 class="section-heading text-center display-4 finger font-weight-bolder">{{DB::table('umkm_detail')->where('id_umkm', $id1)->value('nama')}}</h1>
</div>

<div class="row justify-content-center ">
    <div class="col-sm-11" >
        <div class="card my-3" >
                <div class="row g-0">
                    <div class="col-sm-2 m-3 ml-4">
                        <h5 class="card-title">{{DB::table('umkm_detail')->where('id_umkm', $id1)->value('nama')}}</h5>
                        <img src="/storage/umkm/{{DB::table('umkm_detail')->where('id_umkm', $id1)->value('img')}}" class="imgpaket rounded" alt="...">
                    </div>
                    <div class="col-sm-4">
                        <div class="card-body">
                        <h5 class="card-title mt-4">Alamat :{{DB::table('umkm_detail')->where('id_umkm', $id1)->value('alamat')}}</h5>
                        <h5 class="card-title ">Pemilik:{{DB::table('umkm_detail')->where('id_umkm', $id1)->value('pemilik')}}</h5>
                        <h5 class="card-title ">Spesialisasi :{{DB::table('umkm_detail')->where('id_umkm', $id1)->value('spes')}}</h5>
                        <h5 class="card-title ">Jam Buka :{{DB::table('umkm_detail')->where('id_umkm', $id1)->value('jam')}}</h5>
                        </div>
                    </div>
                    <div class="col-5 mt-5">
                    <h5 class="card-title ">Deskripsi</h5>
                    <p>{{DB::table('umkm_detail')->where('id_umkm', $id1)->value('desk')}}</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-sm-2 m-3 ml-4">
                        <h5 class="card-title text-right">Kontak</h5>
                    </div>
                    <div class="col-sm-7">
                    @foreach($linkwisata as $row)
                    <a href="{{ $row['link']}}" role="button" class="btn btn-primary btn-lg mb-2">
                    <img src="/storage/link/{{DB::table('link')->where('id', $row['id_link'])->value('img')}}" width="100rem" height="70rem" class="rounded" alt="..."> Lihat Detail
                    </a>
                    @endforeach
                    </div>
                </div>
        </div>
    </div>
    <div class="col-sm-9" >
    <h5 class="finger pt-3" >Katalog</h5>
    @foreach($katalog as $row)
    <div class="card my-3" >
                <div class="row g-0">
                <div class="col-sm-2 m-3 ml-4">
                    <img src="/storage/katalog/{{DB::table('katalog')->where('id', $row['id'])->value('img')}}" class="imgpaket rounded" alt="...">
                </div>
                <div class="col-sm-7">
                    <div class="card-body">
                    <h5 class="card-title mt-2">{{$row['nama']}}</h5>
                    <h5 class="card-title">{{$row['harga']}}</h5>
                    </div>
                </div>
                </div>
            </div>
    @endforeach
    </div>

</div>
@endsection
