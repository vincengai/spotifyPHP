<?php
    include('includes/handlers/register-handler.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<body>
    <div id='input-container'>
        <form id='loginForm' action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p>
                <!-- label's for tag has to match the input ID -->
                <!-- input's name tag is how you send the input -->
                <label for="loginUsername"> Email </label>
                <input id='loginUsername' name="loginUsername" type='text' placeholder="username" required>
            </p>
            <p>
                <label for="loginPassword"> Password </label>
                <input id='loginPassword' name="loginPassword" type='password' placeholder="password" required>
            </p>

            <button type="submit" name="loginButton"> Log In </button>
        </form>


        <form id='registerForm' action="register.php" method="POST">
            <h2>Register your account</h2>
            <p>
                <!-- label's for tag has to match the input ID -->
                <!-- input's name tag is how you send the input -->
                <label for="username"> Username </label>
                <input id='username' name="username" type='text' placeholder="username" required>
            </p>
            <p>
                <label for="firstName"> First Name </label>
                <input id='firstName' name="firstName" type='text' placeholder="first name" required>
            </p>
            <p>
                <label for="lastName"> Last Name </label>
                <input id='lastName' name="lastName" type='text' placeholder="last name" required>
            </p>
            <p>
                <label for="email"> Email </label>
                <input id='email' name="email" type='text' placeholder="email" required>
            </p>
            <p>
                <label for="email2"> Confirm email </label>
                <input id='email2' name="email2" type='password' placeholder="confirm email" required>
            </p>
            <p>
                <label for="password"> Password </label>
                <input id='password' name="password" type='password' placeholder="password" required>
            </p>
            <p>
                <label for="password2"> Confirm Password </label>
                <input id='password2' name="password2" type='password' placeholder="password" required>
            </p>

            <button type="submit" name="registerButton"> Log In </button>
        </form>
    </div>
</body>
</html>