<?php
$link = mysqli_connect('localhost','root','','test');
if(!$link){
    die('connection error'.mysqli_connect_error());
}
if($_GET['regno'])
{
    $user_id=$_GET['regno'];
    $sql="DELETE FROM student WHERE regno='$user_id'";
    $result=mysqli_query($link,$sql);
    if($result)
    {
        echo "<script  type='text/javascript'>
              alert('deleted Successfully');
        </script>";
       
    }
}
?>