@extends('layouts.publicapp')

@section('content')

<div class="col-12 cal py-5  ">
    <h1 class="section-heading text-center display-4 finger font-weight-bolder">Pemesanan</h1>
</div>

<div class="row justify-content-center ">
    <div class="col-sm-11" >
        <div class="card my-3" >
            <div class="row g-0">
                    <div class="col-sm-2 m-3 ml-4">
                        <h5 class="card-title">{{DB::table('homestay_detail')->where('id_hmsty', $home[0]->id_hmsty)->value('nama')}}</h5>
                        <img src="/storage/homestay/{{DB::table('homestay_detail')->where('id_hmsty', $home[0]->id_hmsty)->value('img')}}" class="imgpaket rounded" alt="...">
                    </div>
                    <div class="col-sm-4">
                        <div class="card-body">
                        <h5 class="card-title mt-4">Kapasitas :{{DB::table('homestay_detail')->where('id_hmsty', $home[0]->id_hmsty)->value('kapasitas')}}</h5>
                        <h5 class="card-title ">Pemilik :{{DB::table('homestay_detail')->where('id_hmsty', $home[0]->id_hmsty)->value('pemilik')}}</h5>
                        <h5 class="card-title ">Alamat :{{DB::table('homestay_detail')->where('id_hmsty', $home[0]->id_hmsty)->value('alamat')}}</h5>
                        </div>
                    </div>
                    <div class="col-5 mt-5">
                    <h5 class="card-title ">Deskripsi</h5>
                    <p style="color:black">{{DB::table('homestay_detail')->where('id_hmsty', $home[0]->id_hmsty)->value('desk')}}</p>
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
                <h5 class="mt-5 pt-5" style="color:black">Pemesanan:</h5>
                <a href="https://wa.me/{{DB::table('homestay_detail')->where('id_hmsty', $home[0]->id_hmsty)->value('whatsapp')}}" role="button" class="btn btn-success btn-lg mb-2">
                <h1><i class="bi bi-whatsapp "></i> <h4>Whatsapp</h4></h1> 
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
