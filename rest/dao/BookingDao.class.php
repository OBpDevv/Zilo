<?php

require_once "BaseDao.class.php";

class BookingDao extends BaseDao {

    public function __construct() {
        parent::__construct("Booking");
    }
}

?>