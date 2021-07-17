@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-12 bg-success py-5 mb-5 ">
<h1 class="section-heading text-center font-weight-bolder">Link Template</h1>
</div>     
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"> <strong> Input Link Template </strong> </div>

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

                    <form method="post" action="{{route('inputL')}}" enctype='multipart/form-data'>
                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

                    <input type="hidden" name="id_detail" value="{{$id1}}">
                    <div class="form-group">
                                <label> Jenis Item </label>
                                <select name ="id_link" class="custom-select">
                                @foreach($linkD as $row)
                                <option value="{{$row['id']}}">{{$row['nama']}}</option>
                                @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="formGroupExampleInput">link/nomor telepon</label>
                                <input type="text" class="form-control" name="link">
                            </div>
                           
                   
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"> <strong> Daftar Link </strong> </div>

                    <div class="card-body"> 

                        <div class="container">
                            <table class="table table-hover" style="text-align: center;">
                            
                                <tr>
                                    <th> No </th>
                                    <th> Nama </th>
                                    <th> link </th>
                                    <th> action </th>
                                </tr>
                                @foreach($linkwisata as $row)
                               <tr>
                                    <th>{{$loop->iteration}} </th>
                                    <th>{{$row['id_link']}} </th>
                                    <th>{{$row['link']}}  </th>
                               
            
                                <form method="post" action="{{route('deleteL')}}">
                                        @csrf
                                            
                                            <div class="form-group">
                                              <input type="hidden" name="id" class="form-control" value="{{$row['id']}}">
                                              <input type="hidden" name="idumkm" class="form-control" value="{{$id1}}">
                                            </div>
                                                                    
                                            <th><button type="submit" class="btn btn-danger">Delete</button> </th>

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
