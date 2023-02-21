@extends('panel.layouts.master')
@section('content')

    <div class="content-header justify-content-between">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
            <h4 class="content-title content-title-xs">Selamat Datang</h4>
        </div>
        <div class="d-sm-flex">
            <a href="{{url('/'.Session::get('link'))}}" target="_blank" class="btn btn-brand-01 mg-l-5"><i data-feather="link" class="svg-14"></i> Lihat Undangan</a>
        </div>
    </div><!-- content-header -->

    
    <div class="col-xl-12 mg-t-15 mg-sm-t-20">
        <div class="card card-hover card-project-three">
          <div class="card-body">
            <h1 class="card-value">Hore undangan kamu udah jadi!</h1>
            <h5 class="project-title">Cara share undangannya :</h5>
            <p class="tx-15 tx-gray-700">Share aja link kamu "<a href="{{url('/'.Session::get('link'))}}" target="_blank">https://ngundangin.online/{{Session::get('link')}}</a>" tapi kalimat awalnya cuma buka undangan, kalo mau ada nama tamunya kamu bisa share linknya disertai nama tamunya (ingat, spasi ganti dengan garis bawah ya), contohnya kaya gini "<a href="{{url('/'.Session::get('link').'/Fredrin_Sambo')}}" target="_blank">https://ngundangin.online/{{Session::get('link')}}/Fredrin_Sambo</a>" nah kalo kaya gitu nanti awalnya bakal ada kalimat "Untuk Andre dan partner" gituuuu, cobain deh.</p>
            <h5 class="project-title">Cara edit undangan :</h5>
            <p class="tx-15 tx-gray-700">Buka menu sebelah kiri, lalu klik "Detail Undangan", tinggal pilih deh mau edit bagian apa, gampang ko :D.</p>
            <h5 class="project-title">Kalo mau lihat pesan tamu undangan :</h5>
            <p class="tx-15 tx-gray-700">Buka menu sebelah kiri, lalu klik "Pesan Masuk". Kamu juga bisa menghapus pesan yang kamu ga suka loh.</p>
            <h5 class="project-title">Cara ganti link :</h5>
            <p class="tx-15 tx-gray-700">Buka menu sebelah kiri, lalu klik "Setting Akun", dimenu setting kamu bisa mengatur link dan informasi akun kamu.</p>
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->

    <div class="col-xl-12 mg-t-15 mg-sm-t-20">
        <div class="bg-secondary card card-hover card-project-three">
          <div class="card-body">
            <h2 class="card-value tx-white">Terimakasih</h2>
            <h5 class="project-title tx-white">Kamu udah pake web kita, kita jadi terhura :')</h5>
            <p class="tx-15 tx-gray-200">Kalo ada kesulitan, masalah, saran, ataupun kritik kasih tau kita yaaa, kamu juga bisa pake jasa fotografi dan videografi kita dengan klik tombol dibawah, okeeeeeeh.</p>
            <a href="https://www.instagram.com/narative.id/" target="_blank" class="btn btn-xs btn-brand-01" style="stroke: white">Hubungi Kami</a>
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->


@endsection
