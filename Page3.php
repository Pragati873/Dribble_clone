

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page3</title> 
    <link rel="stylesheet" href="Page3.css">
</head>
<body>
    <div id="page3">
        <div id="nav">  
            <div id="img">     </div>

           <div id="back"> 
            <img src="./arrow-left-s-line.png" alt="">
        </div>
        </div> 

        <div id="div">  

            <h1>What brings you to Dribbble ?</h1>
            <p>Select the options that best describe you. Don't worry , you can explore other options later. </p>

            <form action="page4.php">

                <div id="middle">
                    
                <div class="imgcontainer" id="img1" onclick="checkform()"> 
                    <img src="img1.jpg" alt="" class="imageToClick" alt="Clickable Image">
                    <h2>I'm a designer looking to share my work</h2>
                    <div class="circle" id="circli">   </div>
                </div>
                
                <div class="imgcontainer" id="img2" onclick="checkform()"> 
                    <img src="img2.jpg" alt="" class="imageToClick" alt="Clickable Image">   
                    <h2>I'm looking to hire a designer</h2> 
                    <div class="circle" id="circli">   </div>
                </div>
                
                <div class="imgcontainer" id="img3" onclick="checkform()">
                    <img src="img3.jpg" alt="" class="imageToClick" alt="Clickable Image">   
                    <h2>I'm looking for design inspiration</h2>  
                    <div class="circle" id="circli" >  </div>
                </div>
                <br>
                
            </div>
            <input id="Next" type="submit" value="Next"   disabled="disabled"><br><br>
        </form>
            
          

          </a>
        </div>
    </div>
    <script>
        function checkform() {
    var submitBtn = document.getElementById("Next");
    var submitBtni = document.getElementById("circli");
    submitBtn.disabled = false;
    submitBtni.disabled = false;
    submitBtn.classList.add('active');
    submitBtni.classList.add('active'); // Add 'active' class to change button color
    checkFormValidity(); // Call function to check form validity
}

function checkFormValidity() {
    var f = document.forms['theform'].elements;
    var fieldsMustBeFilled = true;

    // Check if any field is empty
    for (var i = 0; i < f.length; i++) {
        if (f[i].value.trim().length === 0) {
            fieldsMustBeFilled = false;
            break; // Exit loop early if any field is empty
        }
    }

    var submitBtn = document.getElementById("Next");
    var submitBtni = document.getElementById("circli");

    // Enable or disable the button based on whether fields are filled
    if (fieldsMustBeFilled) {
        submitBtni.disabled = false;
        submitBtni.classList.add('active');
        submitBtn.disabled = false;
        submitBtn.classList.add('active'); // Add 'active' class to change button color
    } else {
        submitBtni.disabled = true;
        submitBtni.classList.remove('active');
        submitBtn.disabled = true;
        submitBtn.classList.remove('active'); // Remove 'active' class to revert button color
    }
}

    </script>
</body>
</html>