
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="page2.css">
</head>
<body>
    <div class="container">
        <div id="nav">
            <div id="image">
                
            </div>
        </div>
        <h1>Welcome! Let's create your Profile</h1>
        <p>Let others get to know you better! You can do these later</p><br>
        <h2>Add an avatar</h2>
        <form action="config2.php" method="post" name="theform">

            <div id="avatar">
                <img  src="" alt="" id="profile-Pic">
                <div id="chose">
                    <label for="input-file">Choose image</label>
                    <input type="file" name="Profilepic" accept="image/jpeg,image/png, image/jpg "  id="input-file" onkeyup="checkform()"><br>
                </div>
            </div>
            <h2>Add your location</h2>
            <input type="location" placeholder="Enter a location" onkeyup="checkform()"><br><br>
            <input id="Next" name="submit" type="submit" value="Next"   disabled="disabled"><br><br>
        </form>

    </div>
    <script>
        //profile pic choosing file
        let profilePic = document.getElementById("profile-Pic")
        let inputfile = document.getElementById("input-file")

        inputfile.onchange=function(){
            profilePic.src=URL.createObjectURL(inputfile.files[0]);
        }
        
        //change button color on filling all field
        function checkform() {
    var f = document.forms['theform'].elements;
    var fieldsMustBeFilled = true;

    for (var i = 0; i < f.length; i++) {
        if (f[i].value.trim().length === 0) {
            fieldsMustBeFilled = false;
            break; // Exit loop early if any field is empty
        }
    }

    var submitBtn = document.getElementById("Next");

    if (fieldsMustBeFilled) {
        submitBtn.disabled = false;
        submitBtn.classList.add('active');
    } else {
        submitBtn.disabled = true;
        submitBtn.classList.remove('active');
    }
}

    </script>
</body>
</html>