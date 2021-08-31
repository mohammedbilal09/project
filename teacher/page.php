<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="page.css">  
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="heading">
                Signup page
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
    <!-- <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="row">
                <div class="col-sm-6">
                    <div class="button">
                    <button id="loginbtn" onclick="showlogin();">LOG IN</button>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="button">
                    <button id="signupbtn" onclick="showsignup();">SIGN UP</button>
                    </div>  
                </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
<!--  -->

    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="row">
                <div class="form">
                    <div class="loginform1" id="loginform1">
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
                                <center><button id="submit" onclick="loginsubmit();">Submit</button></center>
                            </div>
                        </form>
                   </div>
              </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>

 -->

    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="row">
                <div class="signupform1" id="signupform1">
                    <form>
                        
                        <label>Username</label>
                        <input type="text" name="username" id="username" placeholder="Enter your username" required="username" class="contact_space">
                        <label>Phone number</label>  
                        <input type="text" name="phone_number" id="phone_number" placeholder="contact no." required="text" class="contact_space">
                        <!-- <label>Gender</label>
                        <select name="gender" id="gender" class="contact_space">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select> -->
                        <label>Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password" required="password" class="contact_space">
                        <label>Confirm password</label>
                        <input type="password" name="cpassword" id="cpassword" placeholder="Enter your password again" required="password" class="contact_space">
                    

                        <div class="button">
                            <center><button id="submit1" name="signup" onclick="sendsignup();">Submit</button></center>
                        </div>
                    </form>
               </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>


    <script type="text/javascript">    
        // function showlogin(){
        //     var login =document.getElementById('loginform1');
        //     var signup=document.getElementById('signupform1');
        //     signup.classList.add('hidden');
        //     login.classList.remove('hidden');
        //     login.classList.add('show');
        // };

        // function showsignup(){
        //     var login=document.getElementById('loginform1');
        //     var signup=document.getElementById('signupform1');
        //     login.classList.add('hidden');
        //     signup.classList.remove('hidden');
        //     signup.classList.add('show');
        // };

        // function loginsubmit(){
        //     var username=document.getElementById('username1').value;
        //     var password=document.getElementById('password1').value;
        //     var token="<?php echo password_hash('logintoken', PASSWORD_DEFAULT);?>";
        //     if(username!="" && password!="")
        //     {
        //         $.ajax(
        //         {
        //             type:'POST',
        //             url:'ajax/login.php',
        //             data:{username:username,password:password,token:token},
        //             success:function(data)
        //             {
        //                 if(data == 0){
        //                     window.location = "dashboard.php";
        //                 }
        //             }
        //         });
        //     }
        //     else
        //     {
        //         alert('Please fill all the details in the given fields');
        //     }
        // }

        function sendsignup()
        {
            var username = document.getElementById('username').value;
            var phone_number = document.getElementById('phone_number').value;
            var password = document.getElementById('password').value;
            var cpassword = document.getElementById('cpassword').value;
            var token = "<?php echo password_hash("signuptoken",PASSWORD_DEFAULT);?>";
            if(username!= "" && password!="" && cpassword!= "" && phone_number!= "" )
            {
                if( password == cpassword)
                {
                    $.ajax(
                {
                    type:'post',
                    url:"ajax/signupp.php",
                    data:{username:username,phone_number:phone_number,password:password,cpassword:cpassword,token:token},
                    success:function(data)
                    {
                        alert(data);          
                    }
                });
                }
                else
                {
                    alert('Please fill confirm password same as password');
                }
            }
            else
            {
                alert('Please fill all fields!');
            }
        }
        

   
    
    
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