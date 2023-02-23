<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Wedding Invitation</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta charset="UTF-8">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Playball%7CBitter" rel="stylesheet">
	<!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/css/start.css')}}">
	<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/fluidbox.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/font-icon.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
	<link rel="icon" type="image/png" href="{{asset('assets/images/logo-white.png')}}">

	<link rel="stylesheet" href="aos-by-red.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
	
	@foreach ($resepsi as $res)
	@endforeach

<div class="start" id="start">
	<div class="amplop">
		<p class="atas" data-aos="fade-down">{{$res->namaPria}} <i class="icon icon-heart"></i> {{$res->namaWanita}}</p>
		<?php if ($tamu == null) {
			?> <p class="bawah" data-aos="fade-down">Klik amplop<br>untuk buka undangan</p> <?php
		} else {
			?> <p class="bawah" data-aos="fade-down">Untuk {{$tamu}} dan partner.</p>
		<?php } ?>
			<div class="valentines" data-aos="zoom-in" onclick="bukaundangan()">
				<div class="envelope">
					<div class="kartu">
						<div class="text">
							Wedding <br> Invitation
						</div>
						<div class="heart"></div>
					</div>
				</div>
				<div class="front"></div>
			</div>
	</div>
</div>


	<!-- start = Menu -->
	<header>
		<div class="container" style="background-color: rgba(40,42,53,0.5); width:100%; top: 0px; position: fixed;">
			<a class="logo" href="#"><img src="{{asset('assets/images/logo-white.png')}}" alt="Logo" style=" margin-bottom: 5px; width: 100px; height: auto;"></a>
			<div class="menu-nav-icon" data-nav-menu="#main-menu" style="align-items: right;"><i class="icon icon-bars"></i></div>
			<ul class="main-menu visible-on-click" style=" margin-top: 5px;" id="main-menu">
				<li><a href="#top">UNDANGAN</a></li>
				<li><a href="#sambutan">SAMBUTAN</a></li>
				<li><a href="#ceritaKita">CERITA KITA</a></li>
				<li><a href="#gallery">GALERI</a></li>
				<li><a href="#lokasi">LOKASI</a></li>
				<li><a href="#pesan">KIRIM PESAN</a></li>
				<li><a href="{{url('/')}}">NGUNDANGIN<i class="icon-heart" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</header>
	<!-- end = menu -->
	
	
	<!-- start = konten save the date -->
	
	<div class="main-slider" style="background : url('{{asset('Admin/fileUpload/'.$res->fileGambar)}}'); background-size:cover;"  data-aos="fade" id="top">
		<div class="display-table center-text">
			<div class="display-table-cell">
				<div class="slider-content"  data-aos="zoom-in">
				
					<i class="small-icon icon icon-tie"></i>
					<?php
						$getTanggal = $res->tglResepsi;
						$pecahTanggal = explode("-", $getTanggal);
						$tahun = $pecahTanggal[0];
						$bulan = $pecahTanggal[1];
						$tanggal = $pecahTanggal[2];
						
						if ($bulan == "01") {
							echo "<h5 = class'date'>".$tanggal." Januari ".$tahun."</h5>";
						} else if ($bulan == "02"){
							echo "<h5 = class'date'>".$tanggal." Februari ".$tahun."</h5>";
						}else if ($bulan == "03"){
							echo "<h5 = class'date'>".$tanggal." Maret".$tahun."</h5>";
						} else if($bulan == "04"){
							echo "<h5 = class'date'>".$tanggal." April ".$tahun."</h5>";
						} else if ($bulan == "05"){
							echo "<h5 class='date'>".$tanggal." Mei ".$tahun."</h5>";
						} else if ($bulan == "06"){
							echo "<h5 class='date'>".$tanggal." Juni ".$tahun."</h5>";
						} else if ($bulan == "07"){
							echo "<h5 = class'date'>".$tanggal." Juli ".$tahun."</h5>";
						} else if ($bulan == "08"){
							echo "<h5 = class'date'>".$tanggal." Agustus ".$tahun."</h5>";
						}else if ($bulan == "09"){
							echo "<h5 = class'date'>".$tanggal." September ".$tahun."</h5>";
						}else if ($bulan == "10"){
							echo "<h5 = class'date'>".$tanggal." Oktober ".$tahun."</h5>";
						}else if ($bulan == "11"){
							echo "<h5 = class'date'>".$tanggal." November ".$tahun."</h5>";
						}else if ($bulan == "12"){
							echo "<h5 = class'date'>".$tanggal." Desember ".$tahun."</h5>";
						}

					?>
					<h3 class="pre-title">Save The Date</h3>
					<h1 class="title">{{$res->namaPria}} <i class="icon icon-heart"></i> {{$res->namaWanita}}</h1>
					
				</div>
			</div>
		</div>
	</div>
	<!-- end = konten save the date -->
	
	<!-- start = konten sambutan -->
	<section class="section story-area center-text" id="sambutan">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					
					<div class="heading">
						<h2 class="title">Sambutan</h2>
						<span class="heading-bottom"><i class="icon icon-star"></i></span>
					</div>
					<!-- bagian pembuka sambutan-->
					<p class="desc margin-bottom">{{$sambutan->pembukaSambutan}}</p>
					<br>
					<!-- bagian isi sambutan -->
					<p class="desc margin-bottom">{{$sambutan->isiSambutan}}</p>
					<br>
					<!-- bagian penutup sambutan -->
					<p class="desc margin-bottom">{{$sambutan->penutupSambutan}}</p>
					<!-- end = untuk menampilkan sambutan -->
					
				</div>
			</div>
		</div>
	</section>
	<!-- end =konten sambutan -->
	

	<!-- start = Coutdown acara dimulai resepsi -->
	<section class="section counter-area center-text">
		<div class="container" data-aos="fade-up">
			<div class="row">
			
				<div class="col-sm-12">
					<div class="heading">
						<h2 class="title">Jangan Lupa</h2>
						<?php
								$tgl = $res->tglResepsi; 
								$pTgl = explode("-", $tgl);
								$hYears=$pTgl[0];
								$hMounth = $pTgl[1];
								$hDay = $pTgl[2];
								$jam =  (int)((mktime(0,0,0,$hMounth,$hDay,$hYears)-time())/86400);
						?>
						<span class="heading-bottom"><i class="color-white icon icon-star"></i></span>
					</div>
				</div>
				
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					
					<div class="remaining-time">
						<?php 
							echo "Masih Ada Waktu ".$jam." Hari Lagi, Sampai Tanggal $hDay-$hMounth-$hYears";
							echo "<br>";
							echo "Acara Resepsi Kami Akan Dilaksanakan Pada Tanggal $hDay-$hMounth-$hYears Pukul ".$res->jamResepsi;
							
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end = Coutdown acara dimulai resepsi -->


	<!-- start = konten cerita -->
	<section class="section w-details-area center-text" id="ceritaKita">
		<div class="container">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					
					<div class="heading" data-aos="fade-up">
						<h2 class="title">Cerita Kita</h2>
						<span class="heading-bottom"><i class="icon icon-star"></i></span>
					</div>
					
					<!-- start = konten bagian cerita  -->
					<div class="wedding-details margin-bottom">
						
					@foreach ($cerita as $key => $cer)
						<?php 
							$key++;
							$id=$key;
							if ($id%2 == 0 ) {
						?>
						<a href="" data-toggle="modal" data-target="#modalcerita{{$cer->idCerita}}">
							<div class="w-detail right" data-aos="fade-right">
								<img src="{{asset('Admin/fileUpload/'.$cer->gambarCerita)}}"> 
								<h4 class="title">{{$cer->judulCerita}}</h4>
								<p>{{$cer->isiCerita}}</p>
							</div>
						</a>
						<?php	
						} else if($id%2 == 1){
						?>
						<a href="" data-toggle="modal" data-target="#modalcerita{{$cer->idCerita}}">
							<div class="w-detail left" data-aos="fade-left">
								<img src="{{asset('Admin/fileUpload/'.$cer->gambarCerita)}}"> 
							<h4 class="title">{{$cer->judulCerita}}</h4>
							<p>{{$cer->isiCerita}}</p>
							</div>
						</a>
						<?php
						}
						?>

						{{-- Modal gambar --}}
						<div class="modal fade" id="modalcerita{{$cer->idCerita}}" role="dialog">
							<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-body">
								<img src="{{asset('Admin/fileUpload/'.$cer->gambarCerita)}}" alt="{{'Foto '. $key}}" height="100%" width="100%">
								</div>
								<div class="modal-footer justify-content-between">
								<h5 class="modal-title">{{$cer->judulCerita}}</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">X</span>
								</button>
								</div>
							</div>
							</div>
						</div>
						{{-- end Modal --}}

					@endforeach
						<!-- end = konten cerita -->
						
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- end = konten cerita -->
	
	<!-- start = wedding ceremoni -->
	<section class="section ceremony-area center-text" id="wedding">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-sm-12">
					
					<div class="heading">
						<h2 class="title">Wedding & Ceremonies</h2>
						<span class="heading-bottom"><i class="color-white icon icon-star"></i></span>
					</div>

					<div class="ceremony margin-bottom">
						<p class='desc'>{{$adat->penjelasan}}</p>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- end = wedding ceremoni -->
	
	
	<!-- start = gallery prewedding -->
	<section class="section galery-area center-text" id="gallery">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12">
					
					<div class="heading" data-aos="fade-up">
						<h2 class="title">Gallery Prewedding</h2>
						<span class="heading-bottom"><i class="icon icon-star"></i></span>
					</div>
					
					<div class="image-gallery">
						
						<!-- start = untuk menampilkan foto -->
						<!-- nanti setting ukuran 600x400 -->
						<div class="row" style="display: flex; justify-content: center;">
							
						@foreach ($galery as $gal)
						<a href="" data-toggle="modal" data-target="#modalgambar{{$gal->idGalery}}">
							<div class="col-md-4 col-sm-6 m-2"  data-aos="flip-up"  data-aos-duration="1000">
								<img src="{{asset('Admin/fileUpload/'.$gal->namaFile)}}" style="width:350px; height:200px; object-fit: cover; padding: 10px;" >
							</div>
						</a>
						
						{{-- Modal gambar --}}
						<div class="modal fade" id="modalgambar{{$gal->idGalery}}" role="dialog">
							<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-body">
								<img src="{{asset('Admin/fileUpload/'.$gal->namaFile)}}" alt="{{'Foto '. $key}}" height="100%" width="100%">
								</div>
								<div class="modal-footer justify-content-between">
								<h5 class="modal-title">{{$gal->judulPhoto}}</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">X</span>
								</button>
								</div>
							</div>
							</div>
						</div>
						{{-- end Modal --}}

						@endforeach
							
							
						</div>
						<!-- end = untuk tampilkan foto -->
						
						
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- end = galery prewedding -->

	<!-- satart = lokasi prewed -->
	<section class="section contact-area" style="background-color: #282a35;" id="lokasi">
			<div class="container">
				<div class="row">

					<div class="col-sm-8" data-aos="fade-left">
						<div class="heading">
							<h3 class="title text-white">Lokasi Resepsi</h3>
							<i class="icon icon-star"></i>
						</div>
						
						<div class="margin-bottom text-white">
							<p class="text-white">Alamat :</p>
							{{$res->alamatResepsi}}
							<h4>{{$res->namaGedung}}</h4>
						</div>
					</div>
		
		<!-- start = maps -->
					<div class="col-sm-4" data-aos="fade-right">
						<div class="margin-bottom text-white">
							<h4>Lihat di maps</h4>
							<iframe width="100%" height="100%" frameborder="10" scrolling="no" marginheight="0" marginwidth="0" src="{{$res->maps}}"></iframe>
						</div>
					</div>
				</div>
			</div>
		<!-- end maps -->
	</section>
	<!-- end = lokasi prewed -->

