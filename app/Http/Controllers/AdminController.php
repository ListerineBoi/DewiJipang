<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UMKMDetail;
use App\Models\UMKM;
use App\Models\Katalog;
use App\Models\WisataDetail;
use App\Models\Wisata;
use App\Models\Homestay;
use App\Models\HomestayDetail;
use App\Models\linkD;
use App\Models\linkwisata;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Iumkm()
    {
        $umkm=UMKM::all();
        return view('Inputumkm',compact('umkm'));
       
    }
   
    public function input(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'pemilik' => 'required',
            'alamat' => 'required',
            'jam' => 'required',
            'spesialisasi' => 'required',
            'des' => 'required',
            'img' => 'required'      
        ]);
            $fullname = $request->file('img')->getClientOriginalName();
           
            $extn =$request->file('img')->getClientOriginalExtension();
            $final= $request->nama.'_'.time().'.'.$extn;

            $path = $request->file('img')->storeAs('public/umkm', $final);

        $UMKM= new UMKM;
        $UMKM->save();
        $idU=UMKM::orderBy('id', 'desc')->value('id');
        $UMKMDetail= new UMKMDetail([
            'id_umkm' => $idU,
            'nama' => $request->nama,
            'pemilik' => $request->pemilik,
            'alamat' => $request->alamat,
            'jam' => $request->jam,
            'spes' => $request->spesialisasi,
            'desk' => $request->des,
            'img' => $final
            
        ]);
        $UMKMDetail->save();
        return redirect()->route('Iumkm')->with('success','Data Added');
       
    }
    public function delete(Request $request)
    {
        $img=UMKMDetail::where('id_umkm', $request->get('id'))->value('img');
        $path='public/umkm/'.$img;
        Storage::delete($path);
        UMKMDetail::where('id_umkm', $request->get('id'))->delete();
        UMKM::where('id', $request->get('id'))->delete();
        return redirect()->route('Iumkm')->with('success','Data deleted');
        
    }
    public function edit(Request $request)
    {
        $detail=UMKMDetail::where('id_umkm','=',$request->get('id'))->get();
        return view('editumkm',compact('detail'));
        
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'pemilik' => 'required',
            'alamat' => 'required',
            'jam' => 'required',
            'spesialisasi' => 'required',
            'des' => 'required'     
        ]);
        if($request->file('img')!=null){
            $img=UMKMDetail::where('id_umkm', $request->get('id'))->value('img');
            $path='public/umkm/'.$img;
            Storage::delete($path);
            $fullname = $request->file('img')->getClientOriginalName();
           
            $extn =$request->file('img')->getClientOriginalExtension();
            $final= $request->nama.'_'.time().'.'.$extn;

            $path = $request->file('img')->storeAs('public/umkm', $final);
        $update=[
            'nama' => $request->nama,
            'pemilik' => $request->pemilik,
            'alamat' => $request->alamat,
            'jam' => $request->jam,
            'spes' => $request->spesialisasi,
            'desk' => $request->des,
            'img' => $final
            
        ];
        }else{
            $update=[
                'nama' => $request->nama,
                'pemilik' => $request->pemilik,
                'alamat' => $request->alamat,
                'jam' => $request->jam,
                'spes' => $request->spesialisasi,
                'desk' => $request->des
            ];
        }
        UMKMDetail::where('id_umkm', $request->get('id'))->update($update);
        return redirect()->route('Iumkm')->with('success','Data Edited');
       
    }
    ////////////////////////////
    public function Ikatalog($id)
    {
        $katalog=Katalog::where('id_umkm','=',$id)->get();
        $id1=$id;
        return view('Inputkatalog',compact('katalog','id1'));
       
    }
    public function inputK(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required',
            'desk' => 'required',
            'img' => 'required'      
        ]);
            $fullname = $request->file('img')->getClientOriginalName();
           
            $extn =$request->file('img')->getClientOriginalExtension();
            $final= $request->nama.'_'.time().'.'.$extn;

            $path = $request->file('img')->storeAs('public/katalog', $final);

    
        $katalog= new Katalog([
            'id_umkm' => $request->id,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'desk' => $request->desk,
            'img' => $final
            
        ]);
        $katalog->save();
        return redirect()->route('Ikatalog', ['id' => $request->id])->with('success','Data Added');
       
    }
    public function deletek(Request $request)
    {
        $img=Katalog::where('id', $request->get('id'))->value('img');
        $path='public/katalog/'.$img;
        Storage::delete($path);
        Katalog::where('id', $request->get('id'))->delete();
        return redirect()->route('Ikatalog',['id' => $request->idumkm])->with('success','Data deleted');
    }
    public function editk(Request $request)
    {
        $Katalog=Katalog::where('id','=',$request->get('id'))->get();
        return view('editkatalog',compact('Katalog'));
        
    }
    public function updatek(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required',
            'desk' => 'required'     
        ]);
        if($request->file('img')!=null){
            $img=Katalog::where('id', $request->get('id'))->value('img');
            $path='public/katalog/'.$img;
            Storage::delete($path);
            $fullname = $request->file('img')->getClientOriginalName();
           
            $extn =$request->file('img')->getClientOriginalExtension();
            $final= $request->nama.'_'.time().'.'.$extn;

            $path = $request->file('img')->storeAs('public/katalog', $final);
        $update=[
            'nama' => $request->nama,
            'harga' => $request->harga,
            'desk' => $request->desk,
            'img' => $final
            
        ];
        }else{
            $update=[
            'nama' => $request->nama,
            'harga' => $request->harga,
            'desk' => $request->desk
            ];
        }
        Katalog::where('id', $request->get('id'))->update($update);
        return redirect()->route('Ikatalog',['id' => $request->idumkm])->with('success','Data Edited');
       
    }
