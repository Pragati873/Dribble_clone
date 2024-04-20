<?php
session_start();
$message='';
if(isset($_SESSION['username_alert'])){
    $message='Username already exist';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    
    <section>

        <h1 id="heading">Already a memeber?<a href="sign in">Sign in</a></h1>
        <div class="container ">
            
            <div class="grid1 ">
                <div id="nav">
                    <div id="image">
                        
                    </div>
                </div>
                <h1>Discover the world's top <br> Designers & Creatives</h1>
                <img src="page1.jpg" id="page1" alt="">
            </div>
            <div class="grid2 ">
                <div class="grid-2child">
                    <h1 id="headi" >Sign up to Dribbble</h1> <br><br>
                    <h2></h2><br>
                    
                    <form action="config.php" method="post">
                        <div id="sign-up">
                            <div class="form-">
                                <div>
                                    <label for="name" >Name</label><br>
                                    <input type="name" id="name" placeholder="Name "  name="Name"  />
                                </div>
                                <div>
                                    <h4 ><?php echo $message;?></h4>
                                    <label for="name" >Username</label><br>
                                    <input type="name" id="UserName" placeholder="username" name="UserName" /><br><br><br>
                                </div>
                            </div>
                        </div>
                        <label for="Emai" >Email</label><br>
                        <input type="email" placeholder="email" id="sin" name="Email"><br><br><br>
                        <label for="Password" >Password</label><br>
                        <input type="password" placeholder="6+ characters" id="Password" id="sin" name="Password" /><br><br>
                        <div class="fl">

                            <input 
                            id="cb" type="checkbox"> 
                            <label for="checkbox" id="checki" ><p> Creating an account means you're okay with our <a  href="sign-in">terms of service. Privacy Policy</a> and our default <a href="sign-in">Notification settings</a></p> </label><br><br><br>
                        </div>
                        
                            <input name="submit" id="create-acc" type="submit" value="create an account"><br><br>
                       

                        
                        
                    </form>
                    <p id="footi" >This site is protected by re-CAPTCHA and the Google <a href="sign-in">Privacy Policy</a> and <a href="">Terms and conditions</a> apply</p>
                </div> <?php unset($_SESSION['username_alert']);?>
            </div>
        </div>
    </section>
    <section>
        <div></div>
    </section>
    

     
    </body>
    </html>