<!-- start = Pesan -->
<section class="section contact-area" id="pesan">
		<div class="container">
			<div class="row">

				<!-- start = untuk table -->
				<div class="col-sm-8" data-aos="fade-right">
					<div class="contact-form margin-bottom">
						<div class="heading">
							<h2 class="title">Pesan untuk pengantin</h2>

						</div>
						<iframe src={{url('/pesan/isi/'.$idu)}} frameborder="0" style="border:2px solid #E45F74;" class="col-sm-12" height="300px"></iframe>


					</div>
				</div>
				<!-- end = untuk table -->

				<div class="col-sm-4" style="display: flex; justify-content: center;" data-aos="fade-left">
					<div class="contact-form margin-bottom">
						<h2 class="center-text">Kirim Pesan</h2>
							<div class="row">
								<form method="post" action="{{ url('/pesan/in/'.$idu) }}">
								  @csrf
									<div class="col-sm-12 margin-bottom center-text">
										<label>Nama</label>
										<input class="name-input" type="text" name="nama">
										<br>
										<label>Pesan</label>
										<input type="text" class="name-input" name="isi">
									</div>
									<div class="col-sm-12 center-text">
										<button class="btn" type="submit"><b>Kirim</b></button>
									</div>
								</form>


							</div><!-- row -->
					</div><!-- contact-form -->
				</div><!-- col-sm-6 -->

			</div><!-- row -->
		</div><!-- container -->
	</section><!-- section -->
	<!-- end = untuk list tamu -->



	
	<!-- start = footer  -->
	<footer style="background-color: #ffbf00;">
		<div class="container center-text" id="sosmed">
			
			<div class="logo-wrapper">
				<a class="logo" href="#"><img src="{{asset('assets/images/logo-black.png')}}" alt="Logo Image"></a>
				<i class="icon icon-star"></i>
			</div>
			
			<ul><p>Made with love <i class="icon-heart" aria-hidden="true"></i><br>Yuk lihat selengkapnya untuk buat undangan digital GRATIS juga, klik link dibawah ya.</p></ul>
			<ul class="footer-links">
				<li><a href="{{url('/')}}"><u>BUAT UNDANGAN JUGA</u></a></li>
			</ul>
			<ul class="social-icons">
				<li><a href="" target="_blank"><i class="icon icon-instagram"></i> NARATIVE.ID</a></li>
			</ul>
			<p class="copyright"> Copyright &copy;<script>document.write(new Date().getFullYear());</script>
			 -  Powered By <a href="https://narative.cf/" target="_blank"><u>Narative</u></a>.</p>
		</div>

