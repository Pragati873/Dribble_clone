<?php
if(isset($_POST['submit'])){
    
$Profilepic=$_POST['Profilepic'];
$conn = new mysqli('localhost','root','','aenoxy');
if($conn->connect_error){
 die('Connection Failed :'.$conn->connect_error);
}
$verify_query=mysqli_query($conn,"SELECT Profilepic FROM project3 WHERE Profilepic='$Profilepic'");
    if(mysqli_num_rows($verify_query)!=0)
    {
        echo "<div class='message'>
        <p> This image is already taken</p>
        </div><br>
        ";
        echo "<a href='javascript:self.history.back()'><button id='Next'>GO back</button>";
        header("Location:page2.php");
    }
    else{
        mysqli_query($conn,"INSERT INTO project3(Profilepic) values('$Profilepic')") or die("Error occured");
        echo "<div class='message'>
        </div>
        ";
        header("Location:Page3.php");
    }
    
}