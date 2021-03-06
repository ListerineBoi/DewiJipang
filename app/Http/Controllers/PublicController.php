<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UMKMDetail;
use App\Models\UMKM;
use App\Models\Katalog;
use App\Models\WisataDetail;
use App\Models\Wisata;
use App\Models\Jadwal;
use App\Models\HomestayDetail;
use App\Models\JadwalH;
use App\Models\Homestay;
use App\Models\linkwisata;
use App\Models\Carousel;
class PublicController extends Controller
{
    public function home()
    {
        return view('publichome');
    }
    public function wisedu()
    {
        $car=Carousel::where('type','=',2)->get();
        return view('wisedu',compact('car'));
    }
    public function paket()
    {
        $wisata=Wisata::all();
        return view('pwisedu',compact('wisata'));

    }
    public function krjn()
    {
        $car=Carousel::where('type','=',3)->get();
        return view('Krjinan',compact('car'));
    }
    public function tentang()
    {
        return view('tentang');
    }
    public function umkm()
    {
        $umkm=UMKM::all();
        return view('umkm',compact('umkm'));
    }
    public function hmsty()
    {
        $homestay=Homestay::all();
        return view('homestay',compact('homestay'));
    }
    public function Dhmsty($id)
    {
        $jadwal=JadwalH::where('id_hmsty','=',$id)->get();
        $home=HomestayDetail::where('id_hmsty','=',$id)->get();
        $car=Carousel::where('id_hmsty','=',$id)->get();
        return view('Dhomestay',compact('home','jadwal','car'));
    }
    public function toko($id)
    {
        $katalog=Katalog::where('id_umkm','=',$id)->get();
        $id1=$id;
        $linkwisata=linkwisata::where('id_detail','=',$id)->get();
        return view('toko',compact('katalog','id1','linkwisata'));
    }

    public function index($id)
    {
        $jadwal=Jadwal::where('id_wisata','=',$id)->get();
        $wisata=WisataDetail::where('id_wisata','=',$id)->get();
        return view('pemesanan',compact('wisata','jadwal'));
    }
}
