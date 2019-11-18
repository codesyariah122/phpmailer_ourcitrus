<div class="container">
<h1 class="text-center">From Email order</h1>
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
	<?php echo form_error('username'); ?>
	<br/><small>username login kemitraan anda di ourcitrus</small>
    <input type="text"  class="demoInputBox form-control" value="<?=set_value('username');?>" id="username" name="username" placeholder="username_anda">
	</div>
  </div>
  
  <div class="col-sm-8">
  <div class="form-group">
    <label for="subject">Subject Email</label>
	<select id="subject" name="subject"  class="demoInputBox form-control">
	<option value="email-order">Email Order</option>
	</select>  
	</div>
  </div>
  
  <div class="col-sm-8">
				<div class="form-group">
                     <label for="image">Attachment </label><br/>
					<small>Silahkan Upload File Invoice Yang sebelumnya telah anda download dan input data orderan anda.<br/><font color="firebrick">( jika ada bukti transfer bisa di upload berbarengan bersama file invoice nya)</font></small>
            <input type="file" name="attachment[]" class="demoInputBox form-control" multiple><br/>
			<small><font color="firebrick">(Belum Download File Invoice, Klik Link Download Dibawah ini)</font></small><br/>
			<a href="<?=base_url()?>uploads/INVOICE_BERJAYA.xlsx" class="btn btn-info mt-2 btn-block">Download Invoice</a>
					</div>
  </div>
  
<div class="col-sm-8">
  <div class="form-group">
    <label for="pesan">Isi Pesan</label>
	<?php echo form_error('content'); ?><br/>
	<small>Untuk Melakukan order bisa langsung inputkan detail produk yang akan anda order di kolom pesan di bawah ini</small>
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


