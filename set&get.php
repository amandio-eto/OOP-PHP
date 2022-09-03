<?php 

class getandset{

private $server;
private $username;
private $password;
private $db;

public function set_data($server, $username, $password, $db){

    $this->server = $server;
    $this->username = $username;
    $this->password = $password;
    $this->db = $db;

}

public function get_data(){
    return $this->server.PHP_EOL;
            $this->username.PHP_EOL;
            $this->password.PHP_EOL;
            $this->db;
}

}

$data = new getandset;
$data->set_data('localhost','root','','oopdb');
echo json_encode($data->get_data());