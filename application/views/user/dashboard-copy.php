
<!doctype html>
<html>
<head>
	<!-- Page Header -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- <meta name="description" content=""> -->
		<!-- <meta name="author" content=""> -->
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">

		<title>Tingkat Kematangan Keselarasan Sistem Informasi dan Bisnis Organisasi</title>
		<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/contract.png" />

		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- Custom fonts for this template -->
		<link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

		<!-- Custom styles for this template -->
		<!-- <link href="<?php echo base_url(); ?>assets/css/agency.min.css" rel="stylesheet"> -->

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/linearicons.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nice-select.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
		<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css"> -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
</head>
<body>
	


		<!-- Header -->
			<div class="oz-body-wrap">

		<!-- Start about Area -->
		<section class="about-area pt-100 pb-100">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="story-content">
							<h2>Selamat Datang di aplikasi<br>
							<span>Evaluasi Tingkat Pemakaian Sistem Informasi !</span></h2>
							<p class="mt-30">Aplikasi ini dibuat untuk kepentingan penelitian. Tujuan pembuatan aplikasi ini untuk mengetahui ukuran pemakaian Sistem Informasi telah diterapkan dan diukur keselarasan strateginya dengan strategi organisasi. Penilaian dilakukan dengan mengembangkan model kerangka kerja Strategy Alignment Maturity Model (SAMM) yang menilai 6 indikator / dimensi. Hasil pengukuran akan diperoleh setelah responden mengisi kuisioner ini. <br> <b>Link URL yang tertera dalam isi halaman ini digunakan untuk mengakses hasil pengukuran tingkat kematangan organisasi.</b> <br><br>
							<h2>Untuk memulai penilaian, silahkan klik tombol dibawah ini</h2>
							</p>
							<a href="#" data-toggle="modal" data-target="#myModal" class="genric-btn primary-border circle arrow">View More<span class="lnr lnr-arrow-right"></span></a>
						</div>
					</div>
					<div class="col-lg-6">
						<img class="img-fluid d-flex mx-auto" src="<?php echo base_url(); ?>assets/img/home-bg.png" alt="">
					</div>
				</div>
			</div>
		</section>
		<!-- End Team Force Area -->

	</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Form Login</h4>
				<!-- <button type="button" style="align-items: right;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
			</div>
			<div class="modal-body">
							<?php echo form_open('index.php/login/proses_tambah_user'); ?>
							<!-- <form action="<?php //echo base_url(). 'index.php/login/proses_tambah_user'; ?>" role="form" method="post"> -->
								<!-- <div class="form-group">
							 <label for="masukkanNama">Nama Pengguna : </label> 
							 <input type="text" name="username" class="form-control" placeholder="Masukkan nama anda" required="">
								</div> -->
								<!-- <div class="form-group">
							 <label for="">Email : </label> 
							 <input type="email" name="email" class="form-control" placeholder="Masukkan email" required="">
								</div>	 -->							
								<div class="form-group">
								<label for="masukkanJabatan">Jabatan Pekerjaan :</label>
								<!-- <input type="text" name="jabatan" class="form-control" placeholder="Masukkan jabatan anda saat ini"><br> -->
								<select class="form-control" name="jabatan" required="">
										<!-- fungsional -->
										<option value="" disabled selected hidden>Pilih di bagian/unit kerja anda saat ini </option>
										<optgroup label="Kelompok Jabatan Teknologi Informasi">
											<option value="DekanA">Dekan</option>
											<option value="Wakil DekanA">Wakil Dekan </option>
											<option value="DirekturA">Direktur</option>                      
											<option value="Kepala BiroA">Kepala Biro</option>                      
											<option value="Kepala DivisiA">Kepala Divisi</option>                      
											<option value="Kepala BagianA">Kepala Bagian</option>                      
											<option value="Kepala Sub BagianA">Kepala Sub Bagian</option>                   
											<option value="Kepala SeksiA">Kepala Seksi</option>                      
											<option value="StaffA">Staff</option>                      
										</optgroup>
										<optgroup label="Kelompok Jabatan Non Teknologi Informasi">
											<option value="Dekan">Dekan</option>
											<option value="Wakil Dekan">Wakil Dekan </option>
											<option value="Direktur">Direktur</option>                      
											<option value="Kepala Biro">Kepala Biro</option>                      
											<option value="Kepala Divisi">Kepala Divisi</option>                      
											<option value="Kepala Bagian">Kepala Bagian</option>                      
											<option value="Kepala Sub Bagian">Kepala Sub Bagian</option>                      
											<option value="Kepala Seksi">Kepala Seksi</option>                    
											<option value="Staff">Staff</option>                    
									</optgroup>
										<!-- end of fungsional -->
								</select>
					
								</div>
		
								<div class="form-group">
								<label for="masukkanJabatan">Enterprise / Organisasi / Perguruan Tinggi :</label>
								<!-- <input type="text" name="jabatan" class="form-control" placeholder="Masukkan jabatan anda saat ini"><br> -->
								<!-- <select class="form-control" name="kategori" required="" readonly="readonly">
											<option value="Universitas Pendidikan Indonesia" selected>Universitas Pendidikan Indonesia</option>
									 -->
										<!-- fungsional -->
										<!-- <option value="" disabled selected hidden>Pilih asal perguruan tinggi </option> -->
										<!-- <optgroup label="Perguruan Tinggi Negeri">
											<option value="Institut Teknologi Sepuluh November">Institut Teknologi Sepuluh November</option>
											<option value="Universitas Hasanudin">Universitas Hasanudin</option>
											<option value="Universitas Diponegoro">Universitas Diponegoro</option>
											<option value="Universitas Padjadjaran">Universitas Padjadjaran</option>       
											<option value="Universitas Airlangga">Universitas Airlangga</option>             
											<option value="Universitas Sumatera Utara">Universitas Sumatera Utara</option>
											<option value="Universitas Indonesia">Universitas Indonesia</option>
											<option value="Universitas Gadjah Mada">Universitas Gadjah Mada</option>
											<option value="Institut Pertanian Bogor">Institut Pertanian Bogor</option>
											<option value="Institut Teknologi Bandung">Institut Teknologi Bandung</option>                      
										</optgroup> -->
										<!-- <optgroup label="Perguruan Tinggi Swasta">
											<option value="Politeknik TEDC">Politeknik TEDC</option>
											<option value="Sekolah Tinggi Bahasa Asing Yapari">Sekolah Tinggi Bahasa Asing Yapari</option>
											<option value="Universitas Islam Bandung">Universitas Islam Bandung</option>
											<option value="Universitas Komputer Indonesia">Universitas Komputer Indonesia</option>
											<option value="Universitas Kristen Maranatha">Universitas Kristen Maranatha</option>
											<option value="Universitas Pakuan">Universitas Pakuan</option>
											<option value="Universitas Pasundan">Universitas Pasundan</option>
											<option value="Akademi Keuangan dan Bisnis Indonesia Internasional">Akademi Keuangan dan Bisnis Indonesia Internasional</option>
											<option value="Universitas Telkom">Universitas Telkom</option>
									</optgroup> -->
										<!-- end of fungsional -->
								<!-- </select> -->
								<br><input type="hidden" name="kategori" value="Universitas Pendidikan Indonesia" />Universitas Pendidikan Indonesia
									
								</div>
								<hr>	
								<!-- Bagian Validasi -->
									
								<div class="form-group">
									<table>
									 <!--  <th class="warning">Pilih Jawaban untuk Pertanyaan di bawah ini :</th> -->
										<tr class=" ">
											<td>
												<p>Apakah anda pernah menjadi bagian dari proses perencanaan strategi organisasi?</p>
												<div class="radio">
													<label>
												<input type="radio" name="a1" value=1 required="">Ya, pernah <br>
													</label>
												</div>
												<div class="radio">
													<label>
												<input type="radio" name="a1" value=0>Tidak <br>
													</label>
												</div>
											</td>
										</tr>
										<tr class=" ">
											<td>
												<p>Apakah anda pernah mengikuti proses perencanaan strategi organisasi dengan metode kolaborasi (perencanaan melibatkan banyak elemen dan terjadi sharing knowledge)?</p>
												<div class="radio">
													<label>
												<input type="radio" name="a2" value=1 required="">Ya, pernah <br>
													</label>
												</div>
												<div class="radio">
													<label>
												<input type="radio" name="a2" value=0>Tidak <br>
													</label>
												</div>
											</td>
										</tr>
