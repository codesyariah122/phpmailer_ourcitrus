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
					<td><?=htmlspecialchars($key->pesan)?></td>
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
				</div>
				
				        <div class="box-body table-responsive">
        <table class="table table-bordered table-hover"  id="table1">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>File Name</th>
					<th>UserName</th>
					<th>UploadedOn</th>
                </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach($files->result() as $index => $key):?>
                <tr>
                    <td class="text-center"><?=$no++?></td>
                    <td><?=$key->file_name?><img src="<?=base_url('uploads/email/').$key->file_name?>" width="200" height="250"></td>
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


</section>