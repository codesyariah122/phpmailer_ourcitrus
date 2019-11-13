<section class="content-header">
      <h1>
       Email Order
        <small>Order Via Email</small>
      </h1>

      <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <li class="active">Order</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <?php $this->view('message.php'); ?>

    <div class="box">
        <div class="box-header">
                    <h3 class="box-title">Email Order</h3>
                   
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
					<th>Subject</th>
					<th>Pesan</th>
					<th>File</th>
					<th>Tanggal</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach($row->result() as $index => $key):?>
                <tr>
                    <td style="width:25%" class="text-center"><?=$no++?></td>
                    <td><?=$key->nama?></td>
					<td><?=$key->email?></td>
					<td><?=$key->subject?></td>
					<td><?=htmlspecialchars($key->pesan)?></td>
					<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					  View Files
					</button></td>
					<td><?=$key->created?></td>
                    <td class="text-center">
                        <a href="<?=site_url('email/autoreply/'.$key->id)?>" class="btn btn-info btn-xs">
                        <i class="fa fa-pencil"></i> Auto Reply </a>
                        &nbsp;&nbsp;
                        <a href="<?=site_url('email/del/'.$key->id)?>" onclick="return confirm('Yakin akan menghapus data ? ')" class="btn btn-danger btn-xs">
                        <i class="fa fa-trash"></i> Delete </a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
            </table>
			
			
						<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">File upload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 
		foreach($files->result() as $index => $key):
		if($key->username):
		echo "<img src='".base_url()."uploads/email/".$key->file_name."' width='50' height='50'><br/>
		<b>$key->username</b>";
		endif;
		endforeach;
		?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


				</div>
		</div>


</section>