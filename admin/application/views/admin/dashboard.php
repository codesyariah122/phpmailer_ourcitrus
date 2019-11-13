<section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>

      <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    Selamat Datang <?= $this->session->userdata('name') ?>
              </div>
              <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-bullhorn"></i> Anda login menggunakan username : <b> <?= $this->session->userdata('username') ?></b></h4>
              </div>

    <div class="row">
              <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $usertotal; ?></h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="<?= base_url(); ?>user" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= $mailorder; ?></h3>

              <p>Email Order</p>
            </div>
            <div class="icon">
              <i class="fa fa-pagelines"></i>
            </div>
            <a href="<?= base_url(); ?>emailorder" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $mailrevisi; ?></h3>

              <p>Email Revisi</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="<?= base_url(); ?>emailrevisi" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $customerservice; ?></h3>

              <p>Customer Service</p>
            </div>
            <div class="icon">
              <i class="fa fa-bookmark"></i>
            </div>
            <a href="<?= base_url(); ?>customerservice" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->

      </div>

  </section>