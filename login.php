
<?php
session_start();
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
     <meta http-equiv="content-type" content="text/html; charset=UTF-8">
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
     <style>
        input{
            width:100%;
            color:black;
            padding:5px;
            border-radius:4px;
           
        }
       
      .close
        {
            position:absolute;
            right:15px;
            top:5px;
            color:#000;
            font-size: bold;
            background-clip: border-box;
        }
        .close:hover,.close:focus{
            color:red;
            cursor: pointer;
        }
         body{
            background-imge: url('backgroundmg1.jpg');
            background-repeat: no-repeat;
             background-color: #2F056D;
            position: relative;
             height:px;
            }
        #cb:hover{
            color:red;
        }
        .imgcontainer
        {
            text-align: center;
            margin: 10px 0 12px 0;
            position:relative;
        }
        #condition:hover
        {
           border-radius: 2px;
            padding:2px;
            background-color: skyblue;
            
        }
        #hkp{
            overflow-y: scroll;
        }
         #hp{
            overflow-y: scroll;
        }
        #modal-wrapper{
            overflow-y: scrol;
        }
        label{
            color: black;
        }
         .btn-bettersuccess{
            background-color:#FF1274;
             color:white;
         }
         a:hover{
             color:darkorange;
         }
    </style>
    <?php
     
    if(isset($_SESSION['user'])&&isset($_SESSION['uid']))
    {echo"<div class=\"container-fluid\"style=\"background:#0f710a;border:px solid black\">
             <div class=\"row\"style=\"margin-top:px\">
                 <div class=\"col-lg-4 col-md-5 col-sm-6 col-xs-12\"style=\"border:px solid black;padding-top:10px;padding-bottom:8px\"><hstyle=\"text-align:left;color:white;margin-left:px;font-family:calibri;font-weight:bold;float:left;text-size:16px\">GEQS</h></div>
                 <div class=\"col-lg-4 col-md-7 col-sm-6 col-xs-12\" style=\"padding-top:px;border:px solid black\">
       <h3 style=\"margin-left:px;font-weight:bold;font-family:calibri;color:white;text-align:justify;text-size:14px\">
       <img src=\"cote.png\"class=\"img-responsive\"></h3>
                      
    
                 </div>
                  <div class=\"col-lg-2 col-md-3 col-sm-3 col-xs-12\"style=\"border:px solid black;padding-top:20px;padding-bottom:10px;;padding-left:px\"><div class=\"img-container\">
                  <a href=\"#\"><img class=\"img-responsive\"src=\"people.png\"style=\"float:left;width:50px\"></a>
                  </div>
                  <div style=\"margin-top:14px;padding-left:3px\">
                 <h style=\"font-family:calibri;font-weight:bold;color:white;margin-left:5px;font-size:17px\"> Welcome ".$_SESSION['user']."</h></div>
                 </div>
                 <div class=\"col-lg-2 col-md-3 col-sm-3 col-xs-12\"style=\"border:px solid black;padding-top:20px;padding-bottom:38px;padding-left:15px\">
                 <div class=\"img-container\">
                  <a href=\"#\"><img class=\"img-responsive\"src=\"id1.png\"style=\"float:left;width:50px\"></a>
                  </div>
                  <div style=\"margin-top:8px;padding-left:3px\">
                 <h style=\"font-family:calibri;font-weight:bold;color:white;margin-left:5px;font-size:25px\"> ".$_SESSION['uid']."</h></div>
                  </div>
            </div>
         </div>
    <div class=\"container-fluid\">
              <div class=\"row\">
              <nav class=\"navbar navbar-default\" style=\"margin-top: 0px;text-align:center\">
                  <div class=\"container\"style=\"margin:0px\">
                      <div class=\"navbar-header\"style=\"\">
                          <button type=\"button\"class=\"navbar-toggle\"data-toggle=\"collapse\"data-target=\"#mynavs\">
                          <span class=\"icon-bar\"></span>
                              <span class=\"icon-bar\"></span>
                              <span class=\"icon-bar\"></span>
                          </button>
                      </div>
                      <div class=\"col-sm-2 col-md-1 col-lg-4\"style=\"border:px solid black\"></div>
                      <div class=\"col-sm-10 col-md-10 col-lg-8\"style=\"border:px solid black\">
                      <div class=\"collapse navbar-collapse\" id=\"mynavs\">
                      <ul class=\"nav nav-tabs navbar-nav\"style=\"15px\">
                          <li class=\"active\"><a href=\"#myhome\"data-toggle=\"tab\"style=\"font-weight:bold\">Home</a></li>
                          <li><a href=\"#myservices\"data-toggle=\"tab\"style=\"font-weight:bold\">Services</a></li>
                          <li><a href=\"#aboutus\"data-toggle=\"tab\"style=\"font-weight:bold\">About Us</a></li>
                           <li><a href=\"#contact\"data-toggle=\"tab\"style=\"font-weight:bold\">Contact Us</a></li>
                          <li><a href=\"myfaq.html\"data-toggle=\"tab\"style=\"font-weight:bold\">FAQs</a></li>
                          <li class=\"dropdown\"><a href=\"#\"class=\"dropdown-toggle\"data-toggle=\"dropdown\"style=\"font-weight:bold\">Profile<span class=\"caret\"></span></a>
                          <ul class=\"dropdown-menu\">
                           <li><a href=\"#\"style=\"font-weight:bold\">Edit Profile</a></li>
                            <li><a href=\"#\"style=\"font-weight:bold\">Share</a></li>
                          <li><a href=\"logout.php\"style=\"font-weight:bold\">Logout</a></li>
                          </ul>
                          </li>
                          </ul>                      
                      </div>          
                  </div>
                      <div class=\"col-sm-0 col-md-1 col-lg-0\"style=\"border:px solid black\"></div>
                  </div>
                  
                  </nav>
              
              </div>
        </div>";  
    }
    else
    {
        echo"<div class=\"alert alert-danger\">Please log in first to use our Data sharing service <a href=\"http://192.168.225.136/FileShare/ShareFile.php\" onclick=\"document.getElementById(\'modal-wrapper\').style.display=\'block\'\">click here</a><a href=\"ShareFile.php\"><span class=\"close\">&times;</span></a></div>";
         
    }
    
    ?> <script>
        $(document).ready(function(){
            $('#loginForm').formValidation({
                framework:'bootstrap',
                icon: {
                    valid:'glyphicon glyphicon-ok',
                    invalid:'glyphicon glyphicon-remove',
                    validating:'glyphicon glyphicon-refresh'
                },
                fields: {
                    id:{
                        validators:{
                            notEmpty:{
                                message:'Please Enter your id'
                            }
                        }
                    }                    
                }
            });
        });
    </script>
    </head>
    <body style=" background-image:url('backgroundim1.jpg');">
         
        <div class="container container-default">
             <div class="row">
               
        <div class="tab-content">
                  <div class="tab-pane <?php if(isset($_SESSION['user'])&&isset($_SESSION['uid']))echo"active"?>" id="myhome">               
                <div class="container"style="border:0px solid black;"><h1 style="color:#E84B20">Let's Share Your File in Safe Mode</h1><hr style="border-color:orange;opacity:0.6">
                    <p style="border-left:1px doted black;text-align:justify; font-family:calibri;font-weight:bold;font-size:18px;padding:8px;color:white; ">This plateform is  allow you to share the file in a secure way. Where your data is encrypted with 128-bit security. Here you can share Images, Videos, Pdf, Zip Files, RAR Files, .exe Files, Psd files, txt, pdf, jpg Files, jpeg files, Windows installer (setup file), rpm, yum etc. This is the true plateform for Sharing the files and important data. We hope that you are happy to use this plateform.<br>
                    </p>
                    <hr style="border-color:orange;opacity:0.6">
                    <p style="color:white;font-weight:bold;font-family:calibri;font-size:18px">To send the file or data please click on the Send Button<br><br></p>
                                  
                      </div>
                    
                
            <div class="container-fluid">
             <div class="row"style="margin-top:px">
                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"style="border:px solid black;padding-top:15px;padding-bottom:15px"><img src="hd-abstract-artworks-cool-desktop-images-colorful-pictures-cool-beautiful-windows-10-wallpaper-drawing-design-1920x1200.jpg"class="img-responsive"></div>
                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-top:15px;">
        <form id="registrationForm"class="modal-content"style="width:100%;padding-left:40px;padding-right: 40px;padding-top:5px;background: white;background: rgba(0,0,0,0.1);">
            <a style="width:100%;height:45px;font-size:18px;margin-left:;margin-top:22px;padding-top:10px"data-toggle="tab"class="btn btn-primary"onclick="document.getElementById('hkp').style.display='block'">Send</a><br><br>
                       <a style="width:100%;height:45px;font-size:18px;margin-left:;margin-right:auto;padding-top:10px"data-toggle="tab" class="btn btn-success "onclick="document.getElementById('hp').style.display='block'">Receive</a><br><br>      
             <a style="width:100%;height:45px;font-size:18px;margin-left:;margin-right:auto;padding-top:10px"data-toggle="tab" class="btn btn-bettersuccess "onclick="document.getElementById('x').style.display='block'">Save Data</a><br><br>      
            </form>
                      
    
                 </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"style="border:px solid black;padding-top:15px;padding-bottom:15px"><img src="hd-abstract-artworks-cool-desktop-images-colorful-pictures-cool-beautiful-windows-10-wallpaper-drawing-design-1920x1200.jpg"class="img-responsive"></div>
         </div></div>
                    </div>
                 
                 
                 <div id="myservices"class="tab-pane">
        <h1 style="color:darkcyan">Our Services...</h1>
            <hr style="width:auto;">
        </div>
                 <div id="contact"class="tab-pane">
        <h1 style="color:darkcyan">Contact Us...</h1>
            <hr style="width:auto;">
                     <div class="modal-container" style="background:white;padding:10px;padding-right:15px">
                     <p style="font-size:28px;font-family:calibri;color:black;margin-left:5px;text-align:justify;font-weight:bold">
                      1. You Can Send mail in <a style="text-decoration:none;"href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"target="_blank">anjamul.ah686@gmail.com</a> or <a style="text-decoration:none;"href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"target="_blank">arvindkumararya392@gmail.com</a> and also you can do message in our whattsapp number +917733096238 or +919875243529.<br>
                         2. If you have any query regarding sending the data or receiving data the you can ask your query after clicking on the FAQs tab.
                     </p>
                         </div>
        </div>
              <div id="aboutus"class="tab-pane">
        <h1 style="color:lightskyblue;">We Provide World best Secure plateform to Share your Files</h1>
            <hr style="width:auto;">
        </div>   
                 
                 
                 
                 
                 
                 </div>
            </div>
            </div>
         <div class="container-fluid modal"id="hkp">
             <div class="row"style="margin-top:25px;">
                 <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1"></div>
                 <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10" style="padding:0px;">
        <form id="loginForm"class="modal-content"style="width:100%;padding-left:40px;padding-right: 40px;padding-top:5px;background: rgba(0,0,0,0.1);color:white;background: white;" action="http://192.168.225.136/FileShare/upload.php" method="post"enctype="multipart/form-data">
            <span class="close" title="Close" onclick="document.getElementById('hkp').style.display='none'">&times;</span>
            <div class="imgcontainer">
            <img src="file_sharing.png" alt=""class="">
            <h1 style="text-align:center;color:black;border:1px solid black;">Send <br>ID - <?php echo"".$_SESSION['uid']?></h1>
                <h1>yourid</h1>
            </div> 
            <div class="form-group"><input name="receiver"type="text"class="form-control"placeholder="Enter receiver name here..."></div>
            <div class="form-group">
           <input id="myfile"type="file" name="myfile[]"multiple="multiple"><br>
            <input type="number" placeholder="Enter Above ID"class="form-control"name="id"></div><br><br>
            <input type="submit" value="Send"class="btn btn-success"><br><br>
           <br><br>
            
            </form>
                 </div>
                  <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1"></div>
             </div>
            </div>
        <div class="container-fluid modal"id="hp">
             <div class="row"style="margin-top:25px;">
                 <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1"></div>
                 <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10" style="padding:0px;">
        <form id=""class="modal-content"style="width:100%;padding-left:40px;padding-right: 40px;padding-top:5px;background: rgba(0,0,0,0.1);color:white;background: white;" action="http://192.168.225.136/FileShare/receive.php" method="post">
            <span class="close" title="Close" onclick="document.getElementById('hp').style.display='none'">&times;</span>
            <div class="imgcontainer">
            <img src="file_sharing.png" alt=""class="">
            <h1 style="text-align:center;color:black;">Receive</h1>
            </div>  
            <input type="number" placeholder="Enter Sender id here..."class="form-control"name="myid"><br><br>
          <input  type="submit" value="Get Link"class="btn btn-success"><br><br>
           <br><br>
            
            </form>
                 </div>
                  <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1"></div>
             </div>
            </div>
        <script type="text/javascript" href="js/jquery-3.3.1.js"></script>
        <script type="text/javascript" href="js/bootstrap.js"></script>
    </body>
    
</html>