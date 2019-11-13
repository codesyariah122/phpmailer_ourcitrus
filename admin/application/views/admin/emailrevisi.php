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
					<th>Subject</th>
					<th>Pesan</th>
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
					<td><?=$key->pesan?></td>
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
</div>


</section>