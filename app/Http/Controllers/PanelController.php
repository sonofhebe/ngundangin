<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Resepsi;
use App\Models\Sambutan;
use App\Models\Ceremonies;
use App\Models\Cerita;
use App\Models\Galeri;
use App\Models\Pesan;
use App\Models\Lagu;

class PanelController extends Controller
{
    /**
     *
     * Dashboard
     *
     */
    public function index(){
        return view('panel.index');
    }
    
    /**
     *
     * Resepsi
     *
     */
    public function resepsi(Request $request){
        $resepsi = DB::table('resepsi')->where('iduser', $request->session()->get('id'))->first();
        $user = DB::table('user')->where('iduser', $request->session()->get('id'))->first();
        return view('panel.resepsi', [
            'resepsi' => $resepsi,
            'user' => $user,
        ]);
        // dd($resepsi);
    }
    public function resepsiin(Request $request){
        $resepsi = Resepsi::where('iduser', $request->session()->get('id'))->first();
        //check if image is uploaded
        if ($request->hasFile('fileGambar')) {
            //Simpan Gambar
            $file = $request->file('fileGambar');
            $fileName = date('H-i-s').'_'.$file->getClientOriginalName();
            $request->fileGambar->move(public_path('Admin/fileUpload'), $fileName);
            if ($request->gambarold != 'Foto pegangan.jpg'){
                //delete old image
    	        unlink(public_path('Admin/fileUpload/'.$request->gambarold));
            }
            //update post with new image
            $resepsi->update([
                'namaPria' => $request->namaPria,
                'namaWanita' => $request->namaWanita,
                'tglResepsi' => $request->tglResepsi,
                'jamResepsi' => $request->jamResepsi,
                'alamatResepsi' => $request->alamatResepsi,
                'namaGedung' => $request->namaGedung,
                'fileGambar' => $fileName,
                'maps' => $request->maps,
            ]);
        } else {

            //update post without image
            $resepsi->update([
                'namaPria' => $request->namaPria,
                'namaWanita' => $request->namaWanita,
                'tglResepsi' => $request->tglResepsi,
                'jamResepsi' => $request->jamResepsi,
                'alamatResepsi' => $request->alamatResepsi,
                'namaGedung' => $request->namaGedung,
                'maps' => $request->maps,
            ]);
        }
        return redirect('akun/panel/resepsi')->with(['success' => 'Yeay data kamu berhasil diubah!']);
    }
    
    /**
     *
     * Sambutan
     *
     */
    public function sambutan(Request $request){
        $sambutan = DB::table('sambutan')->where('iduser', $request->session()->get('id'))->first();
        return view('panel.sambutan', [
            'sambutan' => $sambutan
        ]);
        // dd($sambutan);
    }
    public function sambutanin(Request $request){
        $sambutan = Sambutan::where('iduser', $request->session()->get('id'))->first();
        $sambutan->update([
            'pembukaSambutan' => $request->pembukaSambutan,
            'isiSambutan' => $request->isiSambutan,
            'penutupSambutan' => $request->penutupSambutan,
        ]);
        return redirect('akun/panel/sambutan')->with(['success' => 'Yeay data kamu berhasil diubah!']);
    }
    
    /**
     *
     * Ceremonies
     *
     */
    public function ceremonies(Request $request){
        $ceremonies = DB::table('adat')->where('iduser', $request->session()->get('id'))->first();
        return view('panel.ceremonies', [
            'ceremonies' => $ceremonies
        ]);
        // dd($sambutan);
    }
    public function ceremoniesin(Request $request){
        $ceremonies = Ceremonies::where('iduser', $request->session()->get('id'))->first();
        $ceremonies->update([
            'penjelasan' => $request->penjelasan
        ]);
        return redirect('akun/panel/ceremonies')->with(['success' => 'Yeay data kamu berhasil diubah!']);
    }
    
    /**
     *
     * Cerita
     *
     */
    public function cerita(Request $request){
        $count = DB::table('cerita')->where('iduser', $request->session()->get('id'))->count();
        $cerita = DB::table('cerita')->where('iduser', $request->session()->get('id'))->get();
        return view('panel.cerita', [
            'count' => $count,
            'cerita' => $cerita
        ]);
    }
    public function ceritain(Request $request){
        $count = DB::table('cerita')->where('iduser', $request->session()->get('id'))->count();
        if ($count < 4) {
            $request->validate([
                'gambarCerita' => 'mimes:jpeg,jpg,png,gif|max:10048'
            ]);
            //simpan gambar
            $file = $request->file('gambarCerita');
            $fileName = date('d-m-Y_H-i-s').'_'.$file->getClientOriginalName();
            $request->gambarCerita->move(public_path('Admin/fileUpload'), $fileName);
            //simpan db
            $cerita = new Cerita([
                'iduser' => $request->session()->get('id'),
                'judulCerita' => $request->judulCerita,
                'isiCerita' => $request->isiCerita,
                'gambarCerita' => $fileName
            ]);
            $cerita->save();
            return redirect('akun/panel/cerita')->with(['success' => 'Yeay berhasil nambahin Cerita!']);
        }else {
            return redirect('akun/panel/cerita')->with(['error' => 'Yah Cerita kamu udah kebanyakan, uploadnya gagal!']);
        }
    }
    public function ceritaedit(Request $request, $id){
        $cerita = Cerita::where('idCerita', $id)->first();
        $request->validate([
            'gambarCerita' => 'mimes:jpeg,jpg,png,gif|max:10048'
        ]);
        //Cek Gambar diganti atau tidak
        if ($request->hasFile('gambarCerita')) {
            //Simpan Gambar
            $file = $request->file('gambarCerita');
            $fileName = $file->getClientOriginalName();
            $request->gambarCerita->move(public_path('Admin/fileUpload'), $fileName);
            //delete old image
	        unlink(public_path('Admin/fileUpload/'.$request->gambarold));
            //Save edit with gambar
            $cerita->update([
                'judulCerita' => $request->judulCerita,
                'isiCerita' => $request->isiCerita,
                'gambarCerita' => $fileName
            ]);
        }else {
            //Save edit without gambar
            $cerita->update([
                'judulCerita' => $request->judulCerita,
                'isiCerita' => $request->isiCerita
            ]);
        }
        return redirect('akun/panel/cerita')->with(['success' => 'Yeay data kamu berhasil diubah!']);
    }
    public function ceritadelete($id){
        //delete image
        $cerita = DB::table('cerita')->where('idCerita', $id)->first();
        unlink(public_path('Admin/fileUpload/'.$cerita->gambarCerita));
        //delete db
        $cerita = Cerita::find($id);
        $cerita->delete();

        return redirect('akun/panel/cerita')->with(['success' => 'Datanya udah keapus!']);
    }
    
