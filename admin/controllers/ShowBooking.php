<?php 
include "../includes/config.php";
$sql = "SELECT tblbooking.BookingId as bookid,tblusers.FullName as fname,tblusers.MobileNumber as mnumber,tblusers.EmailId as email,tbltourpackages.PackageName as pckname,tblbooking.PackageId as pid,tblbooking.Bookingdate as bdate,tblbooking.Comment as comment,tblbooking.status as status,tblbooking.CancelledBy as cancelby,tblbooking.UpdationDate as upddate from tblusers join  tblbooking on  tblbooking.UserEmail=tblusers.EmailId join tbltourpackages on tbltourpackages.PackageId=tblbooking.PackageId";
$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$cnt = 1;
if ($query->rowCount() > 0) {
    foreach ($results as $result) {                ?>
        <tr>
            <td width="150">#IdT-<?php echo htmlentities($result->bookid); ?></td>
            <td width="300"><?php echo htmlentities($result->fname); ?></td>
            <td width="200"><?php echo htmlentities($result->mnumber); ?></td>
            <td width="200"><?php echo htmlentities($result->email); ?></td>
            <td width="200"><a href="update-package.php?pid=<?php echo htmlentities($result->pid); ?>"><?php echo htmlentities($result->pckname); ?></a></td>
            <td width="300"><?php echo htmlentities($result->bdate); ?></td>
            <td width="200"><?php echo htmlentities($result->comment); ?></td>
            <td width="200"><?php if ($result->status == 0) {
                    echo "Chưa giải quyết ";
                }
                if ($result->status == 1) {
                    echo "Đã xác nhận ";
                }
                if ($result->status == 2 and  $result->cancelby == 'a') {
                    echo "Đã hủy bởi bạn lúc " . $result->upddate;
                }
                if ($result->status == 2 and $result->cancelby == 'u') {
                    echo "Người dùng đã hủy tại " . $result->upddate;
                }
                ?></td>

            <?php if ($result->status == 2) {
            ?><td width="200">Đã hủy</td>
            <?php } else { ?>
                <td width="200"><a href="manage-bookings.php?echo htmlentities($result->bookid); ?>" onclick="return confirm('Bạn thực sự muốn hủy đặt hàng')">Hủy</a> 
                / <a href="manage-bookings.php?bckid=<?php echo htmlentities($result->bookid); ?>" onclick="return confirm('đặt hàng đã được xác nhận ')">Xác nhận</a>
                </td>
            <?php } ?>

        </tr>
<?php $cnt = $cnt + 1;
    }
} ?>