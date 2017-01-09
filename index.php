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

    <title>WYBWYT</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

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
          <a class="navbar-brand" href="index.php">Welcome to WYBWYT !</a>
        </div>

        <!--Login부분 (아직 연결안함)-->
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" action="login_check.php" method="post">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control" name="email">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="pwd">
            </div>
            <button type="submit" class="btn btn-success">Log in</button>

          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <!--Sign in 부분-->
 <div class="jumbotron">
       <div class="container">
        <h1>WYBWYT</h1>
        <p>What You Block is What You Translate.</p>
        <p><a class="btn btn-primary btn-lg" href="signin.php" role="button">Sign in &raquo;</a></p>
      </div>
</div>

    <!--페이지 기능설명 및 이동 버튼(현재 3개 기능)-->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Word List</h2>
          <p>After you translate the word with chrome plugin, you can add specific words here ! We provide you synonyms, antonyms, and examples. You can improve your word level by using this. </p>
          <p><a class="btn btn-default" href="word_list.php" role="button">Start the Word List ! &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Word Quiz</h2>
          <p>We provide you some random quizes. We select some random words in your word list, and ask you some questions. If you write the correct answer, you can get some scores ! </p>
          <p><a class="btn btn-default" href="word_quiz.php" role="button">Start the Word Quiz ! &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Word Competition</h2>
          <p>Compete with your friends or strangers ! You can participate on a word contest and compete with other people. If you win, you can get some scores !</p>
          <p><a class="btn btn-default" href="word_competition.php" role="button">Start the Word Competition ! &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p> WYBWYT 2016</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

</html>
