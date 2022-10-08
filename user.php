<?php
class User extends DB {
    public function getUsers() {
        $sql = "SELECT * FROM user_info";
        $res = $this->connect()->query($sql);
        $numRows = $res->num_rows;
        if($numRows > 0) {
            while($row = $res->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
}