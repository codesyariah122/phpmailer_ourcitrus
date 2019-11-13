
<?php if(base_url() != 'auth/login'):?>
<footer class="main-footer bg-navy">
    <div class="pull-right hidden-xs">
      <?=$version_dashboard;?>
    </div>
    <?=$copyright;?>
  </footer>
<?php endif;?>

  <!-- developer : <?=$developer.' | '. date('Y')?> -->
  
<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
	<script>
		$(document).ready(function() {
			$('#table1').DataTable()
		})
	</script>

</body>
</html>