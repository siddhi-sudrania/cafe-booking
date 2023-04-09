<?php
if(isset($_POST['registration']))
{
    $con = mysqli_connect('localhost','root','','test');
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $People = $_POST['People'];
    $Message = $_POST['Message'];
    $sql = "INSERT INTO registration(id, FirstName, LastName, People, Message) VALUES ('0', '$FirstName', '$LastName', '$People', '$Message')";
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Record Sent";
    }
}
else
{
    echo "?";
}
?>