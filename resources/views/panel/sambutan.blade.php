@extends('panel.layouts.master')
@section('content')
    <div class="content-header justify-content-between">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Detail Undangan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sambutan</li>
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

                    <h5 id="section1" class="tx-semibold">Edit Detail Sambutan</h5>
          
                    <div class="card card-body pd-lg-25">
                      <form method="POST" action="{{ url('/akun/panel/sambutanin') }}" data-parsley-validate enctype="multipart/form-data">
                        @csrf
                        <div class="wd-300">
                            <div class="d-md-flex mg-b-30">
                              <div class="form-group mg-b-0">
                                <label>Pembuka Sambutan : <span class="tx-danger"></span></label>
                                <textarea type="text" name="pembukaSambutan" class="form-control wd-lg-600 wd-sm-300">{{$sambutan->pembukaSambutan}}</textarea>
                              </div><!-- form-group -->
                            </div><!-- d-flex -->
                            <div class="d-md-flex mg-b-30">
                              <div class="form-group mg-b-0">
                                <label>Isi Sambutan : <span class="tx-danger"></span></label>
                                <textarea type="text" name="isiSambutan" class="form-control wd-lg-600 wd-sm-300" style="height: 150px;">{{$sambutan->isiSambutan}}</textarea>
                              </div><!-- form-group -->
                            </div><!-- d-flex -->
                            <div class="d-md-flex mg-b-30">
                              <div class="form-group mg-b-0">
                                <label>Penutup Sambutan : <span class="tx-danger"></span></label>
                                <textarea type="text" name="penutupSambutan" class="form-control wd-lg-600 wd-sm-300">{{$sambutan->penutupSambutan}}</textarea>
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
