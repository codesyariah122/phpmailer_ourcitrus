
<div class="jumbotron" style="background-color:#000000;">
  <h1 class="display-4 text-center text-white">OURCITRUS <br/> Email Service</h1>
  <p class="lead text-center text-white">Selamat Datang Dihalaman mail service <br/> OURCITRUS | PT. GEMILANG CITRUS BERJAYA</p>
  <div class="container">
	</div>
  <hr class="my-4 text-white" style="color:#ffffff;">
  <p class="lead text-center">
    <a class="btn btn-success btn-md" href="https://ourcitrus.id/product" role="button">ourcitrus website</a>
	<a href="/#ForToday|Future" data-toggle="popover" data-html="true" title="Detail Service" class="btn btn-danger" data-content='Dear Member ourcitrus <br> saat ini anda dapat Menggunakan layanan email service untuk melakukan Request order via email yang bisa anda pilih di kolom input pada bagian list subject <span class="red-pop">Email Order</span> untuk order via email, Komplain/permasalahan login dan service lainnya mengenai kemitraan anda di ourcitrus bisa pilih list subject <span class="red-pop">Customer Service</span>, untuk revisi order bisa pilih <span class="red-pop">Email Revisi</span>. <br/><br/> Salam Gemilang. <br> ourcitrus | For Today And Future'>Read Me Please</a>

  </p>
</div>

<div class="container">
<div class="mx-auto">

<?php $this->view('message.php'); ?>

<?= form_open_multipart('MailSend') ?>

<div class="col-sm-8">
  <div class="form-group">
    <label for="name">Nama Lengkap</label>
    <input type="text" class="demoInputBox form-control" id="name" name="userName" 
	placeholder="Nama Lengkap Anda" required>
  </div>
  </div>
  
<div class="col-sm-8">
  <div class="form-group">
    <label for="email">Alamat Email</label>
    <input type="email"  class="demoInputBox form-control" id="email" name="userEmail" placeholder="email_anda@email.com" required>
  </div>
  </div>
  
  <div class="col-sm-8">
  <div class="form-group">
    <label for="subject">Subject Email</label>
	<select required id="subject" name="subject"  class="demoInputBox form-control">
	<option value="- pilih -">- Pilih -</option>
	<?php foreach($subject as $row):?>
	<option value="<?=$row->name?>"><?=$row->name?></option>
	<?php endforeach;?>
	</select>  
	</div>
  </div>
  
  <div class="col-sm-8">
				<div class="form-group">
                     <label for="image">Attachment </label>
            <input type="file" name="attachment[]" class="demoInputBox form-control" multiple><br/>
                 </div>
  </div>
  
<div class="col-sm-8">
  <div class="form-group">
    <label for="pesan">Isi Pesan</label>
    <textarea name="content" class="demoInputBox ckeditor form-control" id="pesan" rows="3" cols="5" required> </textarea>
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
<br/><br/>