@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-12 bg-success py-5 mb-5 ">
<h1 class="section-heading text-center font-weight-bolder">Edit Katalog</h1>
</div>     
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> <strong> Edit Katalog </strong> </div>

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

                    <form method="post" action="{{route('updatek')}}" enctype='multipart/form-data'>
                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

                        
                            <input type="hidden" class="form-control" name="id" value="{{$Katalog[0]->id}}">
                            <input type="hidden" class="form-control" name="idumkm" value="{{$Katalog[0]->id_umkm}}">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{$Katalog[0]->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Harga</label>
                                <input type="number" class="form-control" name="harga" value="{{$Katalog[0]->harga}}">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Deskripsi</label>
                                <input type="text" class="form-control" name="desk" value="{{$Katalog[0]->desk}}">
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
