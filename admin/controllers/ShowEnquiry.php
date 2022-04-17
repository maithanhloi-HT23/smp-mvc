<?php
include "../includes/config.php";
$sql = "SELECT * from tblenquiry";
$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);

if ($query->rowCount() > 0) {
    foreach ($results as $result) {                ?>
        <tr>
            <td width="200">#VeDat-<?php echo htmlentities($result->id); ?></td>
            <td width="300"><?php echo htmlentities($result->FullName); ?></td>
            <td width="150"><?php echo htmlentities($result->MobileNumber); ?> /<br />
                <?php echo $result->EmailId; ?></td>
            <td width="200"><?php echo htmlentities($result->Subject); ?></a></td>
            <td width="400"><?php echo htmlentities($result->Description); ?></td>
            <td width="50"><?php echo htmlentities($result->PostingDate); ?></td>
            <?php if ($result->Status == 1) {
            ?><td>HOÀN THÀNH</td>
            <?php } else { ?>

                <td><a href="manage-enquires.php?eid=<?php echo htmlentities($result->id); ?>" onclick="return confirm('Do you really want to read')">Chưa giải quyết</a>
                </td>
            <?php } ?>
        </tr>
<?php }
} ?>
