<?php 
$this->load->view('admin_templates/header');
$this->load->view('admin_templates/sidebar');
?>
<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Content Wrapper-->
  <div class="content-wrapper">
    <?php echo $contents;?>
  </div>

  <?php 
      $data['developer'] = "Puji Ermanto";
  		$data['version_dashboard'] = "<b>OURCITRUS | Dashboard(-Version</b> 1.0.0)";
      $data['copyright'] = "<strong>Created BY ourcitrus-team
      <a href='https://ourcitrus.id'></a></strong>All rights
      reserved.";
  $this->load->view('admin_templates/footer', $data); 
  ?>

