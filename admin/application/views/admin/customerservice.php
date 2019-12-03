<section class="content-header">
      <h1>
       customerservice
        <small>OurCitrus Service</small>
      </h1>

      <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <li class="active">Customer Service</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <?php $this->view('message.php'); ?>

    <div class="box">
        <div class="box-header">
                    <h3 class="box-title">Customer Service</h3>
                   
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
					<th>Username</th>
					<th>Email</th>
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
					<td><?=$key->username?></td>
					<td><?=$key->email?></td>
					<td><?=$key->subject?></td>
					<td><?=$key->pesan?></td>
					<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#files">
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
<div class="modal fade" id="files" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <?php $no=1; foreach($files->result() as $index => $key):?>
                <tr>
                    <td class="text-center"><?=$no++?></td>
                    <td><img src="<?=base_url('uploads/email/'.$key->file_name)?>" width="200" height="250"></td>
					<td><?=$key->username?></td>
					<td><?=$key->uploaded_on?></td>
                    <td class="text-center">
                        <a href="<?=site_url('email/autoreply/'.$key->id_files)?>" class="btn btn-info btn-xs">
                        <i class="fa fa-pencil"></i> Auto Reply </a>
                        &nbsp;&nbsp;
                        <a href="<?=site_url('email/del/'.$key->id_files)?>" onclick="return confirm('Yakin akan menghapus data ? ')" class="btn btn-danger btn-xs">
                        <i class="fa fa-trash"></i> Delete </a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
            </table>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</section>