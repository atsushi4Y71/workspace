<?php
require_once('dbconnect.php');

class ListModel {
    private $db;

    function __construct() {
        $this->db = dbconnect();
    }

    public function getList() {
        $listData = array();
        $result = mysqli_query($this->db, 'select * from user where del_flag = 0');
        if($result) {
            $rows = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $listData[$rows] = $row;
                $rows++;
            }
        }
        return $listData;
    }
}