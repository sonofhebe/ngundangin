<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pesan;

class NgundanginController extends Controller
{
    public function index(){
        return view('index');
    }

    public function ngundangin($link){
        $id = DB::table('user')->where('link', $link)->first();
        if(!isset($id)){
            return view('404');
        } else {
            $resepsi = DB::table('resepsi')->where('iduser', $id->iduser)->get();
            $sambutan = DB::table('sambutan')->where('iduser', $id->iduser)->first();
            $cerita = DB::table('cerita')->where('iduser', $id->iduser)->get();
            $adat = DB::table('adat')->where('iduser', $id->iduser)->first();
            $galery = DB::table('galery')->where('iduser', $id->iduser)->get();
            $lagu = DB::table('lagu')->where('iduser', $id->iduser)->first();
            return view('undangan', [
                'tamu' => null,
                'idu' => $id->iduser,
                'resepsi' => $resepsi,
                'sambutan' => $sambutan,
                'cerita' => $cerita,
                'adat' => $adat,
                'galery' => $galery,
                'lagu' => $lagu,
            ]);
        }
    }
    
    public function ngundangin2($link, $tamu){
        $id = DB::table('user')->where('link', $link)->first();
        $tamu = str_replace('_', ' ', $tamu);
        if(!isset($id)){
            return view('404');
        } else {
            $resepsi = DB::table('resepsi')->where('iduser', $id->iduser)->get();
            $sambutan = DB::table('sambutan')->where('iduser', $id->iduser)->first();
            $cerita = DB::table('cerita')->where('iduser', $id->iduser)->get();
            $adat = DB::table('adat')->where('iduser', $id->iduser)->first();
            $galery = DB::table('galery')->where('iduser', $id->iduser)->get();
            $lagu = DB::table('lagu')->where('iduser', $id->iduser)->first();
            return view('undangan', [
                'tamu' => $tamu,
                'idu' => $id->iduser,
                'resepsi' => $resepsi,
                'sambutan' => $sambutan,
                'cerita' => $cerita,
                'adat' => $adat,
                'galery' => $galery,
                'lagu' => $lagu,
            ]);
        }
    }

    public function pesan($id){
        $pesan = DB::table('pesan')->where('iduser', $id)->orderByDesc('idPesan')->get();
        return view('pesan', ['pesan' => $pesan]);
    }
    public function pesanin(Request $request, $id){
        $pesan = new Pesan([
            'iduser' => $id,
            'namaPengirim' => $request->nama,
            'isi' => $request->isi
        ]);
        $pesan->save();
        return back();
    }
    
}
