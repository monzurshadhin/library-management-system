<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">

    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
  <body >

    <section class="container-fluid">

      <section class="row" style="height:100px">

      </section>
      <section class="row">
        <section class="col-xs-2 col-sm-3 col-md-4">

        </section>
        <section class="col-xs-8 col-sm-6 col-md-4">
          <form class="form-container" action="regcheck.php" method="post">
                 <div class="form-group">
                   <center><h3>Registration Form</h3></center>
                   <br>
                   <br>
                   <label for="name">Name</label>
                   <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Name" name="name">
                   </div>

                   <div class="form-group">

                     <label for="exampleInputEmail1">Email address</label>
                     <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Your Email" name="email">
                     </div>

                 <div class="form-group">
                   <label for="exampleInputPassword1">Password</label>
                   <input type="password" class="form-control" id="password" placeholder="Enter Your Password" name="password">
                 </div>

                 <div class="form-group">
                   <label for="type">Enter Type</label>
                   <br>
                 <select id="type" name="type"style="padding:6px;border-radius: 4px;">

                      <option value="selecttype">Select Type</option>
                      <option value="User">User</option>
                      <option value="Admin">Admin</option>

                </select>
                </div>

                 <br>

                 <button type="submit" class="btn btn-primary">Confirm Registration</button>
          </form>
        </section>
        <section class="col-xs-2 col-sm-3 col-md-4">

        </section>
      </section>

    </section>


  </body>
</html>
