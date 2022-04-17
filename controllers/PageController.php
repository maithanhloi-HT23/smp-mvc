<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
require '../includes/config.php';
$pagetype = $_GET['type'];
$sql = "SELECT type,detail from tblpages where type=:pagetype";
$query = $dbh->prepare($sql);
$query->bindParam(':pagetype', $pagetype, PDO::PARAM_STR);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$cnt = 1;
if ($query->rowCount() > 0) {
    foreach ($results as $result) {
        ?>
        <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;"><?php echo $_GET['type'] ?></h3>
        <p>
            <?php echo $result->detail; ?>
        </p> 
    <?php
    }
}

