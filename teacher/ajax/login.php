<?php

  include('connection.php');
  session_start();
  if(isset($_POST['token']) && password_verify("logintoken",$_POST['token']))
  {
      
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query=$db->prepare('SELECT * FROM details WHERE username=?');
    $data=array($username);
    $execute = $query->execute($data);
    if($query->rowcount()>0)
    {
      while($datarow=$query->fetch())
      {
        if(password_verify($password,$datarow['password']))
        {
          $_SESSION['id'] = $datarow['id'];
          $_SESSION['name'] = $datarow['username'];
        }
      }
    }
    else
    {
      echo "please signup again, no data found";
    }
  }
  else
  {
    echo "server error";
  }
?>