    /**
     *
     * Galeri
     *
     */
    public function galeri(Request $request){
        $galeri = DB::table('galery')->where('iduser', $request->session()->get('id'))->get();
        $count = DB::table('galery')->where('iduser', $request->session()->get('id'))->count();
        return view('panel.galeri', [
            'count' => $count,
            'galeri' => $galeri
        ]);
    }
    public function galeriin(Request $request){
        $count = DB::table('galery')->where('iduser', $request->session()->get('id'))->count();
        if ($count < 9) {
            $request->validate([
                'namaFile' => 'mimes:jpeg,jpg,png,gif|max:10048'
            ]);
            //simpan gambar
            $file = $request->file('namaFile');
            $fileName = date('d-m-Y_H-i-s').'_'.$file->getClientOriginalName();
            $request->namaFile->move(public_path('Admin/fileUpload'), $fileName);
            //simpan db
            $galeri = new Galeri([
                'iduser' => $request->session()->get('id'),
                'judulPhoto' => $request->judulPhoto,
                'namaFile' => $fileName
            ]);
            $galeri->save();
            return redirect('akun/panel/galeri')->with(['success' => 'Yeay uploadnya berhasil!']);
        } else {
            return redirect('akun/panel/galeri')->with(['error' => 'Yah gambarnya udah limit nih, uploadnya gagal!']);
        }  
    }

    public function galeridelete($id){
        //delete image
        $galeri = DB::table('galery')->where('idGalery', $id)->first();
        unlink(public_path('Admin/fileUpload/'.$galeri->namaFile));
        //delete db
        $galeri = Galeri::find($id);
        $galeri->delete();

        return redirect('akun/panel/galeri')->with(['success' => 'Datanya udah keapus!']);
    }
    
    /**
     *
     * Pesan
     *
     */
    public function pesan(Request $request){
        $pesan = DB::table('pesan')->where('iduser', $request->session()->get('id'))->get();
        return view('panel.pesan', [
            'pesan' => $pesan
        ]);
    }
    public function pesandelete($id){
        $pesan = Pesan::find($id);
        $pesan->delete();

        return redirect('akun/panel/pesan')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    
    /**
     *
     * Lagu
     *
     */
    public function lagu(Request $request){
        $lagu = DB::table('lagu')->where('iduser', $request->session()->get('id'))->first();
        return view('panel.lagu', [
            'lagu' => $lagu
        ]);
    }
    public function laguin(Request $request){
        $request->validate([
            'lagu' => 'mimes:mp3,ogg|max:10048'
        ]);
        $sambutan = Lagu::where('iduser', $request->session()->get('id'))->first();
        if ($request->laguold != 'perfect - saxophone.mp3'){
            unlink(public_path('Admin/assets/lagu/'.$request->laguold));
        }
        //simpan lagu baru
        $file = $request->file('lagu');
        $fileName = date('H-i-s').'_'.$file->getClientOriginalName();
        $request->lagu->move(public_path('Admin/assets/lagu/'), $fileName);
        $sambutan->update([
            'namaFile' => $fileName,
        ]);
        return redirect('akun/panel/lagu')->with(['success' => 'Yeay data kamu berhasil diubah!']);
    }

    /**
     *
     * Akun
     *
     */
    public function akun(Request $request){
        $akun = DB::table('user')->where('iduser', $request->session()->get('id'))->first();
        return view('panel.akun', [
            'user' => $akun,
        ]);
    }
    
    public function akunedit(Request $request){
        $akun = User::where('iduser', $request->session()->get('id'))->first();
        //cek perubahan link
        if ($request->link != $akun->link) {
            $request->validate([
                'link' => 'required|string|regex:/^[_a-zA-Z0-9]+$/|max:255|unique:user,link',
            ]);
        }else {
            $request->validate([
                'link' => 'required',
            ]);
        }
        //cek perubahan email
        if($request->email != $akun->email){
            $request->validate([
                'email' => 'required|unique:user|email'
            ]);
        } else {
            $request->validate([
                'email' => 'required|email'
            ]);
        }
        //cek perubahan password
        if($request->password != null){
            $request->validate([
                'password' => 'min:6'
            ]);
        }
        
        $akun->update([
            'link' => $request->link,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        //edit session
        $request->session()->put('link', $request->link);
        $request->session()->put('nama', $request->nama);
        
        return redirect('akun/panel/akun')->with(['success' => 'Yeay data kamu berhasil diubah!']);
    }
}
