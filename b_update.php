<?php

include_once "connection.php";
$id = $_GET['id'];
$sql ="SELECT  `b_name`, `date`, `category`, `book_type`, `publisher`, `price` FROM `addbook` WHERE `b_id`=$id";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {

  while ($row=mysqli_fetch_assoc($result)) {



    $bname=$row['b_name'];
    $bdate=$row['date'];
    $category=$row['category'];

    $btype=$row['book_type'];
    $bpubliser=$row['publisher'];
    $price=$row['price'];


  }

}
else {
echo "0 result";
}

 ?>
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
 <br>




       <section class="row" style="height:70px">

       </section>
       <section class="row">
         <section class="col-xs-2 col-sm-2 col-md-2">

         </section>
         <section class="col-xs-8 col-sm-8 col-md-8">
           <form class="form-container" action="b_update_done.php" method="post">
                  <div class="form-group">
                    <center><h3>Update Book</h3></center>
                    <br>
                    <br>

                    <input type="hidden" class="form-control" id="bookId" aria-describedby="" value="<?php echo $id; ?>" name="b_id">

                  </div>
                  <div class="form-group">
                    <label for="bookname">Book Name</label>
                    <input type="bookname" class="form-control" id="bookname" value="<?php echo $bname; ?>" name="b_name">
                  </div>
                  <div class="form-group">
                    <label for="bdate">ADD Date</label>
                    <input type="date" class="form-control" id="bdate" value="<?php echo $bdate; ?>" name="b_date">
                  </div>
                  <div class="form-group">
                    <label for="category">Category</label>
                    <br>
                  <select id="category" value="<?php echo $category; ?>" name="b_category"style="padding:6px;border-radius: 4px;">

                       <option value="select Category">Select Category</option>
                       <option value="Language">Language</option>
                       <option value="Technology">Technology</option>
                       <option value="History">History</option>
                       <option value="Other">Otther</option>
                 </select>
                 </div>

                 <div class="form-group">
                   <label for="btype">Book Type</label>
                   <br>
                   <select id="btype" value="<?php echo $btype; ?>" name="b_type"style="padding:6px;border-radius: 4px;">
                        <option value="type">Select Book Type</option>
                        <option value="Borrow">Borrow</option>
                        <option value="Read Only">Read Only</option>

                  </select>
                </div>



                 <div class="form-group">
                   <label for="publisher">Publisher</label>
                   <input type="publisher" class="form-control" id="publisher" value="<?php echo $bpubliser; ?>" name="b_publisher">
                 </div>

                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="price" class="form-control" id="price" value="<?php echo $price; ?>" name="b_price">
                </div>



                  <button type="submit" onclick="alert('Information Updated')" class="btn btn-primary">Update</button>
           </form>
         </section>
         <section class="col-xs-2 col-sm-2 col-md-2">

         </section>
       </section>


 </body>
 </html>
