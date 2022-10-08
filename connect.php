<?php

class DB {
    protected $localhost;
    protected $username;
    protected $password;
    protected $database;

    public function connect() {
        $this->localhost = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->database = "shop_db";
        $conn = new mysqli($this->localhost, $this->username, $this->password, $this->database);
        return $conn;
    }

}

