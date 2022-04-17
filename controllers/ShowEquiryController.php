<?php
$uemail = $_SESSION['login'];;
$sql = "SELECT * from tblissues where UserEmail=:uemail";
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
            <td width="100">#TKT-<?php echo htmlentities($result->id); ?></td>
            <td><?php echo htmlentities($result->Issue); ?></td>
            <td width="300"><?php echo htmlentities($result->Description); ?></td>
            <td><?php echo htmlentities($result->AdminRemark); ?></td>
            <td width="100"><?php echo htmlentities($result->PostingDate); ?></td>
            <td width="100"><?php echo htmlentities($result->AdminremarkDate); ?></td>
        </tr>
<?php
        $cnt = $cnt + 1;
    }
}
