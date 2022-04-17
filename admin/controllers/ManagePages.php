<?php
switch ($_GET['type']) {
    case "terms":
        echo "Điều khoản và Điều kiện";
        break;
    case "privacy":
        echo "Quyền riêng tự và chính sách";
        break;
    case "aboutus":
        echo "Về Chúng Tôi";
        break;
    case "software":
        echo "Offers";
        break;
    case "aspnet":
        echo "Vission And MISSION";
        break;
    case "objectives":
        echo "Objectives";
        break;
    case "disclaimer":
        echo "Disclaimer";
        break;
    case "vbnet":
        echo "Partner With Us";
        break;
    case "candc":
        echo "Super Brand";
        break;
    case "contact":
        echo "Liên Hệ chúng tôi";
        break;
    default:
        echo "";
        break;
}

?>
</div>
</div>

<div class="form-group">
    <label for="focusedinput" class="col-sm-2 control-label">Chi Tiết Gói</label>
    <div class="col-sm-8">
        <textarea class="form-control" rows="5" cols="50" name="pgedetails" id="pgedetails" placeholder="Chi Tiết Gói" required>

<?php
include "../includes/config.php";
$pagetype = $_GET['type'];
$sql = "SELECT detail from tblpages where type=:pagetype";
$query = $dbh->prepare($sql);
$query->bindParam(':pagetype', $pagetype, PDO::PARAM_STR);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$cnt = 1;
if ($query->rowCount() > 0) {
    foreach ($results as $result) {
        echo htmlentities($result->detail);
    }
}
?>
</textarea>