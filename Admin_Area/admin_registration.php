<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>


    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- CSS Link -->
    <link rel="stylesheet" href="../style.css">
     <!-- Font Awsome Link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   

     <style>
        body{
            overflow: hidden;
        }
     </style>





</head>
<body>
    <div class="container-fluid m-3">
        <h2 class="text-center mb-5">Admin Registration</h2>

<div class="row d-flex justify-content-center">
    <div class="col-lg-5">
        <img src="../Images/register.jpg" alt="Admin Register" class="img-fluid">
    </div>

    <div class="col-lg-4">
       <form action="" method="post">
        <div class="form-outline mb-4">
            <label for="username" class="form-lable">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter Your Username" required="required" class="form-control">
        </div>

        <div class="form-outline mb-4">
            <label for="email" class="form-lable">E-Mail</label>
            <input type="text" id="email" name="email" placeholder="Enter Your E-mail" required="required" class="form-control">
        </div>

        <div class="form-outline mb-4">
            <label for="password" class="form-lable">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Your Password" required="required" class="form-control">
        </div>

        <div class="form-outline mb-4">
            <label for="confirm_password" class="form-lable">Confirm Password</label>
            <input type="confirm_password" id="confirm_password" name="confirm_password" placeholder="Enter Your Password" required="required" class="form-control">
        </div>

        <div>
            <input type="submit" class="bg-info py-2 px-3 border=o" name="admin_registration" value="Register">
            <p class="small fw-bold mt-2 pt-1">Don't you have an account? <a href="admin_login.php" class="link-danger">Login</a></p>
        </div>
        
       </form>
    </div>

</div>

    </div>
</body>
</html>