<?php 
include 'connect.php';


if (isset($_GET['updated_id'])){
    $id = $_GET['updated_id'];
   
$sql = "delete from users where user_id='$id' ";
    $result = mysqli_query($connection, $sql);
      if ($result){
    header('location:display.php');

}else{
    die(mysqli_error($connection));
};
};
?>