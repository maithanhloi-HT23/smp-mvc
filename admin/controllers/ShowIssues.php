<?php 
include '../includes/config.php';
$sql = "SELECT tblissues.id as id,tblusers.FullName as fname,tblusers.MobileNumber as mnumber,tblusers.EmailId as email,tblissues.Issue as issue,tblissues.Description as Description,tblissues.PostingDate as PostingDate from tblissues join tblusers on tblusers.EmailId=tblissues.UserEmail";
$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);

if ($query->rowCount() > 0) {
    foreach ($results as $result) {                ?>
        <tr>
            <td width="120">#00<?php echo htmlentities($result->id); ?></td>
            <td width="200"><?php echo htmlentities($result->fname); ?></td>
            <td width="50"><?php echo htmlentities($result->mnumber); ?></td>
            <td width="50"><?php echo htmlentities($result->email); ?></td>

            <td width="200"><?php echo htmlentities($result->issue); ?></a></td>
            <td width="400"><?php echo htmlentities($result->Description); ?></td>

            <td width="50"><?php echo htmlentities($result->PostingDate); ?></td>


            <td><a href="javascript:void(0);" onClick="popUpWindow('updateissue.php?iid=<?php echo ($result->id); ?>');">Xem</a>
            </td>

        </tr>
<?php }
} ?>