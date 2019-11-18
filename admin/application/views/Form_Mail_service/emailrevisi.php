<div class="container">
<h1 class="text-center">From Email Revisi</h1>
<div class="row">
<?php $this->view('message.php'); ?>
<?= form_open_multipart('') ?>
<div class="col-sm-8">
  <div class="form-group">
    <label for="name">Nama Lengkap</label>
		<?php echo form_error('fullName'); ?>
    <input type="text" class="demoInputBox form-control" id="name" value="<?=set_value('fullName');?>" name="fullName" placeholder="Nama Lengkap Anda">
  </div>
  </div>
  
<div class="col-sm-8">
  <div class="form-group">
    <label for="email">Alamat Email Anda</label>
		<?php echo form_error('userEmail'); ?>
    <input type="email"  class="demoInputBox form-control" id="email" value="<?=set_value('userEmail');?>" name="userEmail" placeholder="email_anda@email.com">
  </div>
  </div>
  
  <div class="form-group">
  <p>
    <button class="btn btn-info ml-3" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      Ganti No Rekening
    </button>
  </p>
  <div class="collapse" id="collapseExample">
    <div class="card card-body">
	
  <div class="col-sm-8">
    <label for="username">Username</label>
	<br/><small>username login kemitraan anda di ourcitrus</small>
    <input type="text"  class="demoInputBox form-control" id="username" name="username1" placeholder="username_anda">
  </div>
  
	<div class="col-sm-8">
        <label for="bank">Nama Bank</label>
      <br/><small></small>
        <input type="text"  class="demoInputBox form-control" id="bank" name="bank" placeholder="Bank XXX">
      </div>
	  
      <div class="col-sm-8">
        <label for="norek">No Rekening</label>
      <br/><small>isi dengan no rekening baru</small>
        <input type="text"  class="demoInputBox form-control" id="norek" name="norek" placeholder="rek.xxxxxx">
      </div>
	  
      </div>
    </div>
  </div>
  
   <div class="form-group">
  <small class="text-center">Ganti password Login( jika anda lupa password )</small>
  <p>
    <button class="btn btn-success ml-3" type="button" data-toggle="collapse" data-target="#aduan" aria-expanded="false" aria-controls="collapseExample">
      Ganti Password Login
    </button>
  </p>
   <div class="collapse" id="aduan">
    <div class="card card-body">
 <div class="col-sm-8">
    <label for="username2">Username</label>
	<br/><small>username login kemitraan anda di ourcitrus</small>
    <input type="text"  class="demoInputBox form-control" id="username2" name="username2" placeholder="username_anda">
  </div>
 </div>
 </div>
 </div>
  
  <div class="col-sm-8">
  <div class="form-group">
    <label for="subject">Subject Email</label>
	<select id="subject" name="subject"  class="demoInputBox form-control">
	<option value="email-revisi">Email Revisi</option>
	</select>  
	</div>
  </div>
  
  <div class="col-sm-8">
				<div class="form-group">
            <label for="image">Attachment </label><br/>
					<small>Silahkan klik tombol browse untuk mengupload file.</small>
            <input type="file" name="attachment[]" class="demoInputBox form-control" multiple><br/>
               </div>
  </div>
  
<div class="col-sm-8">
  <div class="form-group">
    <label for="pesan">Isi Pesan</label>
	<?php echo form_error('content'); ?><br/>
	<small>Apabila ada pesan yang ingin disampaikan kepada management silahkan ketik pesan anda di field input pesan dibawah ini.</small>
    <textarea name="content" class="demoInputBox ckeditor form-control" id="pesan" rows="3" cols="5"> 
	 <?=set_value('content');?>
	</textarea>
  </div>
  </div>
  
<div class="col-sm-8">
  <div class="form-group">
	<button type="submit" name="add" class="btn btn-primary">Send Now</button>
	</div>
	</div>
<?= form_close() ?>
</div>
</div>