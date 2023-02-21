@extends('panel.layouts.master')
@section('content')
    <div class="content-header justify-content-between">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Detail Undangan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Galeri</li>
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

                  <h5 id="section1" class="tx-semibold">Edit Galeri</h5>
                  <p id="section1" class="tx-semibold">Jumlah Foto Kamu : {{$count}} <br>
                  <i class="tx-primary">*Limit foto galeri adalah 9<br>
                  *Rekomendasi ukuran foto 6:4</i></p>
          
                    <div class="card card-body pd-lg-25">
                      <a href="" class="wd-150 btn btn-primary pd-x-20 mb-3" data-toggle="modal" data-target="#modaladd" data-animation="effect-flip-vertical">Tambah Galeri +</a>
                      @if ($errors->has('namaFile'))
                          <span class="text-danger text-left mb-3">{{ $errors->first('namaFile') }}</span>
                      @endif
                      <div class="table-responsive">
                      <table id="tbl" class="table table-primary table-hover table-striped mg-b-0">
                        <thead>
                          <tr>
                            <th class="wd-5p">No</th>
                            <th class="wd-15p">Judul</th>
                            <th class="wd-30p">Foto</th>
                            <th class="wd-15p">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($galeri as $key => $gal)
                          <?php $key++ ?>   

                          <tr>
                            <td>{{$key}}</td>
                            <td>{{$gal->judulPhoto}}</td>
                            <td><a href="" data-toggle="modal" data-target="#modalgambar{{$gal->idGalery}}"><img src="{{asset('Admin/fileUpload/'.$gal->namaFile)}}" alt="{{'Photo '. $key}}" style=" width: 100px; "></a></td>
                            <td>
                              <a href="" class="wd-60 btn btn-danger pd-5 mb-3" data-toggle="modal" data-target="#modaldelete{{$gal->idGalery}}" data-animation="effect-flip-vertical">Hapus</a>
                            </td>
                          </tr>

                          {{-- Modal hapus --}}
                          <div class="modal fade" id="modaldelete{{$gal->idGalery}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h6 class="modal-title" id="exampleModalLabel6">Hapus Foto</h6>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i data-feather="x"></i></span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form method="POST" action="{{ url('/akun/panel/galeridelete/'.$gal->idGalery) }}" data-parsley-validate enctype="multipart/form-data">
                                    @csrf
                                  <p class="mg-b-0">Kamu yakin mau hapus Foto "{{$gal->judulPhoto}}"?</p>
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
                          <div class="modal fade" id="modalgambar{{$gal->idGalery}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <img src="{{asset('Admin/fileUpload/'.$gal->namaFile)}}" alt="{{'Foto '. $key}}" height="100%" width="100%">
                                </div>
                                <div class="modal-footer justify-content-between">
                                  <h6 class="modal-title">{{$gal->judulPhoto}}</h6>
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
            <h6 class="modal-title" id="exampleModalLabel6">Tambah Galeri</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i data-feather="x"></i></span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{ url('/akun/panel/galeriin') }}" data-parsley-validate enctype="multipart/form-data">
              @csrf
              <div class="wd-auto">
                <div class="form-group mb-2">
                  <label>Judul Foto : </label>
                  <input type="text" name="judulPhoto" class="form-control" placeholder="Tulis Judul" required>
                </div><!-- form-group -->
                  <div class="form-group mb-2">
                    <label>Pilih Foto : </label>
                    <input type="file" name="namaFile" class=" mb-2"><br>
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



    </div><!-- content-body -->
@endsection