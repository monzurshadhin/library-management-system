
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
  <link rel="stylesheet" href="login.css">
  <style media="screen">
  body{
    background-image: url("book.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
  }
  </style>

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
        <a class="nav-link " href="http://localhost/project/u_memlist.php">Members List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/project/u_booklist.php">Books List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="http://localhost/project/borrow.php">Borrow Books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/project/return.php">Return Books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Logout.php">Logout</a>
      </li>

    </ul>
  </div>
</nav>
<br>

<section class="container-fluid">
  <section class="row" style="height:70px">

  </section>
  <section class="row">
    <section class="col-xs-2 col-sm-2 col-md-2">

    </section>
    <section class="col-xs-8 col-sm-8 col-md-8">
      <form class="form-container" action="borrow_done.php" method="post">
             <div class="form-group">
               <center><h3>Book Borrow</h3></center>
               <br>
               <br>
               <label for="memberId">Member ID</label>
               <input type="" class="form-control" id="memberId" aria-describedby="" placeholder="Enter Member ID" name="memberId">

             </div>
             <div class="form-group">
               <label for="membername">Member Name</label>
               <input type="membername" class="form-control" id="membername" placeholder="Enter Member Name" name="membername">
             </div>


            <div class="form-group">
              <label for="address">Address</label>
              <input type="address" class="form-control" id="address" placeholder="Enter Address" name="address">
            </div>

           <div class="form-group">
             <label for="cno">Contact Number</label>
             <input type="cno" class="form-control" id="cno" placeholder="Enter Contact Number" name="cno">
           </div>

           <div class="form-group">

             <label for="bookId">Book ID</label>
             <input type="" class="form-control" id="bookId" aria-describedby="" placeholder="Enter Book ID" name="bookId">

           </div>
           <div class="form-group">
             <label for="name">Book Name</label>
             <input type="name" class="form-control" id="name" placeholder="Enter Book Name" name="name">
           </div>

           <div class="form-group">
             <label for="date">Borrow Date</label>
             <input type="date" class="form-control" id="date" placeholder="Enter Date" name="date">
           </div>

             <button type="submit" onclick="myFunction()" class="btn btn-primary">Borrow</button>

             <script>
                   function myFunction() {
                     alert("Book Borrowed");
                    }
            </script>
      </form>
    </section>
    <section class="col-xs-2 col-sm-2 col-md-2">

    </section>
  </section>
</section>


</body>
</html>
