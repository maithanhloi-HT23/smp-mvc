<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
require '../includes/config.php';
$sql = "SELECT * from tbltourpackages";
$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$cnt = 1;
if ($query->rowCount() > 0) {
    foreach ($results as $result) {
        ?>
        <div class="rom-btm">
            <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                <img src="../admin/pacakgeimages/<?php echo htmlentities($result->PackageImage); ?>" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
                <h4>Tên Gói: <?php echo htmlentities($result->PackageName); ?></h4>
                <h6>Loại Gói : <?php echo htmlentities($result->PackageType); ?></h6>
                <p><b>Địa Điểm :</b> <?php echo htmlentities($result->PackageLocation); ?></p>
                <p><b>Dịch Vụ :</b> <?php echo htmlentities($result->PackageFetures); ?></p>
            </div>
            <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                <h5>VND <?php echo htmlentities($result->PackagePrice); ?></h5>
                <a href="../views/package-details.php?pkgid=<?php echo htmlentities($result->PackageId); ?>" class="view">Chi Tiết</a>
            </div>
            <div class="clearfix"></div>
        </div>

    <?php
    }
} 

