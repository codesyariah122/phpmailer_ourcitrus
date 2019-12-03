<section class="content-header">
      <h1>
       Email Revisi
        <small>Email Revisi Service</small>
      </h1>

      <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <li class="active">Revisi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <?php $this->view('message.php'); ?>

    <div class="box">
        <div class="box-header">
                    <h3 class="box-title">Email Revisi</h3>
                   
            </div>

                        <?php 
                        if($row->result() == NULL):
                        $this->view('null'); 
                        endif;
                        ?>
  

        <div class="box-body table-responsive">
        <table class="table table-bordered table-hover"  id="table1">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Nama</th>
					<th>Email</th>
					<th>Username</th>
					<th>Subject</th>
					<th>Pesan</th>
					<th>Files</th>
					<th>Tanggal</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach($row->result() as $index => $key):?>
                <tr>
                    <td class="text-center"><?=$no++?></td>
                    <td><?=$key->nama?></td>
					<td><?=$key->email?></td>
					<td><?=$key->username?></td>
					<td><?=$key->subject?></td>
					<td><?=$key->pesan?></td>
					<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#files_<?=$key->username?>">
					  View Files
					</button></td>
					<td><?=$key->created?></td>
                    <td class="text-center">
                        <a href="<?=site_url('email/del/'.$key->id)?>" onclick="return confirm('Yakin akan menghapus data ? ')" class="btn btn-danger btn-xs">
                        <i class="fa fa-trash"></i> Delete </a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
            </table>
        </div>
</div>

<!-- Modal -->
<?php foreach($usernamefiles as $username):?>
<div class="modal fade" id="files_<?=$username->username?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
               <div class="box-body table-responsive">
        <table class="table table-bordered table-hover"  id="table1">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>File Name</th>
					<th>Username</th>
					<th>Uploaded On</th>
                </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach($files->result() as $index):?>
                <tr>
                    <td class="text-center"><?=$no++?></td>
                    <td><img src="<?=base_url('uploads/email/'.$index->file_name)?>" width="250" height="200"><br/>
					</td>
					<td><?=$index->username?></td>
					<td><?=$index->uploaded_on?></td>
                </tr>
            <?php endforeach;?>
   </tbody>
            </table>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>
</section>