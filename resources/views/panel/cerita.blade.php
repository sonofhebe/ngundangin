@extends('panel.layouts.master')
@section('content')
    <div class="content-header justify-content-between">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Detail Undangan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cerita Kita</li>
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
                  @if ($message = Session::get('error'))
                    <div class="alert alert-solid alert-danger d-flex align-items-center mg-b-0" role="alert">
                      <i data-feather="alert-circle" class="mg-r-10"></i> {{$message}}
                    </div><br>
                  @endif

                    <h5 id="section1" class="tx-semibold">Edit Detail Cerita</h5>
                    <p id="section1" class="tx-semibold">Jumlah Foto Kamu : {{$count}} <br>
                    <i class="tx-primary">*Limit cerita adalah 4<br>
                    *Rekomendasi ukuran foto 6:4</i></p>
          
                    <div class="card card-body pd-lg-25">
                      <a href="" class="wd-150 btn btn-primary pd-x-20 mb-3" data-toggle="modal" data-target="#modaladd" data-animation="effect-flip-vertical">Tambah Cerita +</a>
                      @if ($errors->has('gambarCerita'))
                          <span class="text-danger text-left mb-3">{{ $errors->first('gambarCerita') }}</span>
                      @endif
                      <div class="table-responsive">
                      <table id="tbl" class="table table-primary table-hover table-striped mg-b-0">
                        <thead>
                          <tr>
                            <th class="wd-5p">No</th>
                            <th class="wd-15p">Judul</th>
                            <th class="wd-25p">Cerita</th>
                            <th class="wd-20p">Foto</th>
                            <th class="wd-15p">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($cerita as $key => $cer)
                          <?php $key++ ?>   

                          <tr>
                            <td>{{$key}}</td>
                            <td>{{$cer->judulCerita}}</td>
                            <td>{{$cer->isiCerita}}</td>
                            <td><a href="" data-toggle="modal" data-target="#modalgambar{{$cer->idCerita}}"><img src="{{asset('Admin/fileUpload/'.$cer->gambarCerita)}}" alt="{{'Cerita '. $key}}" style=" width: 100px; "></a></td>
                            <td>
                              <a href="" class="wd-50 btn btn-dark pd-5 mb-3" data-toggle="modal" data-target="#modaledit{{$cer->idCerita}}">Edit</a>
                              <a href="" class="wd-60 btn btn-danger pd-5 mb-3" data-toggle="modal" data-target="#modaldelete{{$cer->idCerita}}">Hapus</a>
                            </td>
                          </tr>

                          {{-- Modal edit --}}
                          <div class="modal fade" id="modaledit{{$cer->idCerita}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h6 class="modal-title" id="exampleModalLabel6">Edit Cerita</h6>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i data-feather="x"></i></span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form method="POST" action="{{ url('/akun/panel/ceritaedit/'.$cer->idCerita) }}" data-parsley-validate enctype="multipart/form-data">
                                    @csrf
                                    <div class="wd-auto">
                                      <div class="form-group mb-2">
                                        <label>Judul Cerita : </label>
                                        <input type="text" name="judulCerita" class="form-control" placeholder="Tulis Judul" value="{{$cer->judulCerita}}" required>
                                      </div><!-- form-group -->
                                        <div class="form-group mb-4">
                                          <label>Isi Cerita : </label>
                                          <textarea type="text" name="isiCerita" class="form-control" style="height: 150px;" placeholder="Ceritakan">{{$cer->isiCerita}}</textarea>
                                        </div><!-- form-group -->
                                        <div class="form-group mb-2">
                                          <label>Foto Cerita : </label>
                                          <input type="file" name="gambarCerita" class=" mb-2"><br>
                                          <span class="tx-indigo">*Foto Sekarang : {{$cer->gambarCerita}}</span><br>
                                          <input type="hidden" name="gambarold" value="{{$cer->gambarCerita}}">
                                        </div><!-- form-group -->
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                              </form>
                              </div>
                            </div>
                          </div>
                          {{-- end Modal --}}

                          {{-- Modal hapus --}}
                          <div class="modal fade" id="modaldelete{{$cer->idCerita}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h6 class="modal-title" id="exampleModalLabel6">Hapus Cerita</h6>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i data-feather="x"></i></span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form method="POST" action="{{ url('/akun/panel/ceritadelete/'.$cer->idCerita) }}" data-parsley-validate enctype="multipart/form-data">
                                    @csrf
                                  <p class="mg-b-0">Apakah kamu yakin menghapus cerita "{{$cer->judulCerita}}"?</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                  <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          {{-- end Modal --}}

                          {{-- Modal gambar --}}
                          <div class="modal fade" id="modalgambar{{$cer->idCerita}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <img src="{{asset('Admin/fileUpload/'.$cer->gambarCerita)}}" alt="{{'Cerita '. $key}}" height="100%" width="100%">
                                </div>
                                <div class="modal-footer justify-content-between">
                                  <h6 class="modal-title">{{$cer->judulCerita}}</h6>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i data-feather="x"></i></span>
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                          {{-- end Modal --}}

                          @endforeach
                        </tbody>
                      </table>
                      </div>
                      
                    </div><!-- card -->
                  </div><!-- component-section -->
            </div><!-- col -->
        </div><!-- row -->

        

    {{-- Modal tambah --}}
    <div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title" id="exampleModalLabel6">Tambah Cerita</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i data-feather="x"></i></span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{ url('/akun/panel/ceritain') }}" data-parsley-validate enctype="multipart/form-data">
              @csrf
              <div class="wd-auto">
                <div class="form-group mb-2">
                  <label>Judul Cerita : </label>
                  <input type="text" name="judulCerita" class="form-control" placeholder="Tulis Judul" required>
                </div><!-- form-group -->
                  <div class="form-group mb-4">
                    <label>Isi Cerita : </label>
                    <textarea type="text" name="isiCerita" class="form-control" style="height: 150px;" placeholder="Ceritakan"></textarea>
                  </div><!-- form-group -->
                  <div class="form-group mb-2">
                    <label>Foto Cerita : </label>
                    <input type="file" name="gambarCerita" class=" mb-2"><br>
                  </div><!-- form-group -->
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">submit</button>
          </div>
        </form>
        </div>
      </div>
    </div>
    {{-- end Modal --}}



    </div><!-- content-body -->
@endsection
