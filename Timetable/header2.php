<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TIMETABLE</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
  <link rel="stylesheet" href="css/indexcss.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <script type="text/javascript">
  function validate(form)
      {
       if(form.username.value == "admin" && form.password.value == "1234" )
       {
        alert( "validation success" );
        window.open('admin.php');
       }
       else
       {
        alert( "validation failed" );
      }
      }
  </script>

  </head>
  <body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark  nav-col navbar-default">
  <a class="navbar-brand" href="index.php">
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
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" role="button" data-target="#Admin-modal"><span style="color:#FFFF66">Admin Login</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="#" data-toggle="modal" role="button" data-target="#teacher-modal"><span style="color:#FFFF66">Teacher Login</span></a>
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
      <a class="btn btn-danger my-2 my-sm-0" href = "login.php">Logout</a>
    </form>
  </div>
</nav>


<!--modal-->
<div class="modal fade" id="Admin-modal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header head-col">
        <img id="imlo"  src="image/logo.png" width="100px" height="100px" alt="">
        <br><h3 class="head">Admin Login</h3>
      </div>

      <div id="div-form">
        <form class="" action="index.php" method="post">
          <div class="modal-body">
          <div class="">
            <span>Type your Username and password here</span>
          </div>
          <input type="text" class="form-control" placeholder="UserName" id="username" name="username" value="" required>
          <input type="password" class="form-control" placeholder="password" id="password" name="password" value="" required>
          <div class="checkbox rem">
            <label>
              <input type="checkbox" name="" value="">Remember me
            </label>
          </div>
          </div>
          <div class="modal-footer">
            <div class="row">

              <div class="col-sm-6" class="signup">
                  <button type="submit" class="btn btn-danger btn-sm btn-block" data-dismiss="modal">Cancel</button>
              </div>
              <div class="col-sm-6">
                  <button  class="btn btn-primary btn-sm btn-block"  id="submit" onclick="validate(this.form)">Login</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
        <!--tea cher modal-->
        <div class="modal fade" id="teacher-modal">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header head-col">
                <img id="imlo"  src="image/logo.png" width="100px" height="100px" alt="">
                <br><h3 class="head2">Teacher Login</h3>
              </div>

              <div id="div-form col-md-2 text-center">
                <form class="" action="index.php" method="post">
                    <center><a href="login.php" class="btn btn-primary sign">Login</a>
                    <a href="tregister.php" class="btn btn-success sign">Register</a></center>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>




        <!--slider-->
