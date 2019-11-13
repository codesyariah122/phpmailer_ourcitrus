<?php if($this->session->has_userdata('success')):?>
       <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> <?= $this->session->flashdata('success'); ?></h4>
              </div>

 <?php elseif($this->session->has_userdata('del')): ?>
 	       <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> <?= $this->session->flashdata('del'); ?></h4>
              </div>
 <?php elseif($this->session->has_userdata('wrong')):?>
 		       <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i>  <?= $this->session->flashdata('wrong'); ?></h4>
              </div>
<?php elseif($this->session->has_userdata('error')):?>
           <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i>  
                  <?= strip_tags(str_replace('</p>', '', $this->session->flashdata('error'))); ?>
                </h4>
              </div>
<?php elseif($this->session->has_userdata('empty-subject')):?>
 		       <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i>  <?= $this->session->flashdata('empty-subject'); ?></h4>
              </div>
<?php elseif($this->session->has_userdata('statusMsg')):?>
 		       <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i>  <?= $this->session->flashdata('empty-subject'); ?></h4>
              </div>
			  
 <?php endif; ?>