<?php
include '../includes/config.php';
$pid = intval($_GET['pid']);
$sql = "SELECT * from TblTourPackages where PackageId=:pid";
$query = $dbh->prepare($sql);
$query->bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$cnt = 1;
if ($query->rowCount() > 0) {
    foreach ($results as $result) {    ?>

        <form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Tên Gói Tour</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control1" name="packagename" id="packagename" placeholder="Tạo tour" value="<?php echo htmlentities($result->PackageName); ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Loại Gói</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control1" name="packagetype" id="packagetype" placeholder="Loại gói vd: Gói gia đình / Gói cặp đôi " value="<?php echo htmlentities($result->PackageType); ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Địa Điểm</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control1" name="packagelocation" id="packagelocation" placeholder="Địa điểm" value="<?php echo htmlentities($result->PackageLocation); ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Giá trọn gói tính bằng VND</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control1" name="packageprice" id="packageprice" placeholder="Giá trọn gói tính bằng VND" value="<?php echo htmlentities($result->PackagePrice); ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Dịch Vụ</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control1" name="packagefeatures" id="packagefeatures" placeholder="Dịch Vụ vD: đưa đón miễn phí" value="<?php echo htmlentities($result->PackageFetures); ?>" required>
                </div>
            </div>


            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Chi Tiết gói</label>
                <div class="col-sm-8">
                    <textarea class="form-control" rows="5" cols="50" name="packagedetails" id="packagedetails" placeholder="Chi Tiết gói" required><?php echo htmlentities($result->PackageDetails); ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Ảnh gói</label>
                <div class="col-sm-8">
                    <img src="../pacakgeimages/<?php echo htmlentities($result->PackageImage); ?>" width="200">&nbsp;&nbsp;&nbsp;<a href="change-image.php?imgid=<?php echo htmlentities($result->PackageId); ?>">Cập Nhật Ảnh</a>
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Ngày cập nhật cuối cùng</label>
                <div class="col-sm-8">
                    <?php echo htmlentities($result->UpdationDate); ?>
                </div>
            </div>
    <?php }
} ?>