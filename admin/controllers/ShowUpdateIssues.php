<?php
include "../includes/config.php";
$iid = intval($_GET['iid']);
$sql = "SELECT * from tblissues where id=:iid";
$query = $dbh->prepare($sql);
$query->bindParam(':iid', $iid, PDO::PARAM_STR);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
if ($query->rowCount() > 0) {
    foreach ($results as $result) {

        if ($result->AdminRemark == "") {
?>

            <tr>
                <td class="fontkink1">Nhận xét: </td>
                <td class="fontkink"><span class="fontkink">
                        <textarea cols="50" rows="7" name="remark" required="required"></textarea>
                    </span></td>
            </tr>
            <tr>
                <td class="fontkink1">&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="fontkink"> </td>
                <td class="fontkink"> <input type="submit" name="submit2" value="update" size="40" style="cursor: pointer;" /></td>
            </tr>
        <?php } else { ?>
            <tr>
                <td class="fontkink1"><b>Nhận xét: </b></td>
                <td class="fontkink"><?php echo htmlentities($result->AdminRemark); ?></td>
            </tr>
            <tr>
                <td class="fontkink1"><b>Ngày nhận xét: </b></td>
                <td class="fontkink"><?php echo htmlentities($result->AdminremarkDate); ?></td>
            </tr>
<?php }
    }
} ?>