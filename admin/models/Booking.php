<?php
class Booking
{
    public function __construct()
    {
    }

    public function getCoutBooking()
    {
        include '../includes/config.php';
        $sql1 = "SELECT BookingId from tblbooking";
        $query1 = $dbh->prepare($sql1);
        $query1->execute();
        $results = $query1->fetchAll(PDO::FETCH_OBJ);
        $cnt = $query1->rowCount();
        return $cnt;
    }

    public function cancel($status, $cancelby, $bid){
        include '../includes/config.php';
        $sql = "UPDATE tblbooking SET status=:status,CancelledBy=:cancelby WHERE  BookingId=:bid";
		$query = $dbh->prepare($sql);
		$query->bindParam(':status', $status, PDO::PARAM_STR);
		$query->bindParam(':cancelby', $cancelby, PDO::PARAM_STR);
		$query->bindParam(':bid', $bid, PDO::PARAM_STR);
		if($query->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function booking($status, $bcid){
        include '../includes/config.php';
        $sql = "UPDATE tblbooking SET status=:status WHERE BookingId=:bcid";
		$query = $dbh->prepare($sql);
		$query->bindParam(':status', $status, PDO::PARAM_STR);
		$query->bindParam(':bcid', $bcid, PDO::PARAM_STR);
		if($query->execute()){
            return true;
        }else{
            return false;
        }
    }
}