<!--                     <tr class=" ">
											<td>
												<p>Termasuk ke dalam kategori mana enterprise / organisasi anda?</p>
												<div class="radio">
													<label>
														<input type="radio" name="e1" value=1>Perguruan Tinggi Negeri<br>
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" name="e1" value=2>Perguruan Tinggi Swasta<br>
													</label>
												</div>
												<input type="radio" name="e1" value=3>Bidang Kesehatan<br>
												<input type="radio" name="e1" value=4>Bidang Pariwisata<br>
												<input type="radio" name="e1" value=5>Bidang Pemerintahan<br>
											</td>
										</tr>
 -->                  </table>
							<?php form_close(); ?>
								</div>  
					<!-- end of bagian validasi -->
			</div>
			<div class="modal-footer">
				<input type="submit" value="Lanjutkan" class="btn btn-primary">
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	<!-- Modal -->
	
	<script>
function inputUserForm(){
		var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		var nama = $('#masukkanNama').val();
		var jabatan = $('#masukkanJabatan').val();
		
		if(nama.trim() == '' ){
	alert('Masukkan nama Anda.');
				$('#masukkanNama').focus();
	return false;
 }else if(jabatan.trim() == '' ){
	alert('Masukkan informasi jabatan anda saat ini.');
				$('#masukkanJabatan').focus();
	return false;
 }else{

alert("<?php $this->session->flashdata('error'); ?>");
</script>


	<!-- Bootstrap core JavaScript -->
		<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Plugin JavaScript -->
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

		<!-- Contact form JavaScript -->
		<script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>

		<!-- Custom scripts for this template -->
		<script src="<?php echo base_url(); ?>assets/js/agency.min.js"></script>

		<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.nice-select.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.counterup.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/waypoints.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>
</html>