<?php 
  include('connection.php');
  if(isset($_POST['token']) && password_verify("signuptoken", $_POST['token']))
  {
    $username = $_POST['username'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($username!= "" && $phone_number!= "" && $password!= "" )
    {
     $query = $db->prepare('INSERT INTO details(username, phone_number, password) VALUES (?,?,?)');
     $data = array($username,$phone_number,password_hash($password, PASSWORD_DEFAULT));
     $execute = $query->execute($data);
     if($execute)
     {
          echo"data inserted Successfully";
     }
     else
     {
          echo"  something went wrong";
     }
    }
    else
    {
        echo"server error";
    }
  }
?>