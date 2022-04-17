<?php
class BookingController
{

    public function __construct()
    {
    }

    public function cancelBooking()
    {
        include "../models/Booking.php";
        $booking = new Booking();
        $bid = intval($_GET['bkid']);
        $status = 2;
        $cancelby = 'a';
        if ($booking->cancel($status, $cancelby, $bid) == true) {
            return true;
        } else {
            return false;
        }
    }

    public function bookinged()
    {
        include "../models/Booking.php";
        $booking = new Booking();
        $bcid = intval($_GET['bckid']);
        $status = 1;
        if ($booking->booking($status, $bcid) == true) {
            return true;
        } else {
            return false;
        }
    }
}
