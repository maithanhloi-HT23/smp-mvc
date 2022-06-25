<?php
include "../includes/config.php";
$sql = "SELECT * from TblTourPackages";
$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$cnt = 1;
if ($query->rowCount() > 0) {
    foreach ($results as $result) {                ?>
        <tr>
            <td><?php echo htmlentities($cnt); ?></td>
            <td><?php echo htmlentities($result->PackageName); ?></td>
            <td><?php echo htmlentities($result->PackageType); ?></td>
            <td><?php echo htmlentities($result->PackageLocation); ?></td>
            <td><?php echo htmlentities($result->PackagePrice); ?>VND</td>
            <td><?php echo htmlentities($result->Creationdate); ?></td>
            <td><a href="../views/update-package.php?pid=<?php echo htmlentities($result->PackageId); ?>"><button type="button" class="btn btn-primary btn-block">Xem Chi tiết</button></a></td>
        </tr>
<?php $cnt = $cnt + 1;
    }
} ?>