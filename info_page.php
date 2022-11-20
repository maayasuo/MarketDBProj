<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Info | The Closet official store</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <?php 
        include "func/navbar.php"; 
        $q = "SELECT * FROM user WHERE userID = '".$_SESSION['userID']."'";
        $result = $mysqli->query($q);
        while($row=$result->fetch_array()){?>
            <div class="container px-2 px-lg-3 my-5">
                <div class="container border rounded px-4 px-lg-5 my-5 bt-5">
                    <div class="mb-4 mt-5">
                        <h1>Edit info</h1>
                        <p></p>
                        <p>Edit whatever you want to edit on this page.</p>
                        <?php
                            if (isset($_SESSION['editsuccess'])) {
                                unset($_SESSION['editsuccess']);
                                ?><p class="text-info">*Edit success. Please sign in using your infomation you registered.</P><?php 
                            }?>
                        <?php
                            if (isset($_SESSION['unmatchpassword'])) {
                                unset($_SESSION['unmatchpassword']);
                                ?><p class="text-danger">*Unmatched password. Please try again.</P><?php 
                            }?>
                    </div>
                    <form action="func/editinfo.php" method="post">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" value="<?php echo $row['email'] ?>" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="username" class="form-control" id="username" value="<?php echo $row['username'] ?>" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="fname" class="form-label">First Name:</label>
                            <input type="fname" class="form-control" id="fname" value="<?php echo $row['fname'] ?>" name="fname">
                        </div>
                        <div class="mb-3">
                            <label for="lname" class="form-label">Last Name:</label>
                            <input type="lname" class="form-control" id="lname" value="<?php echo $row['lname'] ?>" name="lname">
                        </div>
                        <div class="mb-3">
                            <label for="adress" class="form-label">Address:</label>
                            <input type="adress" class="form-control" id="address" value="<?php echo $row['uAddress'] ?>" name="address">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number:</label>
                            <input type="phone" class="form-control" id="phone" value="<?php echo $row['phone'] ?>" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Change Password (optional):</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="checkpassword" class="form-label">Confirm changed password (optional):</label>
                            <input type="password" class="form-control" id="checkpassword" placeholder="Reenter password" name="checkpassword">
                        </div>
                        <!-- <input type="hidden" name="userID" value="<?php echo $_SESSION['userID'] ?>"></input> -->
                        <?php
                            if (isset($_SESSION['editerror'])) {
                                unset($_SESSION['editerror']);
                                ?><p class="text-danger">*An error occur. Please try again.</P><?php 
                            }?>
                        <div class="mt-4 mb-5">
                            <button type="submit" name="edit_submit" class="btn btn-primary">Edit info</button>
                        </div>
                    </form>
                </div>
            </div>
        <?php }
    ?>
    <?php include "func/footer_longpage.html"; ?>
    </body>
</html>