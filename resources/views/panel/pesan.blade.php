@extends('panel.layouts.master')
@section('content')
    <div class="content-header justify-content-between">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Pesan</li>
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

                    <h5 id="section1" class="tx-semibold">Daftar Pesan</h5>
          
                    <div class="card card-body pd-lg-25">
                      <div class="table-responsive">
                      <table id="tbl" class="table table-primary table-hover table-striped mg-b-0">
                        <thead>
                          <tr>
                            <th class="wd-5p">No</th>
                            <th class="wd-15p">Nama Pengirim</th>
                            <th class="wd-30p">isi</th>
                            <th class="wd-15p">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($pesan as $key => $pes)
                          <?php $key++ ?>   

                          <tr>
                            <td>{{$key}}</td>
                            <td>{{$pes->namaPengirim}}</td>
                            <td>{{$pes->isi}}</td>
                            <td>
                              <a href="" class="wd-60 btn btn-danger pd-5 mb-3" data-toggle="modal" data-target="#modaldelete{{$pes->idPesan}}" data-animation="effect-flip-vertical">Hapus</a>
                            </td>
                          </tr>

                          {{-- Modal hapus --}}
                          <div class="modal fade" id="modaldelete{{$pes->idPesan}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h6 class="modal-title" id="exampleModalLabel6">Hapus Foto</h6>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i data-feather="x"></i></span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form method="POST" action="{{ url('/akun/panel/pesandelete/'.$pes->idPesan) }}" data-parsley-validate enctype="multipart/form-data">
                                    @csrf
                                  <p class="mg-b-0">Apakah kamu yakin menghapus pesan dari "{{$pes->namaPengirim}}"?</p>
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


                          @endforeach
                        </tbody>
                      </table>
                      </div>
                      
                    </div><!-- card -->
                  </div><!-- component-section -->
            </div><!-- col -->
        </div><!-- row -->

    </div><!-- content-body -->
@endsection