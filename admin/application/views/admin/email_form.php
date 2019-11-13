<section class="content-header">
      <h1>
       Units
        <small>Unit Mail Subject</small>
      </h1>

      <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <li class="active">units</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="box">
        <div class="box-header">
                    <h3 class="box-title"><?=ucfirst($page)?> | unit</h3>
                    <div class="pull-right">
                        <a href="<?=site_url()?>unit" class="btn btn-warning btn-flat">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>
            </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-2">
                <?php echo validation_errors(); ?>
                    <form action="<?=site_url('email/replyproses')?>" method="post">
                        <input type="hidden" name="id" value="<?=$row->id?>">
						
						<div class="form-group">
                            <label for="nama">Nama *</label>
                            <input type="text" name="nama" value="<?=$row->nama?>" id="nama" class="form-control" readonly>
                        </div>
						
						<div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" name="email" value="<?=$row->email?>" id="email" class="form-control" readonly>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" name="autoreply" class="btn btn-success btn-flat">
                                <i class="fa fa-paper-plane"></i> Send
                            </button>
                            <button type="reset" class="btn btn-default btn-flat" name="cancel"><i class="fa fa-close"></i> Reset
                            </button>
                        </div>
                    </form>
    </div>
</div>


</section>