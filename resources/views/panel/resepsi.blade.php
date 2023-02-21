@extends('panel.layouts.master')
@section('content')
    <div class="content-header justify-content-between">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Detail Undangan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Resepsi</li>
                </ol>
            </nav>
        </div>
        <div class="d-sm-flex">
            <a href="{{url('/'.Session::get('link'))}}" target="_blank" class="btn btn-brand-01 mg-l-5"><i data-feather="link" class="svg-14"></i> Lihat Undangan</a>
        </div>
    </div><!-- content-header -->
    <div class="content-body content-body-components">
        <div class="row row-sm">
            <div class="col-md-7 col-lg-12 mg-t-10 mg-sm-t-10">
                <div >

                  @if ($message = Session::get('success'))
                    <div class="alert alert-solid alert-primary d-flex align-items-center mg-b-0" role="alert">
                      <i data-feather="alert-circle" class="mg-r-10"></i> {{$message}}
                    </div><br>
                  @endif

                    <h5 id="section1" class="tx-semibold">Edit Detail Resepsi</h5>
          
                    <div class="card card-body pd-lg-25">
                      <form method="POST" action="{{ url('/akun/panel/resepsiin') }}" data-parsley-validate enctype="multipart/form-data">
                        @csrf
                        <div class="wd-300">
                          <div class="d-md-flex mg-b-30">
                            <div class="form-group mg-b-0">
                              <label>Mempelai Pria : <span class="tx-danger">*</span></label>
                              <input type="text" name="namaPria" class="form-control wd-250" placeholder="Nama" value="{{$resepsi->namaPria}}" required>
                            </div><!-- form-group -->
                            <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                              <label>Mempelai Perempuan : <span class="tx-danger">*</span></label>
                              <input type="text" name="namaWanita" class="form-control wd-250" placeholder="Nama" value="{{$resepsi->namaWanita}}"  required>
                            </div><!-- form-group -->
                          </div><!-- d-flex -->
                          <div class="d-md-flex mg-b-30">
                            <div class="form-group mg-b-0">
                              <label>Foto Utama : <span class="tx-danger">*</span></label>
                              <input type="file" name="fileGambar" class=" wd-250 mb-2"><br>
                              <span class="tx-indigo">*Foto Sekarang : {{$resepsi->fileGambar}}</span><br>
                              <input type="hidden" name="gambarold" value="{{$resepsi->fileGambar}}">
                              @if ($errors->has('fileGambar'))
                                  <span class="text-danger text-left">{{ $errors->first('fileGambar') }}</span>
                              @endif
                            </div><!-- form-group -->
                          </div><!-- d-flex -->
                          <div class="d-md-flex mg-b-30">
                            <div class="form-group mg-b-0">
                              <label>Tanggal Resepsi : <span class="tx-danger">*</span></label>
                              <input type="date" name="tglResepsi" class="form-control wd-250" value="{{$resepsi->tglResepsi}}"  required>
                            </div><!-- form-group -->
                            <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                              <label>Jam Resepsi : <span class="tx-danger">*</span></label>
                              <input type="time" name="jamResepsi" class="form-control wd-250" value="{{$resepsi->jamResepsi}}"  required>
                            </div><!-- form-group -->
                          </div><!-- d-flex -->
                          <div class="d-md-flex mg-b-30">
                            <div class="form-group mg-b-0">
                              <label>Alamat Resepsi : <span class="tx-danger">*</span></label>
                              <textarea type="text" name="alamatResepsi" class="form-control wd-250" placeholder="Alamat" required>{{$resepsi->alamatResepsi}}</textarea>
                            </div><!-- form-group -->
                            <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                              <label>Nama Gedung : <span class="tx-danger"></span></label>
                              <input type="text" name="namaGedung" class="form-control wd-250" placeholder="Nama Gedung" value="{{$resepsi->namaGedung}}" >
                            </div><!-- form-group -->
                          </div><!-- d-flex -->
                          <div class="d-md-flex mg-b-30">
                            <div class="form-group mg-b-0">
                              <label>Link Maps : <span class="tx-danger"></span></label>
                              <textarea type="text" name="maps" class="form-control wd-250">{{$resepsi->maps}}</textarea>
                            </div><!-- form-group -->
                          </div><!-- d-flex -->
                          <button type="submit" class="btn btn-primary pd-x-20">Simpan</button>
                        </div>
                      </form>
                    </div><!-- card -->
                  </div><!-- component-section -->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- content-body -->

@endsection
