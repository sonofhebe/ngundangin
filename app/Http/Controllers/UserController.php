<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Resepsi;
use App\Models\Sambutan;
use App\Models\Ceremonies;
use App\Models\Lagu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function daftar()
    {
        return view('auth.daftar');
    }

    public function register(Request $request)
    {
        $request->validate([
            'link' => 'required|unique:user|string|regex:/^[_a-zA-Z0-9]+$/|max:255',
            'nama' => 'required',
            'email' => 'required|unique:user|email',
            'password' => 'min:6|required',
        ]);

        $user = new User([
            'link' => $request->link,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->save();
        $dftr = DB::table('user')->where('email', $request->email)->first();
        $request->session()->put('iduser', $dftr->iduser);

        $Resepsi = new Resepsi([
            'iduser' => $request->session()->get('iduser'),
            'namaPria' => 'Fulan',
            'namaWanita' => 'Fulannah',
            'tglResepsi' => date("Y-m-d"),
            'jamResepsi' => date("h:i:s"),
            'alamatResepsi' => 'Jakarta',
            'namaGedung' => 'Rumah Saudari Fulannah / Gedung Pernikahan ABC',
            'fileGambar' => 'Foto pegangan.jpg',
            'maps' => 'https://www.google.com/maps?q=-6.175307,106.827131&hl=es;z=14&output=embed',
        ]);
        $Resepsi->save();

        $sambutan = new Sambutan([
            'iduser' => $request->session()->get('iduser'),
            'pembukaSambutan' => 'Salam',
            'isiSambutan' => 'Puji syukur kehadirat Allah SWT karena kita semua masih diberikan kesehatan untuk dapat berkumpul hari ini di acara resepsi pernikahan anak saya. Yang saya hormati [sebutkan semua nama yang ditua-kan dari keluarga mempelai pria], yang saya hormati [sebutkan semua nama yang ditua-kan dari keluarga mempelai wanita]. Yang saya hormati [sebutkan nama-nama yang dihormati di luar anggota keluarga, misalkan nama bos perusahaan, kepala pemerintahan, dll], yang saya hormati bapak penghulu dari KUA [sebutkan nama daerah KUA dan nama penghulu] serta para hadirin yang mohon maaf namanya tidak dapat saya sebutkan satu persatu. Saya mewakili keluarga besar dari kedua mempelai mengucapkan terima kasih yang sangat besar untuk seluruh hadirin yang telah menyempatkan waktu untuk bisa hadir di acara resepsi pernikahan kedua mempelai ini. Hari ini akan menjadi momen yang sakral dan indah bagi anak-anak kami karena hari ini akan memulai hidup baru dan menjalani kehidupan sebagai keluarga baru. Kami mohon restu kepada hadirin semua dan meminta doa agar putra putri kami bisa menjalankan kehidupan rumah tangga yang sakinah, mawaddah dan warohmah. Semoga kelak bisa segera memiliki keturunan yang sholeh dan sholehah dan berguna untuk bangsa dan negara. Kami mengucapkan permohonan maaf jika dalam pelayanan serta jamuannya di resepsi ini ada hal-hal yang mungkin kurang berkenan di hati bapak, ibu dan saudara-saudara sekali.',
            'penutupSambutan' => 'Sekian dari saya, kurang lebihnya mohon maaf. Atas perhatiannya saya ucapkan terima kasih. Wassalamualaikum Wr. Wb.',
        ]);
        $sambutan->save();

        $Ceremonies = new Ceremonies([
            'iduser' => $request->session()->get('iduser'),
            'penjelasan' => 'Pernikahan kami menggunakan adat jawa dan sunda yang dipadukan dengan nuansa modern',
        ]);
        $Ceremonies->save();

        $Lagu = new Lagu([
            'iduser' => $request->session()->get('iduser'),
            'namaFile' => 'perfect - saxophone.mp3',
        ]);
        $Lagu->save();
       
        return redirect('/akun/login/index')->with('success', 'Daftarnya berhasil, yuk masuk!');
    }


    public function login()
    {
        return view('auth.login');
    }
    
    // public function tes(Request $request) {
	// 	if($request->session()->has('id')){
	// 		echo $request->session()->get('id');
    //         if($request->session()->has('link')){
	// 		    echo $request->session()->get('link');
    //         }
	// 	}else{
	// 		echo 'Tidak ada data dalam session.';
	// 	}
	// }

    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            $user = DB::table('user')->where('email', $request->email)->first();
            $request->session()->put('id', $user->iduser);
            $request->session()->put('link', $user->link);
            $request->session()->put('nama', $user->nama);
            return redirect()->intended('/akun/panel/index');
        }

        return redirect('/akun/login/index')->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }

    // public function password()
    // {
    //     $data['title'] = 'Change Password';
    //     return view('user/password', $data);
    // }

    // public function password_action(Request $request)
    // {
    //     $request->validate([
    //         'old_password' => 'required|current_password',
    //         'new_password' => 'required|confirmed',
    //     ]);
    //     $user = User::find(Auth::id());
    //     $user->password = Hash::make($request->new_password);
    //     $user->save();
    //     $request->session()->regenerate();
    //     return back()->with('success', 'Password changed!');
    // }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}