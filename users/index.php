<?php
include("../auth/auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/users-index.css">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident suscipit non et aut! Facere est eius similique, ab harum expedita.</p>
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Profile</div>
                    <div class="card-body">
                        <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""/>
                        <p>Student : <?php echo $_SESSION['username'] ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="../auth/logout.php">Logout</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, corporis. Explicabo sed odio fugiat autem ipsam quaerat voluptas veritatis consectetur ut sint corporis, exercitationem cupiditate ratione rem nesciunt, minima accusamus.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, corporis. Explicabo sed odio fugiat autem ipsam quaerat voluptas veritatis consectetur ut sint corporis, exercitationem cupiditate ratione rem nesciunt, minima accusamus.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, corporis. Explicabo sed odio fugiat autem ipsam quaerat voluptas veritatis consectetur ut sint corporis, exercitationem cupiditate ratione rem nesciunt, minima accusamus.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, corporis. Explicabo sed odio fugiat autem ipsam quaerat voluptas veritatis consectetur ut sint corporis, exercitationem cupiditate ratione rem nesciunt, minima accusamus.</p>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-header"><h3 class="text-center">Class</h3></div>
                    <div class="card-body">
                        <img src="https://images.pexels.com/photos/7103/writing-notes-idea-conference.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""/>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda dolorum tenetur quis!</p>
                        <div class="form-group">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dicta consequatur quia.</p>
                            <a href="../subjects/info.php">Informatica</a>
                        </div>
                        <div class="form-group">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dicta consequatur quia.</p>
                            <a href="#">Informatica</a>
                        </div>
                        <div class="form-group">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dicta consequatur quia.</p>
                            <a href="#">Informatica</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Class</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#" method="post" class="modal-body">
                    <div class="form-group">
                        <label for="name_class">Name class</label>
                        <input type="text" class="form-control" placeholder="Name class" required/>
                    </div>
                    
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta doloribus perspiciatis sunt!</p>
    </div>

    <script src="js/form-login.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>