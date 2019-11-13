<div class="jumbotron">
  <h1 class="display-4 text-center">OURCITRUS <br/> Email Service</h1>
  <p class="lead text-center">Selamat Datang Dihalaman mail service <br/> OURCITRUS | PT. GEMILANG CITRUS BERJAYA</p>
  <div class="container">
	</div>
  <hr class="my-4">
  <p class="lead text-center">
    <a class="btn btn-success btn-md" href="https://ourcitrus.id/product" role="button">ourcitrus website</a>
  </p>
</div>


<b><?php if(isset($filenames)) echo "Successfully uploaded ".count($filenames)." files"; ?></b>
    
<div class="container">
  <div class="row">
  <?php if($_GET['id'] == "success"):?>
    <?php $this->view('message.php'); ?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Dear Member</strong> Terima kasih sudah menghubungi kami, selanjutnya pesan anda akan segera di proses oleh team management kami.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
		</div>
	</div>
	
	<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">OURCITRUS Website</h5>
        <p class="card-text">Anda sudah melakukan proses kirim pesan melalui aplikasi mail service kami, untuk kembali ke halaman utama, silahkan klik tombol dibawah.</p>
        <a href="https://ourcitrus.id/" class="btn btn-primary">Go ourcitrus.id</a>
      </div>
    </div>
  </div>
  
  <?php endif;?>
  
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Kembali Ke Halaman Mail Service</h5>
        <p class="card-text">Untuk kembali ke halaman mail service silahkan klik tombol di bawah.</p>
        <a href="<?=base_url()?>EmailService" class="btn btn-primary">Back To Message</a>
      </div>
    </div>
  </div>
</div>

	
</div>
<br/><br/>