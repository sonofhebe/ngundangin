<body>

  <div class="sidebar">
    <div class="sidebar-header">
      <div>
        <a href="{{url('/')}}" class="sidebar-logo"><span>Ngundangin</span></a>
        <small class="sidebar-logo-headline">Undangan Online Gratis!</small>
      </div>
    </div><!-- sidebar-header -->
    <div id="dpSidebarBody" class="sidebar-body">
      <ul class="nav nav-sidebar">
        <li class="nav-item"><a href="{{url('/akun/panel/index')}}" class="nav-link {{ Request::is('akun/panel/index') ? "active" : "" }}"><i data-feather="box"></i> Dashboard</a></li>
      </ul>
      <hr class="mg-b-5">

      <ul class="nav nav-sidebar">
        <li class="nav-label"><label class="content-label">Template Pages</label></li>
        
        <li class="nav-item {{ Request::is('akun/panel/resepsi') | Request::is('akun/panel/sambutan') | Request::is('akun/panel/cerita') | Request::is('akun/panel/ceremonies') | Request::is('akun/panel/galeri') | Request::is('akun/panel/lagu') ? "show" : "" }}">
          <a href="" class="nav-link with-sub {{ Request::is('akun/panel/resepsi') | Request::is('akun/panel/sambutan') | Request::is('akun/panel/cerita') | Request::is('akun/panel/ceremonies') | Request::is('akun/panel/galeri') | Request::is('akun/panel/lagu') ? "active" : "" }}"><i data-feather="layout"></i> Detail Undangan</a>
          <nav class="nav nav-sub">
            <a href="{{url('/akun/panel/resepsi')}}" class="nav-sub-link {{ Request::is('akun/panel/resepsi') ? "active" : "" }}">Resepsi</a>
            <a href="{{url('/akun/panel/sambutan')}}" class="nav-sub-link {{ Request::is('akun/panel/sambutan') ? "active" : "" }}">Sambutan</a>
            <a href="{{url('/akun/panel/cerita')}}" class="nav-sub-link {{ Request::is('akun/panel/cerita') ? "active" : "" }}">Cerita Kita</a>
            <a href="{{url('/akun/panel/ceremonies')}}" class="nav-sub-link {{ Request::is('akun/panel/ceremonies') ? "active" : "" }}">Wedding Ceremonies</a>
            <a href="{{url('/akun/panel/galeri')}}" class="nav-sub-link {{ Request::is('akun/panel/galeri') ? "active" : "" }}">Galeri</a>
            <a href="{{url('/akun/panel/lagu')}}" class="nav-sub-link {{ Request::is('akun/panel/lagu') ? "active" : "" }}">Lagu</a>
          </nav>
        </li>

        <li class="nav-item"><a href="{{url('/akun/panel/pesan')}}" class="nav-link {{ Request::is('akun/panel/pesan') ? "active" : "" }}"><i data-feather="message-circle"></i> Pesan Masuk</a></li>
        <li class="nav-item"><a href="{{url('/akun/panel/akun')}}" class="nav-link {{ Request::is('akun/panel/akun') ? "active" : "" }}"><i data-feather="user"></i> Setting Akun</a></li>
      </ul>

      <hr class="mg-t-30 mg-b-25">

      <ul class="nav nav-sidebar">
        <li class="nav-item"><a href="https://www.instagram.com/narative.id/" target="_blank" class="nav-link"><i data-feather="aperture"></i> Narative</a></li>
      </ul>


    </div><!-- sidebar-body -->
  </div><!-- sidebar -->