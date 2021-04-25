<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$user = $this->db->get('tbl_user')->row_array();
?>

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->


	<!-- Footer -->
	<div class="navbar navbar-default navbar-fixed-bottom footer">
		<ul class="nav navbar-nav visible-xs-block">
			<li><a class="text-center collapsed" data-toggle="collapse" data-target="#footer"><i class="icon-circle-up2"></i></a></li>
		</ul>

		<div class="navbar-collapse collapse" id="footer">
			<div class="navbar-text">
				Copyright &copy; <?php echo date('Y'); ?>. <a href="https://www.skamedis.sch.id" class="navbar-link"><?php echo $user['nama_lengkap']; ?></a>
			</div>

			<!-- <div class="navbar-right">
				<ul class="nav navbar-nav">
					<li><a href="#">About</a></li>
					<li><a href="#">Terms</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div> -->
		</div>
	</div>
	<!-- /footer -->
</html>
