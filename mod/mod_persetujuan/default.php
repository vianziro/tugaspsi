
<div class="x_panel">
	<div class="x_title">
		<h2>Manage Pengajuan Cuti</h2>
		<?php
		if($_GET['act']=="add" or $_GET['act']=="update"){
		?>
			<i class="icon-arrow-left" style="float:right; margin:10px 10px 0 0"> <a href="<?php echo "$_SERVER[PHP_SELF]?mod=persetujuan"; ?>" size="10">Back</a></i>
		<?php
		}else{
		?>
			<!--<i class="icon-plus-sign" style="float:right; margin:10px 10px 0 0"> <a href="<?php echo "$_SERVER[PHP_SELF]?mod=persetujuan&act=add"; ?>" size="10">Tambah Departemen</a></i>-->
		<?php
		}
		?>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<?php
			switch($_GET['act']){
				default:
					include_once "select.php";
				break;

				case "add":
					include_once "add.php";
				break;

				case "update":
					include_once "update.php";
				break;

			}
		?>
	</div>
</div>


<div class="widget widget-table action-table">
	<div class="widget-header"> <i class="icon-th-list"></i>
		<h3>Manage Departemen</h3>


	</div>
	<div class="widget-content">

	</div>
	<!-- /widget-content -->
</div>
<!-- /widget -->
