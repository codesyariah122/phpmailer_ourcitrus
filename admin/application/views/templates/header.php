<?php
echo "<!--

-------------------------------------------------
Meskipun waktu terasa begitu lama 
menanti pertemuan itu...
kita sama sama mengunyah rindu
lumat semua rasa yang ada 
yang kau rasakan.
aku pun merasakannya

salam....
iim marlina (I will Always Love You)

pujiermanto - sidoarjo(2019)

------------------------------------------------
Jika kau tak berani lagi bertanya
kita akan jadi korban keputusan-keputusan
jangan kau penjarakan ucapanmu
jika kau menghamba pada ketakutan
kita akan memperpanjang barisan perbudakan

Wiji Thukul | 1996
-Ucapkan Kata-katamu-

------------------------------------------------
Semua Bengkok!
mana yang lurus?
Juga Hukum
Wiji Thukul | 1996
------------------------------------------------


-->
";
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
	<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="https://ourcitrus.id/wp-content/uploads/2019/09/favico.png">
<?php $background_header = base_url('assets/img/parallax31.jpg');?>
	<style>
.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	left:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}

	header {
  position: relative;
  background-color: black;
  height: 75vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

header video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}

@media (pointer: coarse) and (hover: none) {
  header {
    background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
  }
		.red-pop{
			color: red;
			font-weight: bold;
		}

		
		.jumboku
		{
					  background-image: url("<?=$background_header;?>");
					  background-repeat: no-repeat;
					  background-size: cover;
					  color: #faf0f0;
					  /*text-shadow: 3px 2px rgb(99, 126, 151);*/
					  height: 30em;
		}

	</style>
    <title><?=$title;?></title>
  </head>
  <body>
  

<!-- header video background -->
<header>
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="<?=base_url()?>assets/waterink.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3">EMAIL SERVICE OURCITRUS</h1>   
    <p class="lead text-center">
    <a class="btn btn-success btn-md" href="https://ourcitrus.id" role="button">ourcitrus website</a>

<a tabindex="0" data-toggle="popover" data-html="true" title="Detail Service" class="btn btn-danger" data-trigger="focus" data-content='Dear Member ourcitrus <br> saat ini anda dapat Menggunakan layanan email service untuk melakukan Request order via email yang bisa anda pilih di kolom Card Menu dibawah ini <span class="red-pop">Email Order</span> untuk order via email, Komplain/permasalahan login, komplain Bonus dan komplain lainnya seputar kemitraan anda di ourcitrus pilih card menu <span class="red-pop">Customer Service</span>, untuk revisi data kemitraan anda di ourcitrus seperti ganti password, ganti no rekening dan lain-lain bisa pilih card menu <span class="red-pop">Email Revisi</span>. <br/><br/> Salam Gemilang. <br> ourcitrus | For Today And Future'><font color="white">Read Me Please</font></a>

	<?php 
	//echo "<h1>".$_SERVER['REQUEST_URI']."</h1>";
	if( $_SERVER['REQUEST_URI'] == '/'): 
	echo ''; 
	elseif($_SERVER['REQUEST_URI'] == '/EmailService/'):
	echo '';
	elseif($_SERVER['REQUEST_URI'] == '/EmailService'):
	echo '';
	elseif($_SERVER['REQUEST_URI'] == '/MailSend/success_page?id=success'):
	echo '';
	else:
	?>
	<a href="<?=base_url()?>EmailService" class="btn btn-warning btn-block mt-3"><font color="white">Kembali</font></a>
	<?php endif;?>

  </p>
		
        <p class="lead mb-0">Kami Akan Menjadi Jembatan Menuju kesuksesan Anda. <b>Salam gemilang ...</b></p>
		<hr style="color:salmon;">
		<small class="mt-4">OURCITRUS BY PT.GEMILANG CITRUS BERJAYA</small>
      </div>
    </div>
  </div>
</header>

    
