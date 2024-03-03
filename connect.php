<?php
  $Fullname = $_post['Fullname'];
  $Email = $_post['Email'];
  $phone_num = $_post['phone_num'];
//   data base
$conn = new mysqli('localhost','root','',tests);
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(Fullname,Email,phone_num,Gender values(?,?,?,?)");
    $stmt->bind_param("sssi",$Fullname,$Email,$phone_num,$Gender);
    $stmt->execute();
    echo "registration Successfull...";
    $stmt->close();
    $conn->close();
}
?>