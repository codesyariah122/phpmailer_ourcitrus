<?php
echo "<!--
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">	
	
	<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="https://ourcitrus.id/wp-content/uploads/2019/09/favico.png">
	<style>
		.red-pop{
			color: red;
			font-weight: bold;
		}
		

		.jumboku
		{
					  background-image: url("<?=base_url()?>assets/img/parallax31.jpg");
					  background-size: cover;
					  color: #faf0f0;
					  /*text-shadow: 3px 2px rgb(99, 126, 151);*/
					  height: 30em;
		}
		
	</style>
    <title><?=$title;?></title>
  </head>
  <body>
  
<div class="jumbotron jumboku bg-dark">
  <div class="container text-center mt-4">
<h1 class="display-4"><font color="Goldenrod">OURCITRUS <br/> Email Service&nbsp;</font><i class="fa fa-paper-plane fa-lg" style="color:ForestGreen;"></i></h1>
</div>

    <hr style="color:Goldenrod !important;">
    <p class="lead text-center">
    <a class="btn btn-success btn-md" href="https://ourcitrus.id/product" role="button">ourcitrus website</a>
	<a data-toggle="popover" data-html="true" title="Detail Service" class="btn btn-danger" data-content='Dear Member ourcitrus <br> saat ini anda dapat Menggunakan layanan email service untuk melakukan Request order via email yang bisa anda pilih di kolom Card Menu dibawah ini <span class="red-pop">Email Order</span> untuk order via email, Komplain/permasalahan login, komplain Bonus dan komplain lainnya seputar kemitraan anda di ourcitrus pilih card menu <span class="red-pop">Customer Service</span>, untuk revisi data kemitraan anda di ourcitrus seperti ganti password, ganti no rekening dan lain-lain bisa pilih card menu <span class="red-pop">Email Revisi</span>. <br/><br/> Salam Gemilang. <br> ourcitrus | For Today And Future'><font color="white">Read Me Please</font></a>
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

  </div>
  <!-- /.container -->
</div>

    