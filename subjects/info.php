<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/informatica.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Subjects</title>
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Subjects</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Matematicas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Emfermeria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cocina</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../users/index.php">Profile</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-4">
            <div class="col-3">
                <div class="card-options">
                    <div class="form-group">
                        <img src="https://images.pexels.com/photos/716276/pexels-photo-716276.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim corporis neque officiis?</p>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                            registrarse en clase
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="main-card">
                    <div class="card-header">Informatica</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="section1">
                                    <img src="https://images.pexels.com/photos/7103/writing-notes-idea-conference.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="section2">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, voluptates. Nulla non animi voluptas fuga porro quas possimus, eveniet minima.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, voluptates. Nulla non animi voluptas fuga porro quas possimus, eveniet minima.</p>
                                    <a href="#">Conoce mas</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="section3">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia suscipit veniam repellat sed, officia quam nisi cumque culpa nesciunt enim facere, alias dolore voluptatem repudiandae soluta aliquid provident! Tempora, ab!</p>
                                    <img src="https://images.pexels.com/photos/1708912/pexels-photo-1708912.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="../register/register_info.php" method="post" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="#">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" required />
                    </div>
                    <div class="form-group">
                        <label for="#">Last name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Last name" required />
                    </div>
                    <div class="form-group">
                        <label for="#">Surnames</label>
                        <input type="text" class="form-control" name="surnames" placeholder="Surnames" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>