<button class="btnmusic" onClick="togglePlay()" style="">
	<div class="playpause">
		<div class="button"></div>
	</div>
</button>
<audio id="lagu" loop>
  	<source src="{{url('Admin/assets/lagu/'.$lagu->namaFile)}}" type="audio/mp3">
</audio>
	</footer>
	<!--	 end = footer -->

	<script src="{{asset('assets/js/jquery-3.1.1.min.js')}}"></script>	
	<script src="{{asset('assets/js/tether.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.js')}}"></script>
	<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.fluidbox.min.js')}}"></script>
	<script src="{{asset('assets/js/scripts.js')}}"></script>
	<script src="{{asset('assets/js/main.js')}}"></script>
	
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 3000,
        once: true,
      });
	  
		function bukaundangan() {
			setTimeout(terbuka, 2000);
			}

		var myAudio = document.getElementById("lagu");
		var isPlaying = false;

		function togglePlay() {
		isPlaying ? myAudio.pause() : myAudio.play();
		};

		myAudio.onplaying = function() {
		isPlaying = true;
		};
		myAudio.onpause = function() {
		isPlaying = false;
		};

		function terbuka() {
			const target = document.getElementById("start");
			target.style.opacity = '0';
			target.addEventListener('transitionend', () => target.remove());
			togglePlay();
			}

			//Button play pause
			const playpause = document.querySelector('.playpause');

playpause.addEventListener('click', () => {
  playpause.classList.toggle('playing');
});

    </script>
	
</body>
</html>