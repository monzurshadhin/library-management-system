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
        <a class="nav-link active" href="http://localhost/project/u_memlist.php">Members List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="http://localhost/project/u_booklist.php">Books List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/project/borrow.php">Borrow Books</a>
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


<section class="row container mt-3" style="height:70px">
  <div style="padding-left:5px">
 <input class="form-control" id="myInput" type="text" placeholder="Search..">
  </div>

</section>
  <section class="row">


    <section class="col-xs-12 col-sm-12 col-md-12">
        <center><h3>Member List</h3></center>
        <table class="table table-striped">



<thead class="table table-dark">
  <tr >
  <td>Member ID</td>
  <td>Member Name</td>
  <td>Birth Date</td>
  <td>Gender</td>
  <td>Address</td>
  <td>Email</td>
  <td>Contact Number</td>
  <td>Member Type</td>


  </tr>
</thead>

<tbody id="myTable">

    <?php
    include_once "connection.php";
    $sql = "SELECT `m_id`, `m_name`, `b_date`, `gender`, `address`, `email`, `contact`, `m_type` FROM `addmember`";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
      // code...
      while ($row = mysqli_fetch_assoc($result)) {
        // code...
        echo "<tr>";
        echo "<td>".$row["m_id"]."</td>";
        echo "<td>".$row["m_name"]."</td>";
        echo "<td>".$row["b_date"]."</td>";
        echo "<td>".$row["gender"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["contact"]."</td>";
        echo "<td>".$row["m_type"]."</td>";


        echo "</tr>";
      }
    }
    else {
      echo " 0 result";
    }
    ?>
</tbody>




  </table>



    </section>


  </section>

  <script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>

</body>
</html>
