<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<?php include "func/navbar.php"; ?>

<body>
<div class="container px-2 px-lg-3 my-5">
    <div class="row">
        <div class="col">
            <div class="container border rounded px-4 px-lg-5 mt-4 bt-5">
                <div class="mb-4 mt-5">
                    <h1>Login</h1>
                    <p></p>
                    <p>Please enter your info to continue.</p>
                </div>
                <form action="func/login.php" method="POST">
                    <div class="mb-3 mt-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="username" class="form-control" id="username" placeholder="Enter username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                    </div>
                    <?php
                        if (isset($_SESSION['loginerror'])) {
                            unset($_SESSION['loginerror']);
                            ?><p class="text-danger">*Incorrect username or password.</P><?php 
                        }?>
                    <div class="mt-4 mb-5">
                        <button type="submit" name="login_submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col">
            <div class="container border rounded px-4 px-lg-5 mt-4 bt-5">
                <div class="mb-4 mt-5">
                    <h1>Sign up</h1>
                    <p></p>
                    <p>Please fill in this form to create an account.</p>
                </div>
                <form action="func/register.php" method="post">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="username" class="form-control" id="username" placeholder="Enter username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name:</label>
                        <input type="fname" class="form-control" id="fname" placeholder="Enter First name" name="fname">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name:</label>
                        <input type="lname" class="form-control" id="lname" placeholder="Enter Last name" name="lname">
                    </div>
                    <div class="mb-3">
                        <label for="adress" class="form-label">Address:</label>
                        <input type="adress" class="form-control" id="address" placeholder="Enter Address" name="address">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number:</label>
                        <input type="phone" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="checkpassword" class="form-label">Confirm password:</label>
                        <input type="password" class="form-control" id="checkpassword" placeholder="Reenter password" name="checkpassword">
                    </div>
                    <div class="mb-3">
                        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                    </div>
                    <div class="mt-4 mb-5">
                        <button type="submit" name="signup_submit" class="btn btn-primary">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "func/footer_longpage.html"; ?>

</body>

</html>