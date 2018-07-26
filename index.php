<html>
<head>
    <?php
    if(isset($_POST['register'])){
        if(isset($_POST['uname'])&&isset($_POST['passwd']))
        {$username=$_POST['uname'];
        $email=$_POST['email'];
        $password=$_POST['passwd'];
        $tablename[0]=$username[0];
        $tablename[1]=$username[1];
        $tablename[2]=$username[2];
        $tablename[3]=$username[3];
        $tablename1=implode("",$tablename); 
        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,'greenathon');
        $query=mysqli_query($con,"insert into guser(username,email,password) values('$username','$email','$password')");
         
        if($query){
            echo"<div class=\"alert alert-success\"style=\"padding:6px;margin-bottom:0px;\"><h5 style=\"text-align:center;\">Your Account has been created Successfully<h5><a href=\"index.php\"><span class=\"close\"style=\"float:right;margin-top:-30px;margin-right:20px;\">&times;</span></a></div>";
            $result=mysqli_query($con,"select * from gutablename");
            $s=1;
            $num=mysqli_num_rows($result);
 
            for($i=1;$i<=$num;$i++){
            $row=mysqli_fetch_array($result);
            if($row['tablename']==$tablename1)
            {
                $tablename1=$tablename1.$s;
                echo"$tablename1";
         
            }
        }
            $query1=mysqli_query($con,"create table $tablename1 (senderid int(20),fileno varchar(40))");
            if($query){
                $q=mysqli_query($con,"insert into gutablename(tablename,gusername)values('$tablename1','$username')");
                if($q){
                    echo"Query Inserted  Tablename Successfully!";
                }
                mysqli_close();
            }
        }
        else{
             echo"<div class=\"alert alert-danger\"style=\"padding:6px;margin-bottom:0px;\"><h5 style=\"text-align:center;\">Something Went Wrong!<h5><a href=\"index.php\"style=\"float:right;margin-top:-30px;margin-right:20px;\"><span class=\"close\">&times;</span></a></div>";                mysqli_close();

        }
        }
        else{
            echo"<div class=\"alert alert-danger\"style=\"padding:6px;margin-bottom:0px;\"><h5 style=\"text-align:center;\">Pleasel fill your Username and Password properly.<h5><a href=\"index.php\"><span class=\"close\"style=\"float:right;margin-top:-30px;margin-right:20px;\">&times;</span></a></div>";                mysqli_close();

        }
    }
    if(isset($_POST['login'])){
        if(isset($_POST['uname'])&&isset($_POST['passwd'])){
            $username=$_POST['uname'];
            $password=$_POST['passwd'];
            $con=mysqli_connect('localhost','root','');
            mysqli_select_db($con,'greenathon');
            $result=mysqli_query($con,"select * from guser");
    $num=mysqli_num_rows($result);
    $id=rand(1,100000000);
    $finalid=$id+rand(rand(500,10000000),rand(1,5000000));
    $condition=false;
    for($i=1;$i<=$num;$i++)
    {
        $row=mysqli_fetch_array($result);
        $dbusername=$row['username'];
        echo"$dbusername";
        $dbpassword=$row['password'];
        $dbemail=$row['email'];
        if(($GLOBALS['username']==$dbusername||$GLOBALS['username']==$dbemail)&&($GLOBALS['password']==$dbpassword))
        {
          $GLOBALS['condition']=true;
            break;
        }
        
    }
    if($condition)
    {
        session_start();
        $_SESSION['user']=$dbusername;
        $_SESSION['uid']=$GLOBALS['finalid'];
        header("Location:login.php");
    }
    else
    {
        echo"<div class=\"alert alert-danger\"style=\"padding:6px;margin-bottom:0px;\"><h5 style=\"text-align:center;\">Invalid Username or Password <h5><a href=\"index.php\"><span class=\"close\">&times;</span></a></div>";
         
    }
        }
    }
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/bootstrap.css">
     
<!-- Bootstrap CSS v3 -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- FormValidation CSS file -->
<link rel="stylesheet" href="css/formValidation.min.css">

<!-- jQuery v1.9.1 or higher -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>

