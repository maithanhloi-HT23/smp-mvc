<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include '../includes/config.php';
$pid = intval($_GET['pkgid']);
$sql = "SELECT * from tbltourpackages where PackageId=:pid";
$query = $dbh->prepare($sql);
$query->bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$cnt = 1;
if ($query->rowCount() > 0) {
    foreach ($results as $result) {
        ?>

        <form  name="book" method="post">
            <div class="selectroom_top">
                <div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
                    <img src="../admin/pacakgeimages/<?php echo htmlentities($result->PackageImage); ?>" class="img-responsive" alt="">
                </div>
                <div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
                    <h2><?php echo htmlentities($result->PackageName); ?></h2>
                    <p class="dow">#PKG-<?php echo htmlentities($result->PackageId); ?></p>
                    <p><b>Dòng :</b> <?php echo htmlentities($result->PackageType); ?></p>
                    <p><b>Hãng :</b> <?php echo htmlentities($result->PackageLocation); ?></p>
                    <p><b>Công dụng :</b> <?php echo htmlentities($result->PackageFetures); ?></p>
                    <div class="ban-bottom">
                        <div class="bnr-right">
                            <input class="special" type="text" placeholder="Số lượng"  name="amount" required="">
                        </div>           
                    </div>
                    <div class="clearfix"></div>
                    <div class="grand">
                        <p>Giá bán</p>
                        <h3><?php echo htmlentities($result->PackagePrice); ?> VND</h3>
                    </div>
                </div>
                <h3>Chi Tiết </h3>
                <p style="padding-top: 1%"><?php echo htmlentities($result->PackageDetails); ?> </p>	
                <div class="clearfix"></div>
            </div>
            <div class="selectroom_top">
                <h2>Đánh giá</h2>
                <div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px">
                    <ul>
                        <li class="spe">
                            <label class="inputLabel">Bình Luận</label>
                            <input class="special" type="text" name="comment" >
                        </li>
                        <?php if ($_SESSION['login']) {
                            ?>
                            <li class="spe" align="center">
                                <button type="submit" name="submit2" class="btn-primary btn">Đặt</button>
                            </li>
                        <?php } else { ?>
                            <li class="sigi" align="center" style="margin-top: 1%">
                                <a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn" >Đặt</a></li>
                        <?php } ?>
                        <div class="clearfix"></div>
                    </ul>
                </div>

            </div>
        </form>
        <?php
    }
}
