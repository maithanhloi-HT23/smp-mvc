<?php
include '../includes/config.php';
$useremail = $_SESSION['login'];
$sql = "SELECT * from tblusers where EmailId=:useremail";
$query = $dbh->prepare($sql);
$query->bindParam(':useremail', $useremail, PDO::PARAM_STR);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$cnt = 1;
if ($query->rowCount() > 0) {
    foreach ($results as $result) {
        ?>

        <p style="width: 350px;">

            <b>Tên</b>  <input type="text" name="name" value="<?php echo htmlentities($result->FullName); ?>" class="form-control" id="name" required="">
        </p> 

        <p style="width: 350px;">
            <b>SỐ Điện Thoại</b>
            <input type="text" class="form-control" name="mobileno" maxlength="10" value="<?php echo htmlentities($result->MobileNumber); ?>" id="mobileno"  required="">
        </p>

        <p style="width: 350px;">
            <b>Địa chỉ Email</b>
            <input type="email" class="form-control" name="email" value="<?php echo htmlentities($result->EmailId); ?>" id="email" readonly>
        </p>
        <p style="width: 350px;">
            <b>Ngày sửa đổi cuối : </b>
            <?php echo htmlentities($result->UpdationDate); ?>
        </p>

        <p style="width: 350px;">	
            <b>Ngày sử dụng :</b>
            <?php echo htmlentities($result->RegDate); ?>
        </p>
        <?php
    }
}

