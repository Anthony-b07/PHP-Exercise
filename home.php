<?php
// echo $_POST['name'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Home</title>
</head>

<body>
    <h2 class="first-h2">Register New Account</h2>
    <div id="registers">
        <div class="register">
            <form action="home.php" method="post">
                <div>

                    <label for="fName">Full Name</label>
                    <input type="text" name="name" id="fName" required>
                </div>
                <div>

                    <label for="uName">Username</label>
                    <input type="text" name="username" id="uName" required>
                </div>
                <div>

                    <label for="password">Password</label>
                 <input type="password" name="Cpassword" id="Cpassword" required>
                </div>
                <div>

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div>

                    <label for="phone-number">Phone number</label>
                    <input type="text" name="phone-number" id="phone-number" required>
                </div>
                <div>

                    <label for="dateofbirth">Date of Birth</label>
                    <input type="date" name="dateofbirth" id="dateofbirth" required>
                </div>
                <div>

                    <label for="ssn">Social Security Number</label>
                    <input type="text" name="ssn" id="ssn" required>
                </div>
                <input class="sub" type="submit" value="submit">
            </form>
        </div>
    </div>
    <h2 class="login-h2">Login</h2>

    <div class="login">
        <form action="home.php" method="get">
            <div>
                <label for="Username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div>
                <label for="Password">Password</label>
                <input type="Password" name="password" id="password" required>
            </div>
            <a href="safe.php" class="btn">login</a>
    </div>
    </form>

    </div>
</body>

</html>