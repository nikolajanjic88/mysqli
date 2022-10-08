<?php

class ViewUsers extends User {
    public function showUsers() {
        $datas = $this->getUsers();
        foreach($datas as $data) {
            echo $data['name'] . " " . $data['email'] . "<br>";
        }
    }
}