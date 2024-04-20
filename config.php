<?php
session_start();
if(isset($_POST['submit'])){
    $Name=$_POST['Name'];
$UserName=$_POST['UserName'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$conn = new mysqli('localhost','root','','aenoxy');
if($conn->connect_error){
 die('Connection Failed :'.$conn->connect_error);
}
$verify_query=mysqli_query($conn,"SELECT UserName FROM project2 WHERE Username='$UserName'");
    if(mysqli_num_rows($verify_query)!=0)
    {
        // echo "<div class='message'>
        // <p> This Username is already taken</p>
        // </div><br>
        // ";
        // echo "<a href='javascript:self.history.back()'><button id='create-acc'>GO back</button>";
        $_SESSION['username_alert']='1';
        header("Location:page1.php");

    }
    else{
        mysqli_query($conn,"INSERT INTO project2(Name,UserName,Email,Password) values('$Name','$UserName','$Email','$Password')") or die("Error occured");
        echo "<div class='message'>
        </div>
        ";
        header("Location:page2.php");
    }
    
}
?>