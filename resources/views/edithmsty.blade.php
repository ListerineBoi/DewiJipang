@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-12 bg-success py-5 mb-5 ">
<h1 class="section-heading text-center font-weight-bolder">Homestay</h1>
</div>     
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> <strong> Edit Homestay </strong> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                            </ul>
                            </div>
                    @endif

                    @if(\Session::has('success'))
                        <div class="alert alert-success">
                            <p>{{\Session::get('success')}}</p>
                        </div>
                    @endif

                    @if(\Session::has('Forbidden'))
                        <div class="alert alert-danger">
                            <p>{{\Session::get('Forbidden')}}</p>
                        </div>
                    @endif

                    <form method="post" action="{{route('updateH')}}" enctype='multipart/form-data'>
                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

                    <input type="hidden" class="form-control" name="id" value="{{$detail[0]->id_hmsty}}">

                            <div class="form-group">
                                <label for="formGroupExampleInput">Nama Wisata</label>
                                <input type="text" class="form-control" name="nama" value="{{$detail[0]->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nama Pemiliki</label>
                                <input type="text" class="form-control" name="pemilik" value="{{$detail[0]->pemilik}}">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{$detail[0]->alamat}}">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Kapasitas</label>
                                <input type="number" class="form-control" name="kapasitas" value="{{$detail[0]->kapasitas}}">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">NO Whatsapp</label>
                                <input type="text" class="form-control" name="whatsapp" value="{{$detail[0]->whatsapp}}">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput"> Deskripsi </label>
                                <textarea class="form-control" name="desk" rows="3">{{$detail[0]->desk}}</textarea>
                            </div>
                           
                            <div class="form-group">
                                <label for="file"> IMG </label>
                                    <div class="custom-file">
                                        <input type="file" class="form-control-file" id="file" name="img">
                                        <label class="form-control-file" for="file"></label>
                                    </div>
                            </div>
                   
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
