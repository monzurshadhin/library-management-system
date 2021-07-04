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
        <section class="col-xs-2 col-sm-2 col-md-2">

        </section>
        <section class="col-xs-8 col-sm-8 col-md-8">
          <form class="form-container" action="login_check.php" method="post">
                 <div class="form-group">
                   <center><h3>Login Form</h3></center>
                   <br>
                   <br>
                   <label for="exampleInputEmail1">Email address</label>
                   <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" name="email">
                   <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                 </div>
                 <div class="form-group">
                   <label for="exampleInputPassword1">Password</label>
                   <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="password">
                 </div>
                 <span> <a href="registration.php">Create a new account?</a> </span>
                 <br>
                 <br>
                 <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </section>
        <section class="col-xs-2 col-sm-2 col-md-2">

        </section>
      </section>

    </section>


  </body>
</html>
