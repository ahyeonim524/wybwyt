<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
</head>
<body>

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
    //mysql 연결
    $sql=$_POST['email'];

    $conn=mysqli_connect('localhost','root','znfnfn1002');
    //DB 선택
    mysqli_select_db($conn,'wybwyt');
    //쿼리문
    mysqli_query($conn,$sql);

   ?>
</body>
</html>
