@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-12 bg-success py-5 mb-5 ">
<h1 class="section-heading text-center font-weight-bolder">Carousel</h1>
</div>     
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"> <strong> Input Carousel </strong> </div>

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

                    <form method="post" action="{{route('savecar')}}" enctype='multipart/form-data'>
                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                    <input type="hidden" name="id" value="{{$id}}">
                    <input type="hidden" name="type" value="{{$type}}">
                        

                            <div class="form-group">
                                <label for="formGroupExampleInput">Title</label>
                                <input type="text" class="form-control" name="title">
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
                <div class="card-header"> <strong> Daftar Carousel </strong> </div>

                    <div class="card-body"> 

                        <div class="container">
                            <table class="table table-hover" style="text-align: center;">
                            
                                <tr>
                                    <th> No </th>
                                    <th> title </th>
                                    <th> img </th>
                                    <th> action </th>
                                </tr>
                                @foreach($car as $row)
                               <tr>
                                    <th>{{$loop->iteration}} </th>
                                    <th>{{$row['title']}} </th>
                                    <th>{{$row['img']}}  </th>
                               
            
                                <form method="post" action="{{route('deletecar')}}">
                                        @csrf
                                            
                                        
                                              <input type="hidden" name="id" class="form-control" value="{{$row['id']}}">
                                              <input type="hidden" name="id_hmsty" class="form-control" value="{{$row['id_hmsty']}}">
                                              <input type="hidden" name="img" class="form-control" value="{{$row['img']}}">
                                              <input type="hidden" name="type" class="form-control" value="{{$type}}">
                            
                                                                    
                                            <th><button type="submit" class="btn btn-danger mb-1">Delete</button> 

                                </form>
                                <form method="post" action="{{route('editcar')}}">
                                        @csrf
                                            
                                        
                                              <input type="hidden" name="id" class="form-control" value="{{$row['id']}}">
                                              <input type="hidden" name="id_hmsty" class="form-control" value="{{$row['id_hmsty']}}">
                                              <input type="hidden" name="img" class="form-control" value="{{$row['img']}}">
                                              <input type="hidden" name="type" class="form-control" value="{{$type}}">
                            
                                                                    
                                            <button type="submit" class="btn btn-primary">Edit</button></th>

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
