<?php

include_once "connection.php";
$id = $_GET['id'];
$sql ="SELECT  `m_name`, `b_date`, `gender`, `address`, `email`, `contact`, `m_type` FROM `addmember` WHERE `m_id`=$id";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {

  while ($row=mysqli_fetch_assoc($result)) {



    $mname=$row['m_name'];
    $bdate=$row['b_date'];
    $gender=$row['gender'];

    $address=$row['address'];
    $email=$row['email'];
    $cno=$row['contact'];
    $mtype=$row['m_type'];

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
           <form class="form-container" action="update_done.php" method="post">
                  <div class="form-group">
                    <center><h3>Update Member</h3></center>
                    <br>
                    <br>

                    <input type="hidden" class="form-control" id="memberId" aria-describedby="" value="<?php echo $id; ?>" name="memberId">

                  </div>
                  <div class="form-group">
                    <label for="membername">Member Name</label>
                    <input type="membername" class="form-control" id="membername" value="<?php echo $mname; ?>" name="membername">
                  </div>
                  <div class="form-group">
                    <label for="bdate">Birth Date</label>
                    <input type="date" class="form-control" id="bdate" value="<?php echo $bdate; ?>" name="bdate">
                  </div>
                  <div class="form-group">
                    <label for="gender">Gender</label>
                    <br>
                  <select id="gender" value="<?php echo $gender; ?>" name="gender"style="padding:6px;border-radius: 4px;">

                       <option value="selectgender">Select Gender</option>
                       <option value="Male">Male</option>
                       <option value="Female">Female</option>
                       <option value="Other">Other</option>
                 </select>
                 </div>

                 <div class="form-group">
                   <label for="address">Address</label>
                   <input type="address" class="form-control" id="address" value="<?php echo $address; ?>" name="address">
                 </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" value="<?php echo $email; ?>" name="email">
                </div>
                <div class="form-group">
                  <label for="cno">Contact Number</label>
                  <input type="cno" class="form-control" id="cno" value="<?php echo $cno; ?>" name="cno">
                </div>

                <div class="form-group">
                  <label for="mtype">Member Type</label>
                  <br>
                <select id="mtype" value="<?php echo $mtype; ?>" name="mtype"style="padding:6px;border-radius: 4px;">
                     <option value="type">Select Member Type</option>
                     <option value="Student">Student</option>
                     <option value="Teacher">Teacher</option>
                     <option value="Other">Other</option>
               </select>
               </div>
                  <button type="submit" onclick="alert('Information Updated')" class="btn btn-primary">Update</button>
           </form>
         </section>
         <section class="col-xs-2 col-sm-2 col-md-2">

         </section>
       </section>


 </body>
 </html>
