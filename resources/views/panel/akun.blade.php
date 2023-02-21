@extends('panel.layouts.master')
@section('content')
    <div class="content-header justify-content-between">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Setting Akun</li>
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
  
                    <h5 id="section1" class="tx-semibold">Edit Detail Akun</h5>
          
                    <div class="card card-body pd-lg-25">
                      <form method="POST" action="{{ url('/akun/panel/akunedit') }}" data-parsley-validate enctype="multipart/form-data">
                        @csrf
                        <div class="wd-auto">
                            <div class="d-md-flex mg-b-0">
                            <div class="form-group mg-b-10">
                              <label>Link Undangan : <span class="tx-danger">*</span></label>
                                <div class="input-group-prepend">
                                  <span class="input-group-text mb-2" id="basic-addon1">Ngundangin.online/</span>
                                  <input type="text" name="link" class="form-control wd-250" placeholder="Link_Kamu" value="{{$user->link}}"  required>
                                </div>
                                @if ($errors->has('link'))
                                    <span class="text-danger text-left">*Link tidak boleh menggunakan spasi dan karakter (buat seperti username), contoh : putra_putri / PutraDanPutri</span>
                                @endif
                              </div><!-- form-group -->
                            </div><!-- d-flex -->
                          <div class="d-md-flex mg-b-30">
                            <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                              <label>Nama : <span class="tx-danger">*</span></label>
                              <input type="text" name="nama" class="form-control wd-250" placeholder="Nama" value="{{$user->nama}}"  required>
                            </div><!-- form-group -->
                          </div><!-- d-flex -->
                          <div class="d-md-flex mg-b-30">
                            <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                              <label>Email : <span class="tx-danger">*</span></label>
                              <input type="text" name="email" class="form-control wd-250" placeholder="Email" value="{{$user->email}}"  required>
                              @if ($errors->has('email'))
                                  <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                              @endif
                            </div><!-- form-group -->
                          </div><!-- d-flex -->
                          <div class="d-md-flex mg-b-30">
                            <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                              <label>Password : </label>
                              <input type="text" name="password" class="form-control wd-250" placeholder="Password Baru">
                              <span class="text-primary text-left">*Kosongkan Jika tidak ingin ganti password</span><br>
                              @if ($errors->has('password'))
                                  <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                              @endif
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
