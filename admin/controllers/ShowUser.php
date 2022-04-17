<?php
include('../includes/config.php');
$sql = "SELECT * from tblusers";
$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$cnt = 1;
if ($query->rowCount() > 0) {
    foreach ($results as $result) {                ?>
        <tr>
            <td><?php echo htmlentities($cnt); ?></td>
            <td><?php echo htmlentities($result->FullName); ?></td>
            <td><?php echo htmlentities($result->MobileNumber); ?></td>
            <td><?php echo htmlentities($result->EmailId); ?></td>
            <td><?php echo htmlentities($result->RegDate); ?></td>
            <td><?php echo htmlentities($result->UpdationDate); ?></td>
        </tr>
<?php $cnt = $cnt + 1;
    }
} ?>