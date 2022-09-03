<?php
#ida ne Mak Class

class data{

    var string $server = 'localhost';
    var string $username = 'root';
    var string $password = '';
    var string $db = 'oopdb';

    public function conection(){
        return $this->server.PHP_EOL. $this->username.PHP_EOL. $this->password.PHP_EOL.$this->db.PHP_EOL;
    }




}
#create table in MYSQL Server use PHP

$con = new data();
$user = "CREATE TABLE user(
    id INT(6) PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    created_at TIMESTAMP default current_timestamp,
    deleted_at TIMESTAMP default current_timestamp

)";
$product = "CREATE TABLE product(
    id  INT NOT NULL PRIMARY KEY AUTOINCREMENT,
    product_name VARCHAR(255) NOT NULL,
    qty INT NOT NULL,
    price decimal(10,2) NOT NULL
    description VARCHAR(255) NOT NULL,
    created_at TIMESTAMP default current_timestamp,
    deteleted_at TIMESTAMP default current_timestamp

)";



$kon = new mysqli($con->server, $con->username, $con->password,$con->db);
if($kon->query($user)===true){
    
    // $con->query($product);
    echo json_encode(['success'=>"Created Success Fully"]);
    
}else{
    echo json_encode(['Failed'=>"Failed"]);
}










