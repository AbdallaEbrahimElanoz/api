<?php
session_start();
     $current="products";
    include_once 'includes/header.php';
	include_once 'includes/sidebar.php';
	
?>	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-products"></em>
				</a></li>
				<li class="active">products</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">products</h1>
			</div>
		</div><!--/.row-->
        <div class="row">
			<div class="col-lg-12">
			<?php
                    if(!isset($_GET['action'])){
                     include_once "design/products/productstabel.php";
                    }elseif($_GET['action'] == 'add'){
                      include 'design/products/addproduct.php';
                
					  }
                   ?>
			</div>
		</div><!--/.row-->
		
	</div>	<!--/.main-->
		
	<?php
	include_once 'includes/footer.php';
	?>