<div class="container">
<h1 class="text-center">From Customer Service</h1>
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
  
<div class="col-sm-8">
  <div class="form-group">
    <label for="username">Username</label>
	<br/><small>username login kemitraan anda di ourcitrus</small>
    <input type="text"  class="demoInputBox form-control" id="username" name="username" placeholder="username_anda">
  </div>
</div>
  
    <div class="col-sm-8">
  <div class="form-group">
    <label for="notelp">No Telp</label>
		<?php echo form_error('notelp'); ?>
    <input type="number"  class="demoInputBox form-control" id="notelp" value="<?=set_value('notelp');?>" name="notelp" placeholder="+62 xxxx xxxx">
  </div>
  </div>
  
    <div class="col-sm-8">
  <div class="form-group">
    <label for="wa">No WhatsApp</label>
		<?php echo form_error('wa'); ?>
    <input type="number"  class="demoInputBox form-control" id="wa" value="<?=set_value('wa');?>" name="wa" placeholder="+62 xxxx xxxx">
  </div>
  </div>
  
  <div class="form-group">
  <p>
    <button class="btn btn-info ml-3 btn-block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      Ganti No Rekening
    </button>
  </p>
  <div class="collapse" id="collapseExample">
    <div class="card card-body">
	 <div class="col-sm-8">
    <label for="username">Username</label>
	<br/><small>username login kemitraan anda di ourcitrus</small>
    <input type="text"  class="demoInputBox form-control" id="username" name="gantinorek" placeholder="username_anda">
  </div>
	<div class="col-sm-8">
        <label for="bank">Nama Bank sebelumnya</label>
      <br/><small></small>
        <input type="text"  class="demoInputBox form-control" id="bank" name="banksebelumnya" placeholder="Bank XXX">
      </div>
	  
      <div class="col-sm-8">
        <label for="norek">No Rekening sebelumnya</label>
      <br/><small>isi dengan no rekening sebelumnya</small>
        <input type="text"  class="demoInputBox form-control" id="norek" name="noreksebelumnya" placeholder="rek.xxxxxx">
      </div>
	  
	  <div class="col-sm-8">
        <label for="bank">Nama Bank Baru</label>
      <br/><small></small>
        <input type="text"  class="demoInputBox form-control" id="bank" name="bankbaru" placeholder="Bank XXX">
      </div>
	  
      <div class="col-sm-8">
        <label for="norek">No Rekening Baru</label>
      <br/><small>isi dengan no rekening baru</small>
        <input type="text"  class="demoInputBox form-control" id="norek" name="norekbaru" placeholder="rek.xxxxxx">
      </div>
	  
      </div>
    </div>
  </div>
  
  <div class="form-group">
  <p>
    <button class="btn btn-danger ml-3 btn-block" type="button" data-toggle="collapse" data-target="#collapsebonus" aria-expanded="false" aria-controls="collapseExample">
      Komplain Bonus
    </button>
  </p>
  <div class="collapse" id="collapsebonus">
    <div class="card card-body">
	 <div class="col-sm-8">
    <label for="username">Username</label>
	<br/><small>username login kemitraan anda di ourcitrus</small>
    <input type="text"  class="demoInputBox form-control" id="username" name="bonus" placeholder="username_anda">
  </div>
  
  <div class="col-sm-8">
        <label for="bank">Nama Bank</label>
      <br/><small></small>
        <input type="text"  class="demoInputBox form-control" id="banksebelumnya" name="bank" placeholder="Bank XXX">
      </div>
	  
      <div class="col-sm-8">
        <label for="norek">No Rekening </label>
      <br/><small>isi dengan no rekening</small>
        <input type="text"  class="demoInputBox form-control" id="noreksebelumnya" name="norek" placeholder="rek.xxxxxx">
      </div>
	  
	  
      </div>
    </div>
  </div>
  
  <div class="form-group">
  <p>
    <button class="btn btn-warning ml-3 btn-block" type="button" data-toggle="collapse" data-target="#collapsepassword" aria-expanded="false" aria-controls="collapseExample">
      <font color="white">Lupa / ganti Password Login ourcitrus</font>
    </button>
  </p>
  <div class="collapse" id="collapsepassword">
    <div class="card card-body">
	 <div class="col-sm-8">
	 	<input type="hidden"  class="demoInputBox form-control" name="komplain_bonus">
    <label for="username">Username</label>
	<br/><small>username login kemitraan anda di ourcitrus</small>
    <input type="text"  class="demoInputBox form-control" id="username" name="loginerr" placeholder="username_anda">
  </div>
  
      </div>
    </div>
  </div>
  
  <div class="col-sm-8">
  <div class="form-group">
    <label for="subject">Subject Email</label>
	<select id="subject" name="subject"  class="demoInputBox form-control">
	<option value="customer-service">Customer Service</option>
	</select>  
	</div>
  </div>
  
  <div class="col-sm-8">
				<div class="form-group">
                     <label for="image">Attachment </label><br/>
					<small>Silahkan klik tombol browse untuk mengupload file berupa gambar bukti transfer atau file document apapun.</small>
            <input type="file" name="attachment[]" class="demoInputBox form-control" multiple><br/>
                 </div>
  </div>
  
<div class="col-sm-8">
  <div class="form-group">
    <label for="pesan">Isi Pesan</label>
	<?php echo form_error('content'); ?><br/>
	<small>Untuk menyampaikan komplain anda, silahkan mengisi di field komplain textarea dibawah ini.</small>
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