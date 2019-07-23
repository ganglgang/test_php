<?php


$title = filter_input(INPUT_POST,'title');
$price = filter_input(INPUT_POST,'price');

if(!empty($title)){

    if(!empty($price)){

       $host = "localhost";
       $dbusername = "root";
       $dbpassword = "";
       $dbname = "mysql";



       $conn =new mysqli($host,$dbusername,$dbpassword,$dbname);

       if(mysqli_connect_error()){
        die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
       }else{
        $sql = "INSERT INTO books(title,price) values ('$title','$price')";
        if($conn->query($sql)){
            echo "New record is inserted successfully";
        }else{
            echo "Error: ";
        }
        $conn->close();
       }

    }else{

    echo "Price should not be empty";
   }

}else{

    echo "Title should not be empty";
    die();
}



?>