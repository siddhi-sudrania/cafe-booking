<?php
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    $People = $_POST['People'];
    $Message = $_POST['Message'];

    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error)
    {
        die('connection failed : '.$conn->connect_error);

    }
    else{
        $stmt = $conn->prepare("insert into register(Firstname, Lastname, People, Message) values(?, ?, ?, ?)");
        $stmt->bind_param("ssis", $Firstname, $Lastname, $People, $Message);
        $stmt->execute();
        echo "😊";
        $stmt->close();
        $conn->close();

    }
?>
