<section class="content-header">
      <h1>
       Unit
        <small>Satuan Barang</small>
      </h1>

      <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <li class="active">Unit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <?php $this->view('message.php'); ?>

    <div class="box">
        <div class="box-header">
                    <h3 class="box-title">Unit Subject</h3>
                    <div class="mt-2">
                        <a href="<?=site_url()?>unit/add" class="btn btn-primary btn-flat">
                            <i class="fa fa-plus"></i> Tambah unit
                        </a>
                    </div>
            </div>

                        <?php 
                        if($row->result() == NULL):
                        $this->view('null'); 
                        endif;
                        ?>
                    

        <div class="box-body table-responsive">
        <table class="table table-bordered table-hover tex"  id="table1">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Unit Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach($row->result() as $index => $key):?>
                <tr>
                    <td style="width:25%" class="text-center"><?=$no++?></td>
                    <td><?=$key->name?></td>
                    <td class="text-center">
                        <a href="<?=site_url('unit/edit/'.$key->unit_id)?>" class="btn btn-info btn-xs">
                        <i class="fa fa-pencil"></i> Update </a>
                        &nbsp;&nbsp;
                        <a href="<?=site_url('unit/del/'.$key->unit_id)?>" onclick="return confirm('Yakin akan menghapus data ? ')" class="btn btn-danger btn-xs">
                        <i class="fa fa-trash"></i> Delete </a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
            </table>

        </div>
</div>


</section>