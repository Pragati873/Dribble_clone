<?php
 require_once('db.php');
 $query="SELECT * FROM project2";
 $result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="page4.css">
    <link rel="stylesheet" href="page2.php">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
<body>
    

        <nav>
            <div class="nav1">
            <div class="nav1cont">
              <li id="icon" >dribbble</li>
                <li>Inspiration</li>
                <li>Find work</li>
                <li>Learn design</li>
                <li>Go Pro</li>
                <li>Hire Designers</li>
            </div>
        </div>
        <div class="nav2">
            <div class="search-container">
                <button type="submit"><img src="search.png" alt="Search"></button>
                <input type="text" placeholder="Search...">
              </div>
              <?php 
        //   while($row=mysqli_fetch_assoc($result))
        if ($result->num_rows > 0)
          {
            $row=mysqli_fetch_assoc($result)
            ?>
            <img class="navi" src="{$row['Profilepic']}" alt="">;
            <?php
          }
          ?> 
              <input name="submit" id="create-acc" type="submit" value="Upload">

                 </div>
    </nav>
    <div class="container2">
        <h1>Please verify your email...</h1>
        <img src="" alt="">
        <p>Please verify your email addres.We've sent a confirmation email to:</p>
        <p>
          <?php 
        //   while($row=mysqli_fetch_assoc($result))
        if ($result->num_rows > 0)
          {
            $row=mysqli_fetch_assoc($result)
            ?>
            <p id="em" ><?php echo $row['Email'];?></p>
          </p>
            <?php
          }
          ?>  
        
        <p>Click the confirmation link in the email to begin using Dribble</p>
        <p>Did'nt recieve the email? check your Spam folder.It may have been caught by a filter.if you still</p>
    </div>



    <div class="container3">
      <div class="lastpage">
        <div class="boxi">
              <div id="nav">
                      <div id="image">
                          
                      </div>
                  </div>
          <p>Dribble is the world's leading community for creatives to share grow and get hired</p><br>
          <div class="iconi">
            <img src="ball.png" alt=""><img src="twitter.jpg" alt=""><img src="facebook.png" alt=""><img src="insta-logo.png" alt=""><img src="pinterest.png" alt="">
          </div>
            </div>
            <div class="boxi">
              <h2>For designers</h2>
              <li>Go pro!</li>
              <li>Explore design work</li>
              <li>Design blog</li>
              <li>Overtime podcast</li>
              <li>Playoffs</li>
              <li>Weekly warm up</li>
              <li>Refer a Friend</li>
              <li>Code of conduct</li>
            </div>
            <div class="boxi">
            <h2>Hire designers</h2>
            <li>Go pro!</li>
              <li>Explore design work</li>
              <li>Design blog</li>
              <li>Overtime podcast</li>
              <li>Playoffs</li>
              <li>Weekly warm up</li>
              <li>Refer a Friend</li>
              <li>Code of conduct</li>
            </div>
            <div class="boxi">
            <h2>Company</h2>
            <li>Go pro!</li>
              <li>Explore design work</li>
              <li>Design blog</li>
              <li>Overtime podcast</li>
              <li>Playoffs</li>
              <li>Weekly warm up</li>
              <li>Refer a Friend</li>
              <li>Code of conduct</li>
            </div>
            <div class="boxi">
            <h2>Directories</h2>
            <li>Go pro!</li>
              <li>Explore design work</li>
              <li>Design blog</li>
              <li>Overtime podcast</li>
              <li>Playoffs</li>
              <li>Weekly warm up</li>
              <li>Refer a Friend</li>
              <li>Code of conduct</li>
            </div>
            <div class="boxi">
            <h2>Design Resources</h2>
            <li>Go pro!</li>
              <li>Explore design work</li>
              <li>Design blog</li>
              <li>Overtime podcast</li>
              <li>Playoffs</li>
              <li>Weekly warm up</li>
              <li>Refer a Friend</li>
              <li>Code of conduct</li>
            </div>
        </div>
    </div>
<footer>
<div class="lastline">
  <div class="grid3">
    <p>2023 Dribble.All right reserved</p>
  </div>
  <div class="grid4">
    <p><div id="black">20501853 </div> shots dribbbled</p>
    <img src="pinkball.png" alt="">
  </div>
</div>
</footer>
</body>
</html>