<!-- FormValidation plugin and the class supports validating Bootstrap form -->
<script src="js/formValidation.min.js"></script>
<script src="js/framework/bootstrap.min.js"></script>
    <script src="validation.js"></script>
    <style>
        .div1{
            background:#1e1f21;
            padding:0px;
            padding-top:10px;
        }
        .imgcontainer
        {
            text-align: center;
            margin: 10px 0 12px 0;
            position:relative;
        }
        #modal-wrapper{
            overflow-y: scroll;
        }
        body{
            background:url(46551_anime_scenery_studio_ghibli_anime_landscapes.jpg);
            background-repeat: no-repeat;
        }
    </style>
    <script type="text/javascript">
     $(document).ready(function() {
    $('#registrationForm').formValidation({
       framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields:{
            uname: {
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_ \.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            passwd: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    },
                    different: {
                        field: 'uname',
                        message: 'The password should not be the same as username'
                    }
                }
            },
             cpasswd: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    },
               
                identical: {
                        field:'passwd',
                        message:'Password does not match'
                    }
                }
            },
            mycheck:{
                validators: {
                    notEmpty: {
                        message:'Please Select Terms & Condition'
                    }
                }
            }
               
    }
        
    });
});
        </script>
    </head>
    <body>
        <div class="container-fluid"style="background:#1e1f21">
            <div class="row">
                <div class="col-sm-4 col-md-3 col-lg-4 ">
        <h1 style="text-align:left;color:white;margin-left:px;font-family:calibri;font-weight:bold;float:left;text-size:16px">GEQS</h1>   </div>        
         <div class="col-sm-8 col-md-9 col-lg-8 "style="border:1px solid blak;margin-top: 15px; padding-left:0px">
             <form action="" method="post"class="form-inline"id="loginform"style="padding-bottom:5px;">
                <div class="form-group" style="margin-left: 10px;margin-top: 10px">
             <input style="height:50px;font-size:14px;font-weight:bold;font-family:tahoma;"type="text" class="form-control"name="uname"placeholder="username or email">
             </div>
             <div class="form-group"style="margin-left: 10px;margin-top: 10px">
             <input type="password" class="form-control"name="passwd"placeholder="Password"style="height:50px;font-size:14px;font-weight:bold;font-family:tahoma;">
             </div>
                  <div class="form-group"style="margin-left:10px;margin-top: 10px;marin-right:20px">
                     <button style="idth:150px;height:50px;"type="submit" class="btn btn-success form-control"name="login">Log in</button>
             </div>
                 <div class="form-group"style="margin-left: 10px;margin-top:10px;border:px solid black">
               <a href="forgot.php"style="margin-top:0px;;height:50px;padding-top:14px" class="btn btn-warning form-control">forgot password</a> 
                 </div>
                 <div class="form-group"style="margin-left: 10px;margin-top: 10px">
                 <a style="with:150px;height:50px;padding-top:14px"href=""data-toggle="tab"class="btn btn-primary form-control" onclick="document.getElementById('modal-wrapper').style.display='block'">New User</a>
             </div>
              
                    
            </form> 
                </div>
            </div>
        </div>
       
      
              <div class="container-fluid modal"id="modal-wrapper">
             <div class="row"style="margin-top:15px">
                 <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1"></div>
                 <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10" style="padding:0px;">
        <form id="registrationForm"class="modal-content"style="width:100%;padding-left:40px;padding-right: 40px;padding-top:5px;background: white;"action=""method="post">
            <span class="close" title="Close" onclick="document.getElementById('modal-wrapper').style.display='none'">&times;</span>
            <div class="imgcontainer">
            <img src="register.png" alt=""style="">
            <h1 style="text-align:center">Sign Up</h1>
            </div>  <div class="form-group">          
            <label>Enter Username: </label><br>
                <input type="text" name="uname" class="form-control"placeholder="Username"style="padding:6px">
            </div><br>
            <div class="form-group">    
                <label >Enter E-Mail: </label><br>
            <input type="text" name="email" placeholder="Email" class="form-control" style="padding:6px">
            </div><br>
                <div class="form-group">    
                    <label >Enter Password: </label><br>
                    <input type="password" name="passwd" class="form-control" placeholder="Password"style="padding:6px">
            </div><br>
                <div class="form-group">     
                    <label >Confirm Password: </label><br>
                    <input type="password" name="cpasswd"  class="form-control" placeholder="Confirm-Password"style="padding:6px">
            </div>
            <br>
            <div class="form-group">
            <input type="checkbox"style="margin-left: 0px;width:12px;conlor:black"name="mycheck"> I Agree <a href="#"id="condition"style="text-decoration: none;color:blue;padding:0px;">Terms & Condition</a></div><br>
            <div class="form-group">
               <button type="submit"class="btn"style="background-color:#E8420D;color:white;font-family: calibri;width:100%"name="register">Register</button>
            </div><br>
            </form>
                      
    
                 </div>
                  <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1"></div>
         </div></div> 
    </body>
</html>