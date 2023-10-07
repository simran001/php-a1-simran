<?php

//Creating class
class Database{

//holding the connection to the server
private $connection;
function __construct(){

//calling function to establish connection
$this->connect_db();
}
public function connect_db(){

    //using mysqli_connect() function to connect to the database server with the given credentials
    $this->connection =mysqli_connect('172.31.22.43', 'Simran200555884', 'FQIqMa6wiB', 'Simran200555884');

    //checking the establishment of connection
    if(mysqli_connect_error()){
        die ("Database connection failed" . mysqli_connect_error());
    }
}

 //inserting data into database
public function create($fname,$lname,$Pizza_type,$Pizza_size,$toppings,$email,$contact,$Delivery_address){
   
    //sql query for inserting data into database
    $sql= "INSERT INTO pizzaOrderPerson(fname,lname,Pizza_type,Pizza_size,toppings,email,contact,Delivery_address) VALUES ('$fname','$lname','$Pizza_type','$Pizza_size','$toppings','$email','$contact','$Delivery_address')";
    $res =mysqli_query($this->connection, $sql);

    //checking if query was successful or not
    if($res){
        return true;
    } else{
        return false;
    }
}

//retrieving data from database
public function read($id=null){

    //sql query for selecting data from pizzaOrderPerson table
    $sql = "SELECT * FROM pizzaOrderPerson";
    if($id){
        $sql .= " WHERE id=$id";
    }
    $res = mysqli_query($this->connection, $sql);
    return $res;
}
public function sanitize ($var){
    $return =mysqli_real_escape_string($this->connection, $var);
    return $return;
}
}

$database =new Database ();
?>