//////////////////////////////////////////////

    public function Iwisata()
    {
        $wisata=Wisata::all();
        return view('Inputwisata',compact('wisata'));
    
    }
    public function inputW(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'durasi' => 'required',
            'p_jawab' => 'required',
            'lokasi' => 'required',
            'jam' => 'required',
            'desk' => 'required',
            'whatsapp' => 'required',
            'harga' => 'required',
            'img' => 'required'      
        ]);
            $fullname = $request->file('img')->getClientOriginalName();
           
            $extn =$request->file('img')->getClientOriginalExtension();
            $final= $request->nama.'_'.time().'.'.$extn;

            $path = $request->file('img')->storeAs('public/wisata', $final);

        $Wisata= new Wisata;
        $Wisata->save();
        $idW=Wisata::orderBy('id', 'desc')->value('id');
        $WisataDetail= new WisataDetail([
            'id_wisata' => $idW,
            'nama' => $request->nama,
            'durasi' => $request->durasi,
            'p_jawab' => $request->p_jawab,
            'lokasi' => $request->lokasi,
            'jam' => $request->jam,
            'desk' => $request->desk,
            'whatsapp' => $request->whatsapp,
            'harga' => $request->harga,
            'img' => $final
            
        ]);
        $WisataDetail->save();
        return redirect()->route('Iwisata')->with('success','Data Added');
       
    }
    public function deleteW(Request $request)
    {
        $img=WisataDetail::where('id_wisata', $request->get('id'))->value('img');
        $path='public/wisata/'.$img;
        Storage::delete($path);
        WisataDetail::where('id_wisata', $request->get('id'))->delete();
        Wisata::where('id', $request->get('id'))->delete();
        return redirect()->route('Iwisata')->with('success','Data deleted');
    }
    public function editW(Request $request)
    {
        $detail=WisataDetail::where('id_wisata','=',$request->get('id'))->get();
        return view('editwisata',compact('detail'));
        
    }
    public function updateW(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'durasi' => 'required',
            'p_jawab' => 'required',
            'lokasi' => 'required',
            'jam' => 'required',
            'desk' => 'required',
            'whatsapp' => 'required',
            'harga' => 'required'      
        ]);
        if($request->file('img')!=null){
            $img=WisataDetail::where('id_wisata', $request->get('id'))->value('img');
            $path='public/wisata/'.$img;
            Storage::delete($path);
            $fullname = $request->file('img')->getClientOriginalName();
           
            $extn =$request->file('img')->getClientOriginalExtension();
            $final= $request->nama.'_'.time().'.'.$extn;

            $path = $request->file('img')->storeAs('public/wisata', $final);
        $update=[
            'nama' => $request->nama,
            'durasi' => $request->durasi,
            'p_jawab' => $request->p_jawab,
            'lokasi' => $request->lokasi,
            'jam' => $request->jam,
            'desk' => $request->desk,
            'whatsapp' => $request->whatsapp,
            'harga' => $request->harga,
            'img' => $final
            
        ];
        }else{
            $update=[
                'nama' => $request->nama,
                'durasi' => $request->durasi,
                'p_jawab' => $request->p_jawab,
                'lokasi' => $request->lokasi,
                'jam' => $request->jam,
                'desk' => $request->desk,
                'whatsapp' => $request->whatsapp,
                'harga' => $request->harga
            ];
        }
        WisataDetail::where('id_wisata', $request->get('id'))->update($update);
        return redirect()->route('Iwisata')->with('success','Data Edited');
       
    }

    public function linkadd()
    {
        $linkD=linkD::all();
        return view('linkadd',compact('linkD'));
       
    }
    public function inputaddL(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'img' => 'required'      
        ]);
            $fullname = $request->file('img')->getClientOriginalName();
           
            $extn =$request->file('img')->getClientOriginalExtension();
            $final= $request->nama.'_'.time().'.'.$extn;

            $path = $request->file('img')->storeAs('public/link', $final);

    
        $linkD= new linkD([
            'nama' => $request->nama,
            'img' => $final
            
        ]);
        $linkD->save();
        return redirect()->route('linkadd')->with('success','Data Added');
       
    }
    public function linkdeleteL(Request $request)
    {
        $path='public/link/'.$request->img;
        Storage::delete($path);
        linkD::where('id', $request->get('id'))->delete();
        return redirect()->route('linkadd')->with('success','Data deleted');
        //return $path;
    }
    ///////////////
    public function Ilink($id)
    {
        $linkwisata=linkwisata::where('id_detail','=',$id)->get();
        $linkD=linkD::all();
        $id1=$id;
        return view('linkwisata',compact('linkwisata','id1','linkD'));
       
    }

    public function inputL(Request $request)
    {
        $this->validate($request, [
            'id_link' => 'required',
            'link' => 'required',
       
        ]);

    
        $linkwisata= new linkwisata([
            'id_link' => $request->id_link,
            'id_detail' => $request->id_detail,
            'link' => $request->link
            
        ]);
        $linkwisata->save();
        return redirect()->route('Ilink', ['id' => $request->id_detail])->with('success','Data Added');
       
    }
    public function deleteL(Request $request)
    {
        
        linkwisata::where('id', $request->get('id'))->delete();
        return redirect()->route('Ilink',['id' => $request->idumkm])->with('success','Data deleted');
    }

    //////////////
    public function Ihmsty()
    {
        $hmsty=Homestay::all();
        return view('Inputhmsty',compact('hmsty'));
    
    }
    public function inputH(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'pemilik' => 'required',
            'alamat' => 'required',
            'kapasitas' => 'required',
            'desk' => 'required',
            'whatsapp' => 'required',
            'img' => 'required'      
        ]);
            $fullname = $request->file('img')->getClientOriginalName();
           
            $extn =$request->file('img')->getClientOriginalExtension();
            $final= $request->nama.'_'.time().'.'.$extn;

            $path = $request->file('img')->storeAs('public/homestay', $final);

        $Homestay= new Homestay;
        $Homestay->save();
        $idW=Homestay::orderBy('id', 'desc')->value('id');
        $HomestayDetail= new HomestayDetail([
            'id_hmsty' => $idW,
            'nama' => $request->nama,
            'pemilik' => $request->pemilik,
            'alamat' => $request->alamat,
            'kapasitas' => $request->kapasitas,
            'jam' => $request->jam,
            'desk' => $request->desk,
            'whatsapp' => $request->whatsapp,
            'img' => $final
            
        ]);
        $HomestayDetail->save();
        return redirect()->route('Ihmsty')->with('success','Data Added');
       
    }
    public function deleteH(Request $request)
    {
        $img=HomestayDetail::where('id_hmsty', $request->get('id'))->value('img');
        $path='public/homestay/'.$img;
        Storage::delete($path);
        HomestayDetail::where('id_hmsty', $request->get('id'))->delete();
        Homestay::where('id', $request->get('id'))->delete();
        return redirect()->route('Ihmsty')->with('success','Data deleted');
    }
    public function editH(Request $request)
    {
        $detail=HomestayDetail::where('id_hmsty','=',$request->get('id'))->get();
        return view('edithmsty',compact('detail'));
        
    }
    public function updateH(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'pemilik' => 'required',
            'alamat' => 'required',
            'kapasitas' => 'required',
            'desk' => 'required',
            'whatsapp' => 'required',
               
        ]);
        if($request->file('img')!=null){
            $img=HomestayDetail::where('id_hmsty', $request->get('id'))->value('img');
            $path='public/homestay/'.$img;
            Storage::delete($path);
            $fullname = $request->file('img')->getClientOriginalName();
           
            $extn =$request->file('img')->getClientOriginalExtension();
            $final= $request->nama.'_'.time().'.'.$extn;

            $path = $request->file('img')->storeAs('public/homestay', $final);
        $update=[
         
            'nama' => $request->nama,
            'pemilik' => $request->pemilik,
            'alamat' => $request->alamat,
            'kapasitas' => $request->kapasitas,
            'desk' => $request->desk,
            'whatsapp' => $request->whatsapp,
            'img' => $final
        ];
        }else{
            $update=[
            
                'nama' => $request->nama,
                'pemilik' => $request->pemilik,
                'alamat' => $request->alamat,
                'kapasitas' => $request->kapasitas,
                'desk' => $request->desk,
                'whatsapp' => $request->whatsapp,
            ];
        }
        HomestayDetail::where('id_hmsty', $request->get('id'))->update($update);
        return redirect()->route('Ihmsty')->with('success','Data Edited');
       
    }
    
}
