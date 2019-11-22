<!doctype html>

<?php
echo "<!--
Jika kau tak berani lagi bertanya
kita akan jadi korban keputusan-keputusan
jangan kau penjarakan ucapanmu
jika kau menghamba pada ketakutan
kita akan memperpanjang barisan perbudakan

Wiji Thukul | 1996
-Ucapkan Kata-katamu-
-->";
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>	
<script type="text/javascript">
$(document).ready(function (e){
$("#frmEnquiry").on('submit',(function(e){
	e.preventDefault();
	$('#loader-icon').show();
	var valid;	
	valid = validateContact();
	if(valid) {
		$.ajax({
		url: "<?=base_url()?>/MailSend.php?>",
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){
		$("#mail-status").html(data);
		$('#loader-icon').hide();
		},
		error: function(){} 	        
		
		});
	}
}));

function validateContact() {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	$(".info").html('');
	$("#userName").removeClass("invalid");
	$("#userEmail").removeClass("invalid");
	$("#subject").removeClass("invalid");
	$("#content").removeClass("invalid");
	
	if(!$("#userName").val()) {
		$("#userName").addClass("invalid");
        $("#userName").attr("title","Required");
        valid = false;
	}
    if(!$("#userEmail").val()) {
        $("#userEmail").addClass("invalid");
        $("#userEmail").attr("title","Required");
        valid = false;
    }
    if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#userEmail").addClass("invalid");
        $("#userEmail").attr("title","Invalid Email");
        valid = false;
    }
	if(!$("#subject").val()) {
		$("#subject").addClass("invalid");
        $("#subject").attr("title","Required");
		valid = false;
	}
	if(!$("#content").val()) {
		$("#content").addClass("invalid");
        $("#content").attr("title","Required");
		valid = false;
	}
	
	return valid;
}

});

 var jumboHeight = $('.jumbotron').outerHeight();
function parallax(){
    var scrolled = $(window).scrollTop();
    $('.bg').css('height', (jumboHeight-scrolled) + 'px');
}

$(window).scroll(function(e){
    parallax();
});
</script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<script>
  var typed = new Typed('#typed', {
    stringsElement: '#typed-strings'
  });
</script>
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">	
	<style>
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
}
		.red-pop{
			color: red;
			font-weight: bold;
		}
		
		#sticky-footer {
		flex-shrink: none;
		}
		.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  line-height: 60px; /* Vertically center the text there */
  background-color: #f5f5f5;
}

body > .container {
  padding: 60px 15px 0;
}

.footer > .container {
  padding-right: 15px;
  padding-left: 15px;
}

.jumboku
{
              background-image: url("<?=base_url()?>assets/img/parallax31.jpg");
              background-size: cover;
              color: #faf0f0;
              /*text-shadow: 3px 2px rgb(99, 126, 151);*/
			  height: 30em;
}
.card-columns {
  @include media-breakpoint-only(xl) {
    column-count: 5;
  }
  @include media-breakpoint-only(lg) {
    column-count: 4;
  }
  @include media-breakpoint-only(md) {
    column-count: 3;
  }
  @include media-breakpoint-only(sm) {
    column-count: 2;
  }
}

@media (min-width: 48em) {
    .card-columns {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3;
    }
}

@media (min-width: 62em) {
    .card-columns {
        -webkit-column-count: 4;
        -moz-column-count: 4;
        column-count: 4;
    }
}

@media (min-width: 75em) {
    .card-columns {
        -webkit-column-count: 5;
        -moz-column-count: 5;
        column-count: 5;
    }
}

	</style>
    <title><?=$title;?></title>
  </head>
  <body>
  
<div class="jumbotron jumboku bg-dark">
  <div class="container text-center mt-4">
<h1 class="display-4 text-dark">OURCITRUS <br/> Email Service&nbsp;<i class="fa fa-paper-plane fa-lg" style="color:ForestGreen;"></i></h1>
</div>

    <hr style="color:Goldenrod !important;">
    <p class="lead text-center">
    <a class="btn btn-success btn-md" href="https://ourcitrus.id/product" role="button">ourcitrus website</a>
	<a data-toggle="popover" data-html="true" title="Detail Service" class="btn btn-danger" data-content='Dear Member ourcitrus <br> saat ini anda dapat Menggunakan layanan email service untuk melakukan Request order via email yang bisa anda pilih di kolom Card Menu dibawah ini <span class="red-pop">Email Order</span> untuk order via email, Komplain/permasalahan login, komplain Bonus dan komplain lainnya seputar kemitraan anda di ourcitrus pilih card menu <span class="red-pop">Customer Service</span>, untuk revisi data kemitraan anda di ourcitrus seperti ganti password, ganti no rekening dan lain-lain bisa pilih card menu <span class="red-pop">Email Revisi</span>. <br/><br/> Salam Gemilang. <br> ourcitrus | For Today And Future'><font color="white">Read Me Please</font></a>
	<?php 
	//echo $_SERVER['REQUEST_URI'];
	if( $_SERVER['REQUEST_URI'] == '/EmailService' || $_SERVER['REQUEST_URI'] == '/MailSend/success_page?id=success'): 
	echo ''; 
	else:
	?>
	<a href="<?=base_url()?>EmailService" class="btn btn-warning btn-block mt-3"><font color="white">Kembali</font></a>
	<?php endif;?>

  </p>

  </div>
  <!-- /.container -->
</div>

    