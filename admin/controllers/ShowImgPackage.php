<?php
include '../includes/config.php';
$imgid = intval($_GET['imgid']);
$sql = "SELECT PackageImage from TblTourPackages where PackageId=:imgid";
$query = $dbh->prepare($sql);
$query->bindParam(':imgid', $imgid, PDO::PARAM_STR);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$cnt = 1;
if ($query->rowCount() > 0) {
    foreach ($results as $result) {    ?>
        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label"> Ảnh Tour </label>
            <div class="col-sm-8">
                <img src="../pacakgeimages/<?php echo htmlentities($result->PackageImage); ?>" width="200">
            </div>
        </div>

        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Ảnh Mới</label>
            <div class="col-sm-8">
                <input type="file" name="packageimage" id="packageimage" required>
            </div>
        </div>
<?php }
} ?>