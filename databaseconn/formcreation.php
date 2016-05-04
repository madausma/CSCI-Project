
<!DOCTYPE html>

<html>
    <head>
        <title>Account Creation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="CSS/bootstrap-themedark.css" rel="stylesheet"/> 
    </head>
    <body>
        <div class="navbar-wrapper">
            <div class="container">
                <div class="navbar navbar-inverse navbar-static-top">
                    <div class="navbar-header">
                        <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </a>
                        <a class="navbar-brand" href="homepage.php">Welcome to 8p[anets</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="homepage.php">Home</a></li>
                            <li class="active"><a href="about.php">About</a></li>
                            <li><a href="quizzes.html">Quizzes</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Planets <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="mercury/mercury.html">Mercury</a></li>
                                    <li><a href="venus/venus.html">Venus</a></li>
                                    <li><a href="earth/earth.html">Earth</a></li>
                                    <li><a href="mars/mars.html">Mars</a></li>
                                    <li><a href="jupiter/jupiter.html">Jupiter</a></li>
                                    <li><a href="saturn/saturn.html">Saturn</a></li>
                                    <li><a href="neptune/neptune.html">Neptune</a></li>
                                    <li><a href="uranus/uranus.html">Uranus</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php">Connect with us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
        <form action ="dbconn2.php" method="post" /> 
            <div class="jumbotron">
                <h1>Let's Create Your Account!</h1>
                <p>First we are going to need some information!</p>
            </div>
            
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">UserName</span>
                <input type="text" name="username" class="form-control" placeholder="Username Goes Here" aria-describedby="basic-addon1">
            </div>
        <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon2">First Name</span>
                <input type="text" name="firstname" class="form-control" placeholder="First Name Right Here" aria-describedby="basic-addon2">
            </div>
        <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon3">Last Name</span>
                <input type="text" name="lastname" class="form-control" placeholder="Last Name Right Here" aria-describedby="basic-addon3">
            </div>
        <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon4">Phone Number</span>
                <input type="text" name="phone" class="form-control" placeholder="(XXX)-XXX-XXXX" aria-describedby="basic-addon4">
            </div>
        <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon5">Home Address</span>
                <input type="text" name="address" class="form-control" placeholder="City, State, Zip Code" aria-describedby="basic-addon5">
            </div>
        <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon6">Date of Birth</span>
                <input type="text" name="dob" class="form-control" placeholder="YYYY/MM/DD" aria-describedby="basic-addon6">
            </div>
        <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon7">Email</span>
                <input type="text" name="email" class="form-control" placeholder="GenericEmail@Website.com" aria-describedby="basic-addon7" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
            </div>
        <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon8">Password</span>
                <input type="password" name="password" class="form-control" placeholder="Six or more characters" aria-describedby="basic-addon8" pattern=".{6,}">
            </div>
        <br>
      
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        
            
        </form>
            </div>
        </body>

</script>
</html>
