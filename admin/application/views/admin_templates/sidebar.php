 <!-- Left side column. -->
 <aside class="main-sidebar bg-navy">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php if($this->session->userdata('userid') == 1 ): echo base_url('assets/dist/img/'.$this->fungsi->user_login()->image); else: echo base_url('assets/dist/img/admin.png'); endif;?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?=$this->fungsi->user_login()->username?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
          <a href="<?=site_url()?>dashboard">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
		
		<li class="treeview <?= $this->uri->segment(1) == 'category' || $this->uri->segment(1) == 'unit' || $this->uri->segment(1) == 'item' ? 'active' : '' ?>">
          <a href="#">
            <i class="fa fa-file-word-o"></i><span>Unit Subject</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li <?=$this->uri->segment(1) == 'unit' ? 'class="active"' :''?>><a href="<?=site_url()?>unit"><i class="fa fa-circle-o"></i>Units</a></li>
          </ul>
        </li>

 

          <li class="treeview <?= $this->uri->segment(1) == 'emailorder' || $this->uri->segment(1) == 'emailrevisi' || $this->uri->segment(1) == 'customerservice' ? 'active' : '' ?>">
          <a href="#">
            <i class="fa fa-envelope-square"></i><span>Services</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li <?=$this->uri->segment(1) == 'emailorder' ? 'class="active"' :''?>><a href="<?=site_url()?>emailorder"><i class="fa fa-circle-o"></i>Email Order</a></li>
            <li <?=$this->uri->segment(1) == 'emailrevisi' ? 'class="active"' :''?>><a href="<?=site_url()?>emailrevisi"><i class="fa fa-circle-o"></i>Email Revisi</a></li>
            <li <?=$this->uri->segment(1) == 'customerservice' ? 'class="active"' :''?>><a href="<?=site_url()?>customerservice"><i class="fa fa-circle-o"></i>Customer Service</a></li>
          </ul>
        </li>


<?php if($this->fungsi->user_login()->level == 1): ?>

        <li class="header">SETTINGS</li>
        
        <li class="<?= $this->uri->segment(1) == 'user' ? 'active' : '' ?>"><a href="<?=site_url()?>user"><i class="fa fa-user"></i> <span>Users</span></a></li>
      </ul>
        
<?php endif;?>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>