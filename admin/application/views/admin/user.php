<section class="content-header">
      <h1>
        Users
        <small>Pengguna</small>
      </h1>

      <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="box">
        <div class="box-header">
                    <h3 class="box-title">Data Users</h3>
                    <div>
                        <a href="<?=site_url()?>user/add" class="btn btn-primary btn-flat">
                            <i class="fa fa-user-plus"></i>Tambah User
                        </a>
                    </div>
            </div>

        <div class="box-body table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach($row->result() as $index => $key):?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$key->username?></td>
                    <td><?=$key->name?></td>
                    <td><?=$key->address?></td>
                    <td><?=$key->level == 1 ? "Admin" : "kasir"?></td>
                    <td class="text-center" width="160px">

                        <form action="<?=site_url('user/del')?>" method="post">
                        <a href="<?=site_url()?>user/edit/<?=$key->user_id?>" class="btn btn-info btn-xs">
                        <i class="fa fa-pencil"></i>Update </a> &nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="hidden" name="user_id" value="<?=$key->user_id ?>" >
                        <button onclick="return confirm('Apakah anda yakin akan menghapus data?')" class="btn btn-danger btn-xs">
                        <i class="fa fa-trash"></i>Delete </button>
                        </form>

                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
            </table>

        </div>
</div>


</section>