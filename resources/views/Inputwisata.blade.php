@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-12 bg-success py-5 mb-5 ">
<h1 class="section-heading text-center font-weight-bolder">Wisata</h1>
</div>     
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"> <strong> Input Wisata </strong> </div>

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

                    <form method="post" action="{{route('inputW')}}" enctype='multipart/form-data'>
                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

                        

                            <div class="form-group">
                                <label for="formGroupExampleInput">Nama Wisata</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nama Penanggung Jawab</label>
                                <input type="text" class="form-control" name="p_jawab">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Lokasi</label>
                                <input type="text" class="form-control" name="lokasi" >
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Durasi</label>
                                <input type="text" class="form-control" name="durasi" >
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Jam Buka</label>
                                <input type="text" class="form-control" name="jam" >
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Harga</label>
                                <input type="text" class="form-control" name="harga" >
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">NO Whatsapp</label>
                                <input type="text" class="form-control" name="whatsapp" >
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput"> Deskripsi </label>
                                <textarea class="form-control" name="desk" rows="3"></textarea>
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"> <strong> Daftar Menu </strong> </div>

                    <div class="card-body"> 

                        <div class="container">
                            <table class="table table-hover" style="text-align: center;">
                            
                                <tr>
                                    <th> No </th>
                                    <th> Nama </th>
                                    <th> Penanggung Jawab </th>
                                    <th> action </th>
                                </tr>
                                @foreach($wisata as $row)
                               <tr>
                                    <th>{{$loop->iteration}} </th>
                                    <th>{{DB::table('wisata_detail')->where('id_wisata', $row['id'])->value('nama')}} </th>
                                    <th>{{DB::table('wisata_detail')->where('id_wisata', $row['id'])->value('p_jawab')}} </th>
                               
                               <form method="post" action="{{route('editW')}}">
                                        @csrf
                                            
                                            <div class="form-group">
                                                <input type="hidden" name="id" class="form-control" value="{{$row['id']}}"> 
                                            </div>
                                                                    
                                            <td> <button type="submit" class="btn btn-success">Edit</button>

                                </form>
                                <form method="post" action="{{route('deleteW')}}">
                                        @csrf
                                            
                                            <div class="form-group">
                                                <input type="hidden" name="id" class="form-control" value="{{$row['id']}}"> 
                                            </div>
                                                                    
                                            <button type="submit" class="btn btn-danger">Delete</button>

                                </form>
                                            
                                            
                     
                                                                    
                                        

                                
                               </tr>
                          @endforeach
                            </table>
                        </div>
                    </div>
             </div>
        </div>
    </div>
</div>
@endsection
