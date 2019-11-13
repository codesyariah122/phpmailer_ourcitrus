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
</script>

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
	</style>
    <title><?=$title;?></title>
  </head>
  <body>

    