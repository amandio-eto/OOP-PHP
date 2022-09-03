<?php


class constructer{

private $server;
private $username;
private $password;
private $db;

# ida nee Mak Constrain 

public function __construct($server,$username,$password,$db){
    $this->server = $server;
    $this->username = $username;
    $this->password = $password;
    $this->db = $db;
}


public function set_server($server){

    $this->server = $server;

}
public function set_username($username){
    $this->username = $username;

}

public function set_password($password){
    $this->password = $password;

}
public function set_db($db){
    $this->db= $db;

}


public function get_server(){
    return $this->server;
    
}
public function get_username(){
    return $this->username;
    
}
public function get_password(){
    return $this->password;
    
}
public function get_db(){
    return $this->db;
}

}
$data = new constructer('localhost','root','123456789','sistemadb_fe');
$data->set_password('Amandio ETO TL');
$data->set_server('server_ns1.eto.tl');

echo $data->get_server().PHP_EOL;
echo $data->get_username().PHP_EOL;
echo $data->get_password().PHP_EOL;
echo $data->get_db();


