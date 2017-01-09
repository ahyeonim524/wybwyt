<!DOCTYPE html>
<html>
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

  <div class="jumbotron">
        <div class="container" >
         <h1>WYBWYT Sign in</h1>

       </div>
     </div>

  <?php
    /*
    Connection for Oracle DB
    $id = "system";
    $password = "BKShin2331";
    $server = "210.125.112.80";

    $conn = oci_connect($id, $password, $server);

    if(!$conn){
      echo "No Connection".oci_error();
      exit;
    }
    else{
      echo "Connect Success !!";
    }

    $email=$_POST["email"];
    echo $email;

    $pwd = $_POST["pwd"];
    echo $pwd;
    */

    //email, password, passwordconfirm 받고 password==passwordconfirm인지 확인
    $received_email=$_POST['email'];
    $received_password=$_POST['pwd'];
    $received_password_confirm=$_POST['pwdconfirm'];

    //password==passwordconfirm인 경우에만 DB 저장
    if(strcmp($received_password,$received_password_confirm)==0){

      //회원가입 축하 메세지 출력
      echo '<p style="color: blue; text-align: center"> Thank you for your sign up ! </p>';

      //mysql 연결
      $conn=mysqli_connect('localhost','root','znfnfn1002');

      if(!$conn){
        die('Could not connect : '.mysql_error);
      }

      //DB 선택
      mysqli_select_db($conn,'wybwyt');

      //쿼리문
      $sql="INSERT INTO users (`email`,`password`) VALUES('".$received_email."','".$received_password."')";
      mysqli_query($conn,$sql);

    }
    else{
      //비밀번호 확인하라는 메세지 출력
      echo '<p style="color: red; text-align: center"> Please check your password again ! </p>';
    }



    //$sql="INSERT INTO users (email,password) VALUES ('".$_POST['email']."','".$_POST['password']."',now())";
    //$result=mysqli_query($conn,$sql);

    //FETCH
    //$row=mysqli_fetch_assoc($result);

    //echo $row['email'];


   ?>
</body>
</html>
