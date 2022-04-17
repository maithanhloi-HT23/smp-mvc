<?php
class Product
{
    public function __construct()
    {
    }

    public function getCoutProduct()
    {
        include '../includes/config.php';
        $sql = "SELECT PackageId from tbltourpackages";
        $query = $dbh->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $cnt = $query->rowCount();
        return $cnt;
    }
}
