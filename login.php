<?php
require 'config.php';
//include 'checkconn.php';

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password= $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM utente WHERE email ='$email' ");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION['email'] = $row["email"];
            $_SESSION['id'] = $row["id"];
            $id= $row["id"];
            header("Location: inbox.php");
        }
        else{
            echo "<script> alert('password errata') </script>";
        }
    }
    else{
        echo "<script> alert('Username non esistente!') </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<style>
  body{
    margin: 0;
    padding: 0;
    font-family: Roboto;
    background-repeat: no-repeat;
    background-size: cover;
    background: linear-gradient(120deg, #007bff, #d0314c);
    height: 100vh;
    overflow: hidden;
  }

  .center{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 29vw;
    background: white;
    border-radius: 10px;
  }

  .center h1{
    text-align: center;
    padding: 0 0 20px 0;
    border-bottom: 1px solid silver;
  }

  .center form{
    padding: 0 40px;
    box-sizing: border-box;
  }

  form .txt_field{
    position: relative;
    border-bottom: 2px solid #adadad;
    margin: 30px 0;
  }

  .txt_field input{
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 16px;
    border: none;
    background: none;
    outline: none;
  }

  .txt_field label{
    position: absolute;
    top: 50%;
    left: 5px;
    color: #adadad;
    transform: translateY(-50%);
    font-size: 16px;
    pointer-events: none;
  }

  .txt_field span::before{
    content: '';
    position: absolute;
    top: 40px;
    left: 0;
    width: 0px;
    height: 2px;
    background: #2691d9;
    transition: .5s;
  }

  .txt_field input:focus ~ label,
  .txt_field input:valid ~ label{
    top: -5px;
    color: #2691d9;
  }

  .txt_field input:focus ~ span::before,
  .txt_field input:Valid ~ span::before{
    width: 100%;
  }

  .pass{
    margin: -5px 0 20px 5px;
    color: #a6a6a6;
    cursor: pointer;
  }

  .pass:hover{
    text-decoration: underline;
  }

  input[type="Submit"]{
    width: 100%;
    height: 50px;
    border: 1px solid;
    border-radius: 25px;
    font-size: 18px;
    font-weight: 700;
    cursor: pointer;

  }

  input[type="Submit"]:hover{
    background: #2691d9;
    color: #e9f4fb;
    transition: .5s;
  }

  .signup_link{
    margin: 30px 0;
    text-align: center;
    font-size: 16px;
    color: #666666;
  }

  .signup_link a{
    color: #2691d9;
    text-decoration: none;
  }

  .signup_link a:hover{
    text-decoration: underline;
  }

  .HomeAbout{
    width: 100vw;
    height: 25vh;
  }

</style>
<head>
  <title>Home</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
<div class="container">
  <div class="center">
    <h1>Login</h1>
    <form action="" method="POST">
        <!--<div class="txt_field">
            <input type="text" name="nome" required>
            <span></span>
            <label>Nome</label>
        </div>-->
      <div class="txt_field">
              <input type="email" name="email" required>
        <span></span>
        <label>Email</label>
      </div>
      <div class="txt_field">
        <input type="password" name="password" required>
        <span></span>
        <label>Password</label>
      </div>
      <div class="pass">Forgot Password?</div>
      <input name="submit" type="Submit" value="Login">
      <div class="signup_link">
        Not a Member ? <a href="signup.php">Signup</a>
      </div>
    </form>
  </div>
</div>
</body>
</html>