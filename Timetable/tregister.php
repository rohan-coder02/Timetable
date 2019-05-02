<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/tregistercss.css">
    <title>REGISTER</title>
  </head>
  <body>

    <div>
      <form action = "tregister.php" method="post">
        <div class="container">

          <div class="row">
            <div class = "col-sm-3 text-center">
          <br><br><br><br>
          <h1>Registration</h1>
          <hr class = "mb - 3">
          <label><b>First Name</b></label>
          <input class = "form-control" type="text" id = "firstname" name="firstname" required>
          <hr class = "mb - 3">
          <label><b>Last Name</b></label>
          <input class = "form-control" type="text" id = "lastname" name="lastname" required>
          <hr class = "mb - 3">
          <label><b>Email</b></label>
          <input class = "form-control" type="email" id = "email" name="email" required>
          <hr class = "mb - 3">
          <label><b>Phone Number</b></label>
          <input class = "form-control" type="text" id = "phonenumber"  name="phonenumber" required>
          <hr class = "mb - 3">
          <label><b>Password</b></label>
          <input class = "form-control" type="password" id = "pwd"  name="password" required>
          <br>
          <input class = "btn btn-primary" type="submit" id = "register" name="create" value="Sign Up">
        </div>
      </div>
    </div>
      </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script type="text/javascript">
      $(function(){
        $('#register').click(function(e){

           var valid = this.form.checkValidity();
           if(valid){
            var firstname = $('#firstname').val();
 			      var lastname = $('#lastname').val();
 			      var email = $('#email').val();
 			      var phonenumber = $('#phonenumber').val();
 			      var password 	= $('#pwd').val();
             e.preventDefault();
             $.ajax({
               type : 'POST',
               url : 'process.php',
               data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,pwd: password},
					     success: function(data){
                 if($.trim(data) === 'successfully saved'){
                   Swal.fire({
                    'title': 'Message',
                    'text': data,
                    'type': 'success'
                    })
                 }
                 if($.trim(data) === 'unsuccessful'){
                   Swal.fire({
                    'title': 'Message',
                    'text': data,
                    'type': 'error'
                    })
                 }
							},
              error: function(data){
					   	Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					    }
             });
           }else{

           }
        });
      });
    </script>
  </body>
</html>
