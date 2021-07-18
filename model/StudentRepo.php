<?php

namespace app\model;

use app\core\DBConnection;

require_once dirname(__DIR__)."/core/DBConnection.php";

class StudentRepo extends DBConnection{

    public function __construct(){}

    // we need PDO for performing operations
    public function findAllStudents(){

        $sql = "select * from Student";
        $stmt = DBConnection::getPDO()->query($sql);
        $data = [];
        $i = 0;

        while($row = $stmt->fetch()){
           $data[$i] = $row;
           $i++;
        }
        return $data;
    }
}

?>
