<?php
session_start();
error_reporting(0);
if (strlen($_SESSION['alogin']) == 0) {
	header('location:../index.php');
} else {
	if (isset($_POST['submit'])) {
		include('../controllers/PackageCotroller.php');
		$package = new PackageController();
		if ($package->Create() == true) {
			$msg = "Gói được tạo thành công ";
		} else {
			$error = "Đã xảy ra lỗi. Vui lòng thử lại ";
		}
	}

?>
	<!DOCTYPE HTML>
	<html>

	<head>
		<title>TMS | Tạo gói quản trị</title>

		<script type="application/x-javascript">
			addEventListener("load", function() {
				setTimeout(hideURLbar, 0);
			}, false);

			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		</script>
		<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<link href="../css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="../css/morris.css" type="text/css" />
		<link href="../css/font-awesome.css" rel="stylesheet">
		<script src="../js/jquery-2.1.4.min.js"></script>
		<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
		<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../css/icon-font.min.css" type='text/css' />
		<style>
			.errorWrap {
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #dd3d36;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			}

			.succWrap {
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #5cb85c;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			}
		</style>

	</head>

	<body>
		<div class="page-container">
			<!--/content-inner-->
			<div class="left-content">
				<div class="mother-grid-inner">
					<!--header start here-->
					<?php include('../includes/header.php'); ?>

					<div class="clearfix"> </div>
				</div>
				<!--heder end here-->
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="../views/">Trang Chủ</a><i class="fa fa-angle-right"></i>Tạo Tour</li>
				</ol>
				<!--grid-->
				<div class="grid-form">

					<!---->
					<div class="grid-form1">
						<h3>Tạo Tour </h3>
						<?php if ($error) { ?><div class="errorWrap"><strong>LỖI</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>THÀNH CÔNG</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
						<div class="tab-content">
							<div class="tab-pane active" id="horizontal-form">
								<form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Tên Gói Tour</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" name="packagename" id="packagename" placeholder="Tên Gói Tour" required>
										</div>
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Loại gói</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" name="packagetype" id="packagetype" placeholder=" Loại gói VD:Gói Gia đình / Gói Cặp đôi " required>
										</div>
									</div>

									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Địa điểm</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" name="packagelocation" id="packagelocation" placeholder="Địa điểm" required>
										</div>
									</div>

									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Giá trọn gói tính bằng VND</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" name="packageprice" id="packageprice" placeholder="Giá trọn gói tính bằng VND" required>
										</div>
									</div>

									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">DỊCH VỤ</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" name="packagefeatures" id="packagefeatures" placeholder="Ví dụ: Dịch vụ đón trả khách miễn phí " required>
										</div>
									</div>


									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Chi tiết gói</label>
										<div class="col-sm-8">
											<textarea class="form-control" rows="5" cols="50" name="packagedetails" id="packagedetails" placeholder="Chi tiết của gói" required></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">ẢNH của gói</label>
										<div class="col-sm-8">
											<input type="file" name="packageimage" id="packageimage" required>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-8 col-sm-offset-2">
											<button type="submit" name="submit" class="btn-primary btn">TẠO</button>

											<button type="reset" class="btn-inverse btn">Reset</button>
										</div>
									</div>
							</div>
							</form>
							<div class="panel-footer">
							</div>
							</form>
						</div>
					</div>
					<!--//grid-->

					<!-- script-for sticky-nav -->
					<script>
						$(document).ready(function() {
							var navoffeset = $(".header-main").offset().top;
							$(window).scroll(function() {
								var scrollpos = $(window).scrollTop();
								if (scrollpos >= navoffeset) {
									$(".header-main").addClass("fixed");
								} else {
									$(".header-main").removeClass("fixed");
								}
							});

						});
					</script>
					<!-- /script-for sticky-nav -->
					<!--inner block start here-->
					<div class="inner-block">

					</div>
					<!--inner block end here-->
					<!--copy rights start here-->
					<?php include('../includes/footer.php'); ?>
					<!--COPY rights end here-->
				</div>
			</div>
			<!--//content-inner-->
			<!--/sidebar-menu-->
			<?php include('../includes/sidebarmenu.php'); ?>
			<div class="clearfix"></div>
		</div>
		<script>
			var toggle = true;

			$(".sidebar-icon").click(function() {
				if (toggle) {
					$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
					$("#menu span").css({
						"position": "absolute"
					});
				} else {
					$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
					setTimeout(function() {
						$("#menu span").css({
							"position": "relative"
						});
					}, 400);
				}

				toggle = !toggle;
			});
		</script>
		<!--js -->
		<script src="../js/jquery.nicescroll.js"></script>
		<script src="../js/scripts.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="../js/bootstrap.min.js"></script>
		<!-- /Bootstrap Core JavaScript -->

	</body>

	</html>
<?php } ?>