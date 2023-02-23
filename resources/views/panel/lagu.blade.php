@extends('panel.layouts.master')
@section('content')
    <div class="content-header justify-content-between">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Detail Undangan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Lagu</li>
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

                    <h5 id="section1" class="tx-semibold">Edit Detail Lagu</h5>
          
                    <div class="card card-body pd-lg-25">
                      <form method="POST" action="{{ url('/akun/panel/laguin') }}" data-parsley-validate enctype="multipart/form-data">
                        @csrf
                        <div class="wd-600">
                            <div class="d-md-flex mg-b-30">
                              <div class="form-group mg-b-0">
                                <span class="tx-indigo">Lagu sekarang : {{$lagu->namaFile}}</span><br>
                                <audio controls>
                                      <source src="{{url('Admin/assets/lagu/'.$lagu->namaFile)}}" type="audio/mp3">
                                </audio><br><br>
                                <label>Ganti Lagu (MP3/OGG file only) : </label><br>
                                <input type="file" name="lagu" class=" wd-250 mb-2"><br>
                                <input type="hidden" name="laguold" value="{{$lagu->namaFile}}">
                                @if ($errors->has('lagu'))
                                    <span class="text-danger text-left">{{ $errors->first('lagu') }}</span>
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
