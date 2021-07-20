@extends('layouts.app')

@section('content')

<div class="col-12 cal py-5  ">
    <h1 class="section-heading text-center display-4 finger font-weight-bolder">Penjadwalan</h1>
</div>

<div class="row justify-content-center ">
    <div class="col-sm-11" >
        <div class="card my-3" >
            <div class="row g-0">
                    <div class="col-sm-2 m-3 ml-4">
                        <h5 class="card-title">{{DB::table('homestay_detail')->where('id_hmsty', $homestay[0]->id_hmsty)->value('nama')}}</h5>
                        <img src="/storage/homestay/{{DB::table('homestay_detail')->where('id_hmsty', $homestay[0]->id_hmsty)->value('img')}}" class="imgpaket rounded" alt="...">
                    </div>
                    <div class="col-sm-4">
                        <div class="card-body">
                        <h5 class="card-title mt-4">Kapasitas :{{DB::table('homestay_detail')->where('id_hmsty', $homestay[0]->id_hmsty)->value('kapasitas')}}</h5>
                        <h5 class="card-title ">Pemilik :{{DB::table('homestay_detail')->where('id_hmsty', $homestay[0]->id_hmsty)->value('pemilik')}}</h5>
                        <h5 class="card-title ">Alamat :{{DB::table('homestay_detail')->where('id_hmsty', $homestay[0]->id_hmsty)->value('alamat')}}</h5>
                        </div>
                    </div>
                    <div class="col-5 mt-5">
                    <h5 class="card-title ">Deskripsi</h5>
                    <p style="color:black">{{DB::table('homestay_detail')->where('id_hmsty', $homestay[0]->id_hmsty)->value('desk')}}</p>
                    </div>
            </div>
            
        </div>
        
    </div>
    <div class="col-sm-11" >
    <div class="row">
    <div class="container col-sm-6 mx-2">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('fullcalendar/packages/core/main.css') }}" rel="stylesheet">
        <link href="{{ asset('fullcalendar/packages/daygrid/main.css') }}" rel="stylesheet">
        <div class="content col-sm-12">
        <div id='calendar'></div>
        </div>
    
    

        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('fullcalendar/packages/core/main.js') }}"></script>
        <script src="{{ asset('fullcalendar/packages/interaction/main.js') }}"></script>
        <script src="{{ asset('fullcalendar/packages/daygrid/main.js')}}"></script>

                <script>
                document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');

                var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'interaction', 'dayGrid' ],
                defaultDate: '2021-07-01',
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [
                    <?php
                 foreach($jadwal as $row){
                    echo "{"."title: "."'".$row['title']."'".",
                        start: "."'".$row['start']."'"."},";   
                }
                ?>
                ]
                });

                calendar.render();
            });

                </script>

                <script src="{{ asset('js/main.js')}}"></script>        
                

        


            </div>
            <div class="container col-sm-4 py-5 mt-5">
            
            <div class="card">
                <div class="card-header"> <strong> Input Data </strong> </div>

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

                    <form method="post" action="{{route('inputJH')}}" enctype='multipart/form-data'>
                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

                        
                            <input type="hidden" class="form-control" name="id" value="{{$homestay[0]->id_hmsty}}"> 
                            <div class="form-group">
                                <label for="formGroupExampleInput">Title</label>
                                <input type="text" class="form-control" name="title"> 
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Tanggal</label>
                                <input type="date" class="form-control" name="start"> 
                            </div>
                            
                   
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                    
                </div>
                
            </div>
            <div class="card mt-2">
                <div class="card-header"> <strong> Hapus Data </strong> </div>

                <div class="card-body">
                    

                    <form method="post" action="{{route('deleteJH')}}" enctype='multipart/form-data'>
                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

                        
                            <input type="hidden" class="form-control" name="id" value="{{$homestay[0]->id_hmsty}}"> 
                            
                            <div class="form-group">
                                <label for="formGroupExampleInput">Tanggal</label>
                                <input type="date" class="form-control" name="start"> 
                            </div>
                            
                   
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                    
                </div>
                
            </div>
        
                
            </div>
        </div>
    </div>
</div>
@endsection
