
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
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="nav.css">

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
        <a class="nav-link active" href="http://localhost/project/Book.php">Add Books</a>
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
<br>


    <section class="container-fluid">
      <section class="row" style="height:70px">

      </section>
      <section class="row">
        <section class="col-xs-2 col-sm-2 col-md-2">

        </section>
        <section class="col-xs-8 col-sm-8 col-md-8">
          <form class="form-container" action="BookInsert.php" method="post">
                 <div class="form-group">
                   <center><h3>ADD BOOK</h3></center>
                   <br>
                   <br>
                   <label for="bookId">Book ID</label>
                   <input type="" class="form-control" id="bookId" aria-describedby="" placeholder="Enter Book ID" name="bookId">

                 </div>
                 <div class="form-group">
                   <label for="name">Book Name</label>
                   <input type="name" class="form-control" id="name" placeholder="Enter Book Name" name="name">
                 </div>
                 <div class="form-group">
                   <label for="date">Date</label>
                   <input type="date" class="form-control" id="date" placeholder="Enter Date" name="date">
                 </div>
                 <div class="form-group">
                   <label for="drop">Category</label>
                   <br>
                 <select id="drop" name="op"style="padding:6px;border-radius: 4px;">

                      <option value="selectcatagory">Select Catagory</option>
                      <option value="Language">Language</option>
                      <option value="Technology">Technology</option>
                      <option value="History">History</option>
                      <option value="Other">Other</option>
                </select>
                </div>
                <div class="form-group">
                  <label for="type">Book Type</label>
                  <br>
                <select id="type" name="type"style="padding:6px;border-radius: 4px;">
                     <option value="selecttype">Select Type</option>
                     <option value="Borrow">Borrow</option>
                     <option value="Read Only">Read Only</option>
               </select>
               </div>

               <div class="form-group">
                 <label for="publisher">Publisher</label>
                 <input type="publisher" class="form-control" id="publisher" placeholder="Enter Publisher" name="publisher">
               </div>
               <div class="form-group">
                 <label for="Price">Price</label>
                 <input type="price" class="form-control" id="price" placeholder="Enter Price" name="price">
               </div>

                 <button type="submit" onclick="alert('Book Added')" class="btn btn-primary">Submit</button>
          </form>
        </section>
        <section class="col-xs-2 col-sm-2 col-md-2">

        </section>
      </section>
    </section>

  </body>
</html>
