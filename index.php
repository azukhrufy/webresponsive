<!DOCTYPE html>
<html>
<head>
	<title>Web responsive</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="navbar.css" >
<link rel="stylesheet" type="text/css" href="content.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript">
	/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
	function myFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
	    x.className += " responsive";
	  } else {
	    x.className = "topnav";
	  }
} 
</script>

<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div class="content">
	<img src="img.jpg" style="max-width: 100%; max-height: 450px;">

	<h1>Sekilas Tentang SMAN 1 SINDANG</h1>
	<img src="sasi.png">
	<br>
	<div>
		<p style="text-align: justify;">
			SMAN 1 Sindang Indramayu berdiri sejak tahun 1961, terletak di Jalan Letjen MT Haryono Kecamatan Sindang Kabupaten Indramayu.Pada awal berdiri namanya SMAN Indramayu, dan beberapa kali mengalami perubahan nomenklatur (nama) sekolah , yaitu SMAN 1 Indramayu, SMUN 1 Sindang, dan sekarang SMAN 1 Sindang Indramayu.
		</p>
		<p style="text-align: justify;">
			Pada tahun 2004 dan 2007, memperoleh Akreditasi A (amat baik) dari Badan Akreditasi Nasional Sekolah. Pada tahun 2007, berdasarkan Keputusan Direktur Pembinaan SMA Direktorat Jenderal Manajemen Pendidikan Dasar dan Menengah Departemen Pendidikan Nasional nomor 697/C4/MN/2007 tanggal 18 Juli 2007, ditetapkan sebagai Rintisan Sekolah Bertaraf Internasional (RSBI). Pada tahun 2009 berhasil meraih Serifikat ISO 9001 : 2008 dari Badan Sertifikasi Internasional. 
		</p>
	</div>
</div>

</body>
</html>