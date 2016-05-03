

<!DOCTYPE html>

<html>
    <head>
        <title>Account Creation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="CSS/bootstrap-themedark.css" rel="stylesheet"/> 
    </head>
    <body>
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
                <span class="input-group-addon" id="basic-addon6">Email</span>
                <input type="text" name="email" class="form-control" placeholder="GenericEmail@Website.com" aria-describedby="basic-addon7">
            </div>
        <br>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>
            </div>
        </body>
</html>
