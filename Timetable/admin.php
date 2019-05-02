<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
  <link rel="stylesheet" href="css/admincss.css">



  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark  nav-col navbar-default">
  <a class="navbar-brand" href="index.html">
    <img src="image/logo.png" width="40" height="40" class="d-inline-block align-top" alt="">
    <span style="color:#FFFF66;font-size:25px">Time Table<span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><span style="color:#FFFF66">Home</span> <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span style="color:#FFFF66">  Department</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="about.php">About Department</a>
          <a class="dropdown-item" href="#">Teacher Details</a>

      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn but-col my-2 my-sm-0" type="submit">Search</button>
    </form>

  </div>
</nav>

<!--code-->

<div class="container">
  <form action="submit" method="post">
  <a class="btn btn-success create" href="timetable.php">CREATE TIMETABLE</a>
  </form>
</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
  </body>
</html>
