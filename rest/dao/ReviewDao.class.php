<?php

require_once "BaseDao.class.php";

class ReviewDao extends BaseDao {

    public function __construct() {
        parent::__construct("Review");
    }
}

?>