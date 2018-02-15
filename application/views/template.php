<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<?php
if (isset($this->session->userdata['logged_in'])) {
	$nim = ($this->session->userdata['logged_in']['nim']);
	$nama = ($this->session->userdata['logged_in']['nama']);
	$email = ($this->session->userdata['logged_in']['email']);
	$level = ($this->session->userdata['logged_in']['level']);
} else {
// header("location: login");
}
?>
<head>
	<link rel="icon" href="<?=base_url('assets/img/amcc.png');?>" type="image/gif">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AMCC - Dashboard</title>
	<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/font-awesome.min.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/datepicker3.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/styles.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/js/lumino.glyphs')?>" rel="stylesheet">
	<script src="js/lumino.glyphs.js"></script>
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
					<a class="navbar-brand" href="#"><span>Keuangan</span>AMCC</a>
					<ul class="nav navbar-top-links navbar-right">
						<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
							<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
						</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
								</a>
								<div class="message-body"><small class="pull-right">3 mins ago</small>
									<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
								</a>
								<div class="message-body"><small class="pull-right">1 hour ago</small>
									<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
					<ul class="dropdown-menu dropdown-alerts">
						<li><a href="#">
							<div><em class="fa fa-envelope"></em> 1 New Message
								<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
								</a></li>
								<li class="divider"></li>
								<li><a href="#">
									<div><em class="fa fa-user"></em> 5 New Followers
										<span class="pull-right text-muted small">4 mins ago</span></div>
									</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div><!-- /.container-fluid -->
			</nav>
			<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
				<div class="profile-sidebar">
					<div class="profile-userpic">
						<img src="<?php echo base_url('assets/img/aa.png') ?>" class="img-responsive" alt="">
					</div>
					<div class="profile-usertitle">
						<div class="profile-usertitle-name"><?php echo $nama;  ?></div>
						<div class="profile-usertitle-status"><span class="indicator label-success"></span><?php echo $nim;  ?></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="divider"></div>
				
				<ul class="nav menu">
					
					<?php if($level == 'admin'): ?>
						<li><a href="<?php echo base_url('/user') ?>"><img src="<?php echo base_url('assets/img/user.png') ?>" >&nbsp; Pengguna</a></li>   
					<?php endif; ?>
					<?php if($level == 'admin' || $level == 'users'): ?>
						<li><a href="<?php echo base_url('/kegiatan') ?>"><img src="<?php echo base_url('assets/img/pencil.png') ?>">&nbsp; Kegiatan</a></li>
					<?php endif; ?>
					<?php if($level == 'admin' || $level == 'users'): ?>
						<li><a href="<?php echo base_url('/estimasi') ?>"><img src="<?php echo base_url('assets/img/checklist.png') ?>">&nbsp; Estimasi</a></li>
					<?php endif; ?>

					<?php if($level == 'admin' || $level == 'users'): ?>
						<li><a href="<?php echo base_url('/realisasi') ?>"><img src="<?php echo base_url('assets/img/checklist.png') ?>">&nbsp; Realisasi</a></li>
					<?php endif; ?>
					<?php if($level == 'admin'): ?>
						<li><a href="<?php echo base_url('/transaksiumum') ?>"><img src="<?php echo base_url('assets/img/checklist.png') ?>">&nbsp; Transaksi Umum</a></li>
					<?php endif; ?>
					<!-- <?php if($level == 'admin'): ?>
						<li><a href="<?php echo base_url('/detailtransaksi') ?>"><img src="<?php echo base_url('assets/img/checklist.png') ?>">&nbsp; Detail Transaksi</a></li>
					<?php endif; ?> -->
					<?php if($level == 'admin' || $level == 'users'): ?>
						<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
							<em class="fa fa-navicon">&nbsp;</em> Lampiran Nota <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
						</a>
						<ul class="children collapse" id="sub-item-1">
							<li><a class="" href="<?php echo base_url('/nota') ?>">
								<span class="fa fa-arrow-right">&nbsp;</span> Nota Kegiatan
							</a></li>
							<li><a class="" href=" <?php echo base_url('/notabaru') ?>">
								<span class="fa fa-arrow-right">&nbsp;</span> Nota Baru
							</a></li>
						</ul>
					<?php endif; ?>
					<li class="parent "><a data-toggle="collapse" href="#sub-item-2">
						<em class="fa fa-navicon">&nbsp;</em> Laporan<span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
					</a>
					<ul class="children collapse" id="sub-item-2">
						<li><a class="" href="<?php echo base_url('/laporan_estimasi') ?>">
							<span class="fa fa-arrow-right">&nbsp;</span> Estimasi
						</a></li>
						<li><a class="" href=" <?php echo base_url('/laporan_realisasi') ?>">
							<span class="fa fa-arrow-right">&nbsp;</span> Realisasi
						</a></li>
						<?php if($level == 'admin' || $level == 'ketua'): ?>
							<li><a class="" href="<?php echo base_url('/laporan_tranumum') ?>">
								<span class="fa fa-arrow-right">&nbsp;</span> Transaksi Umum
							</a></li>
						<?php endif; ?>
						<?php if($level == 'admin' || $level == 'ketua'): ?>
							<li><a class="" href=" <?php echo base_url('/detailtransaksi') ?>">
								<span class="fa fa-arrow-right">&nbsp;</span> Detail Transaksi
							</a></li>
						<?php endif; ?>
						<?php if($level == 'admin' || $level == 'users'): ?>
							<li><a class="" href=" <?php echo base_url('/notabaru') ?>">
								<span class="fa fa-arrow-right">&nbsp;</span> Cetak Nota Baru
							</a></li>
						<?php endif; ?>
					</ul>

				<!-- </li>
					<li><a href="<?php echo base_url('/nota') ?>"><img src="<?php echo base_url('assets/img/paperclip.png') ?>">&nbsp; Nota</a></li>
					<li><a href="<?php echo base_url('/notabaru') ?>"><img src="<?php echo base_url('assets/img/paperclip.png') ?>">&nbsp; Nota Baru</a></li> -->


			<!-- <li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
			<li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
			<li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
			<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>-->
			<!-- <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em <a href="index.html"><img src="<?php echo base_url('assets/img/paperclip.png') ?>"</a>&nbsp;</em> Nota <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Nota Baru
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Lampiran Nota
					</a></li>
					<!-- <li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
					</a></li> -->
				<!-- </ul>
				</li>  -->
				<li><a href="logout"><img src="<?php echo base_url('assets/img/cancel.png') ?>" >Logout</a></li>
				<!-- <li><a href="login.html">&nbsp; Logout</a></li> -->
			</ul>
		</div><!--/.sidebar-->

		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<?php $this->load->view($container)?>
		</div>
		<script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js')?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
		<script src="<?php echo base_url('assets/js/chart.min.js')?>"></script>
		<script src="<?php echo base_url('assets/js/chart-data.js')?>"></script>
		<script src="<?php echo base_url('assets/js/easypiechart.js')?>"></script>
		<script src="<?php echo base_url('assets/js/easypiechart-data.js')?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap-datepicker.js')?>"></script>
		<script src="<?php echo base_url('assets/js/custom.js')?>"></script>



		<script type="text/javascript">
		$(document).ready(function() {
        // Untuk sunting
        $('#exampleModal').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal= $(this)
            console.log(div.data('jenis'));
            // Isi nilai pada field
            modal.find('#id_estimasi').attr("value",div.data('id'));
            modal.find('#nama_estimasi').attr("value",div.data('estimasi'));
            modal.find('#banyak').attr("value",div.data('banyak'));
            modal.find('#harga_satuan').attr("value",div.data('harga'));
            modal.find('#op').attr("value",div.data('op'));
       		 });
   		});



			$('#tambah').on('click', function() {
				var data = $("#id_kegiatan").val();
				console.log(data);
				$("#model-kegiatan").val(data);
			});
			// $('#id_kegiatan').change(function(){
			// 	var data = $("#id_kegiatan").val();
			// 	console.log(data);
			// 	$("#model-kegiatan").val(data);
			// });
		</script>

		<!-- <script>
			window.onload = function () {
				var chart1 = document.getElementById("line-chart").getContext("2d");
				window.myLine = new Chart(chart1).Line(lineChartData, {
					responsive: true,
					scaleLineColor: "rgba(0,0,0,.2)",
					scaleGridLineColor: "rgba(0,0,0,.05)",
					scaleFontColor: "#c5c7cc"
				});
			};
		</script> -->

	</body>
	</html>
