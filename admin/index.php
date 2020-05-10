<?php
include("../auth/auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Document</title>
</head>
<body>
    <div class="main-container">
        <div class="row">
            <div class="col-3">
                <div class="profile mt-2">
                    <div class="card">
                        <div class="card-header">
                            Teacher : <?php echo $_SESSION['username']; ?>
                        </div>
                        <div class="card-body">
                            <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" srcset="">
                            <p>Materia: Lorem, ipsum.</p>
                            <p>clase: Lorem, ipsum.</p>
                        </div>
                        <div class="card-footer">
                            <a href="./auth/logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="users mt-2">
                    <div class="table-responsive">
                        <table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Clase</th>
                                    <th>Salon</th>
                                    <th>Hora</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Matematicas</td>
                                    <td>1643</td>
                                    <td>2 hrs</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Matematicas</td>
                                    <td>1643</td>
                                    <td>2 hrs</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Matematicas</td>
                                    <td>1643</td>
                                    <td>2 hrs</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>