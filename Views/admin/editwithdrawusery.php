﻿<!DOCTYPE html>
<html lang="en">
<?php include 'layouts/head.php' ?>

<body>
	<!-- HEADER -->

	<!--/HEADER -->

	<!-- PAGE -->
	<section id="page">
		<?php
		include 'layouts/sidebar.php'
		?>
		<!-- /SIDEBAR -->
		<div id="main-content">
			<!-- SAMPLE BOX CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="box-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Box Settings</h4>
						</div>
						<div class="modal-body">
							Here goes box setting content.
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /SAMPLE BOX CONFIGURATION MODAL FORM-->
			<div class="container">
				<div class="row">
					<div id="content" class="col-lg-12">
						<!-- PAGE HEADER-->
						<div class="row">
							<div class="col-sm-12">
								<div class="page-header">
									<!-- STYLER -->

									<!-- /STYLER -->
									<!-- BREADCRUMBS -->
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Users</h3>
									</div>
									<!-- <div class="description">Dynamic Tables and Modals</div> -->
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->
						<!-- DATA TABLES -->
						<div class="row">
							<div class="col-md-12">
								<!-- BOX -->
								<div class="box border green">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>Users</h4>
										<?php foreach ($errors as $error) { ?>
											<p><?= $error ?></p> <?php
															} ?>
										<div class="tools hidden-xs">
											<a href="#box-config" data-toggle="modal" class="config">
												<i class="fa fa-cog"></i>
											</a>
											<a href="javascript:;" class="reload">
												<i class="fa fa-refresh"></i>
											</a>
											<a href="javascript:;" class="collapse">
												<i class="fa fa-chevron-up"></i>
											</a>
											<a href="javascript:;" class="remove">
												<i class="fa fa-times"></i>
											</a>
										</div>
									</div>
									<div class="box-body big">
										<form role="form" method="POST" action="/dashboard/updatewithdrwauser" enctype="multipart/form-data">
										<input type="hidden" class="form-control" value="<?=$user->id?>" name="user_id" required id="exampleInputEmail1" placeholder="User Name">
											<div class="form-group">
												<label for="exampleInputEmail1">Name</label>
												<input type="text" class="form-control" value="<?=$user->name?>" name="name" required id="exampleInputEmail1" placeholder="User Name">
											</div>

											<div class="form-group">
												<label for="exampleInputPassword1">Gender</label>
												<input type="text" class="form-control" value="<?=$user->gender?>" name="gender" required id="exampleInputPassword1" placeholder="Emial">
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Balance</label>
												<input type="text" class="form-control" value="<?=$user->balance?>" name="balance" required id="exampleInputPassword1" placeholder="Phone">
											</div>
										
											<button type="submit" class="btn btn-success">Submit</button>
										</form>
									</div>
								</div>
								<!-- /BOX -->
							</div>
						</div>
						<!-- /DATA TABLES -->
						<div class="separator"></div>
						<!-- TABLE IN MODAL -->

						<!-- /TABLE IN MODAL -->
						<!-- SAMPLE BOX CONFIGURATION MODAL FORM-->

						<!-- /EXPORT TABLES -->
						<div class="footer-tools">
							<span class="go-top">
								<i class="fa fa-chevron-up"></i> Top
							</span>
						</div>
					</div><!-- /CONTENT-->
				</div>
			</div>
		</div>
	</section>
	<!--/PAGE -->
	<?php include 'layouts/scripts.php' ?>
</body>

</html>