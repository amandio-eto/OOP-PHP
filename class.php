<?php
#ida ne Mak Class

class data{

    var string $server = 'localhost';
    var string $username = 'root';
    var string $password = '';




}

#testing testing konek ba Datbase
$con = new data();
$kon = new mysqli($con->server, $con->username, $con->password);
$sql = "Create Database OOPDB";

if($kon->connect_error){
    echo "Canot Connect to Database MYSQL Server";
}else{
    $db = $kon->query($sql);
    if($db === true){
        echo json_encode(["success" => "Database Is Created"]);
    }else{

        echo json_encode(["error" => "Databse Create Failed"]);

    }

   
}




