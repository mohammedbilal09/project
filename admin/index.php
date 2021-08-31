<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styling.css">  
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="heading">
                LOGIN DASHBOARD
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-4">
                    <div class="button">
                    <button id="adminbtn" onclick="showadmin();">ADMIN</button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="button">
                    <button id="teacherbtn" onclick="showteacher();">TEACHER</button>
                    </div>  
                </div>
                <div class="col-sm-4">
                    <div class="button">
                    <button id="studentbtn" onclick="showstudent();">STUDENT</button>
                    </div>  
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>


    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="row">
                <div class="form">
                    <div class="loginform1 hidden" id="loginform1">
                        <form>
                            <div class="contact">
                                <label>Username:</label>
                                <input type="text" placeholder="Enter your username" name="username1" id="username1" class="contact_space">
                            </div>
                            <div class="contact">
                                <label>Password:</label>
                                <input type="password" placeholder="Enter your password" name="password1"  id="password1" class="contact_space"><br>
                            </div>
                            <div class="button">
                                <center><button id="submit" onclick="submitadmin();">Submit</button></center>
                            </div>
                        </form>
                   </div>
              </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>



    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="row">
                <div class="form">
                    <div class="loginform2" id="loginform2">
                        <form>
                            <div class="contact">
                                <label>Username:</label>
                                <input type="text" placeholder="Enter your given username as teacher" name="username2" id="username2" class="contact_space">
                            </div>
                            <div class="contact">
                                <label>Password:</label>
                                <input type="password" placeholder="Enter given password" name="password2"  id="password2" class="contact_space"><br>
                            </div>
                            <div class="button">
                                <center><button id="submit1" onclick="submitteacher();">Submit</button></center>
                            </div>
                        </form>
                   </div>
              </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>






    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="row">
                <div class="form">
                    <div class="loginform3 hidden" id="loginform3">
                        <form>
                            <div class="contact">
                                <label>Username:</label>
                                <input type="text" placeholder="Enter your given username as student" name="username3" id="username3" class="contact_space">
                            </div>
                            <div class="contact">
                                <label>Password:</label>
                                <input type="password" placeholder="Enter your password given by the teacher" name="password3"  id="password3" class="contact_space"><br>
                            </div>
                            <div class="button">
                                <center><button id="submit2" onclick="submitstudent();">Submit</button></center>
                            </div>
                        </form>
                   </div>
              </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>



   


    <script type="text/javascript">    
        function showadmin(){
            var login =document.getElementById('loginform1');
            var form=document.getElementById('loginform2');
            var student=document.getElementById('loginform3');
            login.classList.remove('hidden');
            login.classList.add('show');
            form.classList.add('hidden');
            student.classList.add('hidden');

        };

        function showteacher(){
            var login =document.getElementById('loginform1');
            var form=document.getElementById('loginform2');
            var student=document.getElementById('loginform3');
            form.classList.remove('hidden');
            form.classList.add('show');
            login.classList.add('hidden');
            student.classList.add('hidden');
        };
        function showstudent(){
            var login =document.getElementById('loginform1');
            var form=document.getElementById('loginform2');
            var student=document.getElementById('loginform3');
            student.classList.remove('hidden');
            student.classList.add('show');
            login.classList.add('hidden');
            form.classList.add('hidden');
        };

        function submitadmin(){
            var username=document.getElementById('username1').value;
            var password=document.getElementById('password1').value;
            var token="<?php echo password_hash('admintoken', PASSWORD_DEFAULT);?>";
            if(username!="" && password!="")
            {
                $.ajax(
                {
                    type:'POST',
                    url:'ajax/login.php',
                    data:{username:username,password:password,token:token},
                    success:function(data)
                    {
                        if(data == 0){
                            window.location = "dashboard.php";
                        }
                    }
                });
            }
            else
            {
                alert('Please fill all the details in the given fields');
            }
        }

        function submitteacher(){
            var username=document.getElementById('username2').value;
            var password=document.getElementById('password2').value;
            var token="<?php echo password_hash('teachertoken', PASSWORD_DEFAULT);?>";
            if(username!="" && password!="")
            {
                $.ajax(
                {
                    type:'POST',
                    url:'ajax/login1.php',
                    data:{username:username,password:password,token:token},
                    success:function(data)
                    {
                        if(data == 0){
                            window.location = "dashboard1.php";
                        }
                    }
                });
            }
            else
            {
                alert('Please fill all the details in the given fields');
            }
        }


        // function submittudent(){
        //     var username=document.getElementById('username3').value;
        //     var password=document.getElementById('password3').value;
        //     var token="<?php echo password_hash('studenttoken', PASSWORD_DEFAULT);?>";
        //     if(username!="" && password!="")
        //     {
        //         $.ajax(
        //         {
        //             type:'POST',
        //             url:'ajax/login2.php',
        //             data:{username:username,password:password,token:token},
        //             success:function(data)
        //             {
        //                 if(data == 0){
        //                     window.location = "dashboard2.php";
        //                 }
        //             }
        //         });
        //     }
        //     else
        //     {
        //         alert('Please fill all the details in the given fields');
        //     }
        // }

        // function sendsignup()
        // {
        //     var username = document.getElementById('username').value;
        //     var phone_number = document.getElementById('phone_number').value;
        //     var password = document.getElementById('password').value;
        //     var cpassword = document.getElementById('cpassword').value;
        //     var token = "<?php echo password_hash("signuptoken",PASSWORD_DEFAULT);?>";
        //     if(username!= "" && password!="" && cpassword!= "" && phone_number!= "" )
        //     {
        //         if( password == cpassword)
        //         {
        //             $.ajax(
        //         {
        //             type:'post',
        //             url:"ajax/signupp.php",
        //             data:{username:username,phone_number:phone_number,password:password,cpassword:cpassword,token:token},
        //             success:function(data)
        //             {
        //                 alert(data);          
        //             }
        //         });
        //         }
        //         else
        //         {
        //             alert('Please fill confirm password same as password');
        //         }
        //     }
        //     else
        //     {
        //         alert('Please fill all fields!');
        //     }
        // }
        

   
    
    
   </script>


   <script type=text/javascript>
    $('form').submit(function(e){
        e.preventDefault();
    });
   </script>

   
</body>

</html>
    
<!-- function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} -->


<!-- 
$2y$10$LkiVkIKFpKVAwUT4/AQCs.4Zrj6IipfEyUr/Jjc0KRaMxvCcEfhaO -->