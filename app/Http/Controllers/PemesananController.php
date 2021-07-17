<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WisataDetail;
use App\Models\Wisata;
use App\Models\Jadwal;

class PemesananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function paketlist()
    {
        $wisata=Wisata::all();
        return view('pesanwisatalist',compact('wisata'));

    }
    
    public function index($id)
    {
        $wisata=WisataDetail::where('id_wisata','=',$id)->get();
        $jadwal=Jadwal::where('id_wisata','=',$id)->get();
        return view('penjadwalan',compact('wisata','jadwal'));
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
}
