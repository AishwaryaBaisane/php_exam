<?php
  
  class Config
  {
     private $dbHost = 'localhost';
     private $dbUser = 'root';
     private $dbPass = '';
     private $database = 'demo';
     private $connection;


     public function connect()
     {
        $this->connection = mysqli_connect($this->dbHost,$this->dbUser,$this->dbPass,$this->database);
     }

     public function __construct()
     {
        $this->connect();
     }

     public function inserUser($name, $email,$phone)
     {
        $query = " INSERT INTO users (name, email,phone) VALUES ('$name','$email',$phone)";
        $res = mysqli_query($this->connection,$query);
        return $res;
     }

     public function fetch_api()
     {
        $query = "SELECT * FROM users";
        $res = mysqli_query($this->connection,$query);
        return $res;
        
     }





    //  product 
    public function insertProduct($product_name,$price)
     {
        $query = " INSERT INTO products (product_name,price) VALUES ('$product_name',$price)";
        $res = mysqli_query($this->connection,$query);
        return $res;
     }

     public function update_product($id, $product_name, $price)
     {
        $query = "UPDATE products SET product_name = '$product_name' , price = $price WHERE id = $id";
        $res = mysqli_query($this->connection,$query);
        return $res;
        
     }




     // order

     public function insertOrder($order_date,$status)
     {
        $query = " INSERT INTO orders (order_date,status) VALUES ('$order_date','$status')";
        $res = mysqli_query($this->connection,$query);
        return $res;
     }

     public function deleteOrder($id)
     {
        $query = "DELETE FROM orders WHERE id = $id";
        $res = mysqli_query($this->connection,$query);
        return $res;
     }



  }
?>