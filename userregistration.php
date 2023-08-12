<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration form</title>
    <link rel="stylesheet" href="../assets/css/userreg.css"></link>
</head>

<body>
    <div class="divcol">
    <div class="container" >
        <h1 class="form-title">Registration</h1>
        <form action="../config/registration.php" method="POST">
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="full name" >full name</label>
                    <input type="text" id="fullName" name="fullname" placeholder="enter full name"/>
                </div>
                
                    <div class="user-input-box">
                        <label for="Username">username</label>
                        <input type="text" id="username" name="username" placeholder=" enter uname">
                    </div>
                 <div class="user-input-box">
                        <label for="email">email</label>
                        <input type="email" id="email" name="email" placeholder="enter email">
                    </div>
                        <div class="user-input-box">
                            <label for="PhoneNumber">phone Number</label>
                            <input type="phone" id="phone" name="phone" placeholder="enter your contact Number">
                        </div>
                        <div class="user-input-box">
                            <label for="password">password</label>
                            <input type="password" id="password" name="password" placeholder="enter password">
                        </div><div class="user-input-box">
                                <label for="confirmpassword"> Confirm password</label>
                                <input type=" confirm password" id=" confirm password" name="confirmpassword"
                                    placeholder=" confirm password">
                            </div></div>
                        <div class="gender-details-box">
                            <span class="gender-title">Gender</span>
                            <div class="gender-category">
                                <input type="radio" name="gender" value="male">
                                <label for="male">male</label>
                                <input type="radio" name="gender" value="female">
                                <label for="female">female</label>
                                <input type="radio" name="gender" value="other">
                                <label for="other">other</label>
                            </div
                            <div class="form-submit-btn">
                            <input type="submit" value="register">
              </div</form></div></div></body></html>