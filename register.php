<?php include('auth/register.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Sign In</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="login.html">Sign In <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <!--container-->
    <div class="main-container">
        <div class="row justify-content-center">
            <div class="register">
                <div class="card">
                    <div class="card-header text-center"><h4>Sign In</h4></div>
                    <form action="register.php" method="POST" class="card-body">
                        <div class="form-group">
                            <label><strong> Username </strong> </label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Insert username" required/>
                        </div>
                        <div class="form-group">
                            <label><strong> Email </strong> </label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="Insert email" required/>
                        </div>
                        <div class="form-group">
                            <label><strong> password </strong> </label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Insert password" required/>
                        </div>
                        <div class="form-group">
                            <label><strong> Repead password </strong>  </label>
                            <input type="password" id="pass" name="pass" class="form-control" placeholder="Repead password" required/>
                        </div>
                        <div class="form-group">
                            <button id="register" onclick="change();" name="reg_admin"  class="btn btn-primary">Save as admin</button>
                            <button id="register" onclick="change();" name="reg_users"  class="btn btn-success ml-4">Save as user</button>
                        </div>
                    </form>
                    <?php include('auth/errors.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <script src="js/form-register.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>