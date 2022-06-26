<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include "../includes/config.php";
$uemail = $_SESSION['login'];
$sql = "SELECT tblbooking.BookingId as bookid,tblbooking.PackageId as pkgid,tbltourpackages.PackageName as packagename,tblbooking.Amount as amount,tblbooking.Comment as comment,tblbooking.status as status,tblbooking.Bookingdate as bookingdate,tblbooking.CancelledBy as cancelby,tblbooking.UpdationDate as upddate from tblbooking join tbltourpackages on tbltourpackages.PackageId=tblbooking.PackageId where UserEmail=:uemail";
$query = $dbh->prepare($sql);
$query->bindParam(':uemail', $uemail, PDO::PARAM_STR);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$cnt = 1;
if ($query->rowCount() > 0) {
    foreach ($results as $result) {
        ?>
        <tr align="center">
            <td><?php echo htmlentities($cnt); ?></td>
            <td>#BK<?php echo htmlentities($result->bookid); ?></td>
            <td><a href="package-details.php?pkgid=<?php echo htmlentities($result->pkgid); ?>"><?php echo htmlentities($result->packagename); ?></a></td>
            <td><?php echo htmlentities($result->amount); ?></td>
            <td><?php echo htmlentities($result->comment); ?></td>
            <td><?php
        if ($result->status == 0) {
            echo "Chưa giải quyết";
        }
        if ($result->status == 1) {
            echo "Đã xác nhận";
        }
        if ($result->status == 2 and $result->cancelby == 'u') {
            echo "Đã hủy bởi bạn lúc " . $result->upddate;
        }
        if ($result->status == 2 and $result->cancelby == 'a') {
            echo "Đã hủy bởi quản trị viên tại " . $result->upddate;
        }
        ?></td>
            <td><?php echo htmlentities($result->bookingdate); ?></td>
            <?php
            if ($result->status == 2) {
                ?><td>Đã hủy</td>
            <?php } else { ?>
                <td><a href="booking-history.php?bkid=<?php echo htmlentities($result->bookid); ?>" onclick="return confirm('Bạn có thực sự muốn hủy đặt hàng không ?')" >Hủy</a></td>
            <?php } ?>
        </tr>
        <?php
        $cnt = $cnt + 1;
    }
}