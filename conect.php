<?php
    $name = $_POST['name'];
    $Email = $_POST['email'];
    $subject = $_POST['subject'];
    $massage = $_POST['massage'];
    $submit = $_POST['submit'];

    //database connection
    echo "hey";
    $conn = new mysqli('localhost','root','','connect');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into contact(name, email, subject, massage, submit) values(?,?,?,?,?)");
        $stmt->bind_param("ssss",$name,$email,$subject,$massage, $submit);
        $execval = $stmt->execute();
        echo $execval;
        echo "message send...";
        $stmt->close();
        $conn->close();
    }

?>