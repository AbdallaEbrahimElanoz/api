<?php
session_start();
     $current="users";
    include_once 'includes/header.php';
	include_once 'includes/sidebar.php';
	
?>	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-users"></em>
				</a></li>
				<li class="active">Users</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Users</h1>
			</div>
		</div><!--/.row-->
        <div class="row">
			<div class="col-lg-12">
			<?php
                    if(!isset($_GET['action'])){
                     include "design/usertabel.php";
                    }elseif($_GET['action'] == 'add'){
                      include 'design/adduser.php';
                    }elseif($_GET['action'] == 'edit'){
						include 'design/edituser.php';
					  }
                   ?>
			</div>
		</div><!--/.row-->
		
	</div>	<!--/.main-->
		
	<?php
	include_once 'includes/footer.php';
	?>