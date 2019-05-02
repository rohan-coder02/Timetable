<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>LOGIN</title>
  </head>
  <body>
    <br><br>
    <div class="container h-100">
      <div class="d-flex justify-content-center h-100">
        <div class="user_card">
          <div class="d-flex justify-content-center">
            <div class="brand_logo_container">
              <img src="image/logo.png" alt="logo" class = "brand_logo">
            </div>
          </div>
          <div class="d-flex justify-content-center form_container">
            <form action = "login.php" method="post">
              <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" name="username" id = "user" placeholder="email" class="form-control input_user" required>
            </div>
            <div class="input-group mb-2">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="password" id = "pwd" placeholder="password" class="form-control input_pass" required>
          </div>
          <br>
          </div>
          <div class="d-flex justify-content-center mt-3 login_container">
            <input type="button" name="button" id="login" class="btn login_btn" value="LOGIN"></input>
          </div>
          </form>
        </div>
      </div>
    </div>

    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script type="text/javascript">
    $(function(){
      $('#login').click(function(e){
        var valid = this.form.checkValidity();
        if(valid){
          var username = $('#user').val();
          var password = $('#pwd').val();
        e.preventDefault();
        $.ajax({
          type:'POST',
          url:'jslogin.php',
          data:{user:username, pwd:password},
          success:function(data){
            if($.trim(data) === 'Login Success'){
              Swal.fire({
               'title': 'Message',
               'text': data,
               'type': 'success'
               })
              setTimeout('window.location.href = "profile.php"', 2000);
            }
            if($.trim(data) === 'Unsuccessful'){
              Swal.fire({
               'title': 'Message',
               'text': data,
               'type': 'error'
               })
            }
          },
          error:function(data){
            Swal.fire({
              'title': 'Errors',
              'text': 'There were errors while saving the data.',
              'type': 'error'
              })
          }
        });
      }
      });
    });
  </script>
  </body>
</html>
