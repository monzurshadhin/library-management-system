<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="nav.css">

</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#"><i><b>DIU Library</b></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/project/Book.php">Add Books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/project/member.php">Add Members</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="http://localhost/project/allmember.php">All members</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/project/allbook.php">All books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/project/borrowlist.php">Borrow List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/project/returnlist.php">Return Books List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Logout.php">Logout</a>
      </li>

    </ul>
  </div>
</nav>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="s1.jpg" alt="First slide" width="100%" height="100%">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="s2.jpg" alt="Second slide" width="100%" height="100%">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="s3.jpg" alt="Third slide" width="100%" height="100%">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</body>
</html>
