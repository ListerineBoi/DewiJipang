<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WisataDetail;
use App\Models\Wisata;
use App\Models\Jadwal;
use App\Models\JadwalH;
use App\Models\Homestay;
use App\Models\HomestayDetail;

class PemesananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function paketlist()
    {
        $wisata=Wisata::all();
        $homestay=Homestay::all();
        return view('pesanwisatalist',compact('wisata','homestay'));

    }
    
    public function index($id)
    {
        $wisata=WisataDetail::where('id_wisata','=',$id)->get();
        $jadwal=Jadwal::where('id_wisata','=',$id)->get();
        return view('penjadwalan',compact('wisata','jadwal'));
        //return $jadwal;
    }
    public function indexH($id)
    {
        $homestay=HomestayDetail::where('id_hmsty','=',$id)->get();
        $jadwal=JadwalH::where('id_hmsty','=',$id)->get();
        return view('penjadwalanH',compact('homestay','jadwal'));
        //return $jadwal;
    }
    public function inputJ(Request $request)
    {
       
        $this->validate($request, [
            'start' => 'required',
            'title' => 'required'    
        ]);
        $Jadwal= new Jadwal([
            'id_wisata'=> $request->id,
            'start' => $request->start,
            'title' => $request->title
            
        ]);
        $Jadwal->save();
        return redirect()->route('penjadwalan',['id' => $request->id])->with('success','Data Added');

    }
    public function deleteJ(Request $request)
    {
        $this->validate($request, [
            'start' => 'required'  
        ]);
        Jadwal::where('id_wisata', $request->get('id')) ->where('start', $request->get('start'))->delete();
        return redirect()->route('penjadwalan',['id' => $request->id])->with('success','Data deleted');
    }

    public function inputJH(Request $request)
    {
       
        $this->validate($request, [
            'start' => 'required',
            'title' => 'required'    
        ]);
        $Jadwal= new JadwalH([
            'id_hmsty'=> $request->id,
            'start' => $request->start,
            'title' => $request->title
            
        ]);
        $Jadwal->save();
        return redirect()->route('penjadwalanH',['id' => $request->id])->with('success','Data Added');

    }
    public function deleteJH(Request $request)
    {
        $this->validate($request, [
            'start' => 'required'  
        ]);
        JadwalH::where('id_hmsty', $request->get('id')) ->where('start', $request->get('start'))->delete();
        return redirect()->route('penjadwalanH',['id' => $request->id])->with('success','Data deleted');
    }
}
