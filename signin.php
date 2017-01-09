<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>WYBWYT Sign in</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom styles for this template -->
  <link href="jumbotron.css" rel="stylesheet">

  </head>


  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Welcome to WYBWYT !</a>
        </div>
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
 <div class="jumbotron">
       <div class="container" >
        <h1>WYBWYT Sign in</h1>
        <p>Please fill out the form.</p>

        <form method="post" action="signin_check.php" >
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" name="pwd">
            </div>
            <div class="form-group">
              <label for="pwdconfirm">Password Confirm:</label>
              <input type="password" class="form-control" name="pwdconfirm">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>

      </div>
    </div>

      <hr>
      <footer>
        <p>WYBWYT 2016</p>
      </footer>
    </div> <!-- /container -->

</html>
