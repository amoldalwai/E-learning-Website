<!--#5FCF80 is color-->
<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
    .mouse
    {
        transform: rotate(90deg);
        background-color: black;
    }
    .price-table:hover
    {
       box-shadow: 5px 5px 5px lightgrey, -5px 0px 5px lightgrey;
    }
   .modal-header
    {
        background-color:#5FCF80;
        
    }
    .mybutton {
  border-radius: 0px 40px 40px 0px;
  background-color: #5FCF80;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.mybutton span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.mybutton span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.mybutton:hover span {
  padding-right: 25px;
}

.mybutton:hover span:after {
  opacity: 1;
  right: 0;
}
    .parallax {
    /* The image used */
    background-image: url("aboutus.jpg");

    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
 <style>

        /*  Page styles  */

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font: normal 14px/1.4 Arial, Helvetica, sans-serif;
        }

        .skrollr-desktop body {
            height:100% !important;
        }

        #skrollr-body {
            height:100%;
            overflow:visible;
            position:relative;
        }


        /*  Styles for this example */

        .dummy-content{
            padding: 150px 0;
            background: radial-gradient(white, #EEF6F9);
            color: #3FA564;
            font-size: 24px;
            height: 100vh;
            text-align: center;
        }

        .dummy-content h2{
            font-weight: normal;
        }


        .gallery{
            background-color: #fff;
            color: #221f51;
            font: normal 24px sans-serif;
            min-height: 300vh;
            text-align: center;
            overflow: hidden;
        }

        .scroll-pause{
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            padding-top: 20vh;
        }


        .scroll-pause .row{
            width: 200vw;
            height: 30vh;
            overflow: hidden;
        }

        .scroll-pause .row div{
            width: 11.5%;
            height: 90%;
            float: left;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            margin: 0.5%;
            border-radius: 10px;
        }

        .scroll-pause .row div:first-child{
            margin-left: 0.4%;
        }

        .scroll-pause .row div:last-child{
            margin-right: 0.4%;
        }



    </style>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>learntocode.com</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Mentor
    Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php"><span> Learn to Code</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a  href="home.php">Features</a></li>
          <li><a  href="home.php">Organisations</a></li>
          <li><a  href="home.php">Courses</a></li>
          <li><a  href="home.php">Contact Us</a></li>
          <li><a href="#" data-target="#login" data-toggle="modal">Log in</a></li>
          <li class="btn-trial"><a href="#" data-target="#signin" data-toggle="modal">Sign in</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
  <!--Modal box-->
    
    <br>
    <br>
    <br>
    
    
    

    
    
    
    
    
    
    
    
    
    
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title" style="color:white;">Login</h4>
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <p class="login-box-msg">Log in to start your session</p>
            <div class="form-group">
              <form  id="loginForm" action="loginltc.php" method="get" >
                <div class="form-group has-feedback">
                  <!----- username -------------->
                  <input class="form-control" placeholder="Username" id="loginid" type="text" autocomplete="off" name="fname"/>
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-user form-control-feedback" style="background-color: rgb(230,230,230);"></span>
                </div>
                <div class="form-group has-feedback">
                  <!----- password -------------->
                  <input class="form-control" placeholder="Password" id="loginpsw" type="text" autocomplete="off" name="pwd"/>
                  <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-lock form-control-feedback" style="background-color: rgb(230,230,230);"></span>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="checkbox icheck">
                      <label>
                                <input type="checkbox" id="loginrem" > Remember Me
                              </label>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button type="submit" class="btn btn-green btn-block btn-flat"  >Log In</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--/ Modal box-->
  <!--Banner-->
    
<!--    signup form-->
      <div class="modal fade" id="signin" role="dialog">
    <div class="modal-dialog modal-sm">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
          <h4 class="modal-title text-center form-title" style="color:white;">Create Account</h4>
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <div class="form-group">
              <form name="" id="loginForm" method="post" action="signupltc.php">
                <div class="form-group has-feedback">
                  <!----- username -------------->
                  <input class="form-control" placeholder="Username" id="loginid" type="text" autocomplete="off" name="fname"/>
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                  <!---Alredy exists  ! -->
                  <span class=" form-control-feedback glyphicon glyphicon-user" style="background-color: rgb(230,230,230);"></span>
                </div>
                <div class="form-group has-feedback">
                  <!----- mail -------------->
                  <input class="form-control" placeholder="E-mail"  type="text" autocomplete="off" name="email" />
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-envelope form-control-feedback" style="background-color: rgb(230,230,230);"></span>
                </div>
                <div class="form-group has-feedback">
                  <!----- password -------------->
                  <input class="form-control" placeholder="Password" id="loginpsw" type="text" autocomplete="off" name="pass"/>
                  <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-lock form-control-feedback" style="background-color: rgb(230,230,230);"></span>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="checkbox icheck">
                      <label>
                                <input type="checkbox" id="loginrem" > Remember Me
                              </label>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button type="submit" class="btn btn-green btn-block btn-flat" >Sign In</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
    
    
    
    
<!--    end of signup form-->
    <style>
        .heading
        {
            text-align: center;
            
        }
        .content
        {
            text-align: center;
            font-size: 15px;
            color: gray;
            margin-right: 400px;
            margin-left:400px;
            min-width: 200px;
            
        }
        @media only screen and (max-width: 800px) {
    .content {
                margin:0px;
    }
}
    </style>
    
    
    <div class="parallax"></div>

    <center><div class="heading"><h1>About us</h1></div></center><hr>
    <div class="content">
     Programming is a process, with 3 very important phases: Problem Identification and Solving Phase, Implementation Phase and Maintenance Phase. All three of them are important for computer programmers/software developers to be able to solve problems. A lot of developers would equate the programming process with only algorithm implementation, which is incorrect. Translating an algorithm into a programming language, which can then be compiled or interpreted and finally understood by a computer, is only a part of the programming process. In my humble opinion, it is also the easiest task.

In short, Computer Programming is a process by which you solve a problem.

In the modern world, with the amount of problems and their complexity increasing many fold, it is a tool to get solutions by carefully, pushing the repetitive tasks to the computer and thereby achieving “automation”, meanwhile still requiring input from programmers/software developers</div>
   <hr>
     <div class="parallax" style="background-image:url('aboutus2.jpg')"></div>

    <center><div class="heading"><h1>See yaa!</h1></div></center><hr>

    
    
<div id="skrollr-body">



  


    <div class="gallery"></div>

</div>

<div class="scroll-pause" data-anchor-target=".gallery" data-100p-top-top="transform:translateY(100%);" data-top-top="transform:translateY(0%)" data--150p-top-top="" data--300p-top-top="transform:translateY(-100%)">

    <div class="row" data-anchor-target=".gallery" data-top-top="transform: translateX(0%);" data--150p-top-top="transform: translateX(-50%);">
        <div style="background-image:url('course1.jpg');" ></div>

        <div style="background-image:url('course2.jpg');" ></div>

        <div style="background-image:url('course3.jpg');" ></div>

        <div style="background-image:url('course4.png');" ></div>

        <div style="background-image:url('course5.jpg');" ></div>

        <div style="background-image:url('course6.jpg');" ></div>

        <div style="background-image:url('course7.jpg');" ></div>

        <div style="background-image:url('course8.jpg');" ></div>
    </div>


    <div class="row" data-anchor-target=".gallery" data-top-top="transform: translateX(-50%);" data--150p-top-top="transform: translateX(0);">

        <div style="background-image:url('course9.png');" ></div>

        <div style="background-image:url('course10.png');" ></div>

        <div style="background-image:url('course11.png');" ></div>

        <div style="background-image:url('course13.png');" ></div>

        <div style="background-image:url('course14.png');" ></div>

        <div style="background-image:url('course15.jpg');" ></div>

        <div style="background-image:url('course16.png');" ></div>

        <div style="background-image:url('course1.jpg');" ></div>

    </div>

</div>

<script src="assets/skrollr.min.js"></script>

<script>
    skrollr.init();
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

  <!--/ Contact-->
  <!--Footer-->
  <footer id="footer" class="footer">
    <div class="container text-center">

      <h3>Suggestions Are Welcomed</h3>

      <form class="mc-trial row" action="review.php" method="get">
        <div class="form-group col-md-3 col-md-offset-2 col-sm-4">
          <div class=" controls">
            <input name="username" placeholder="Enter Your FullName" class="form-control" type="text">
          </div>
        </div>
        <!-- End email input -->
        <div class="form-group col-md-3 col-sm-4">
          <div class=" controls">
            <input name="comment" placeholder="Enter Your Suggestion" class="form-control" type="text">
          </div>
        </div>
        <!-- End email input -->
        <div class="col-md-2 col-sm-4">
          <p>
            <button name="submit" type="submit" class="btn btn-block btn-submit">
            Suggest this! <i class="fa fa-arrow-right"></i></button>
          </p>
        </div>
      </form>
      <!-- End newsletter-form -->
      <ul class="social-links">
        <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-dribbble fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
      </ul>
      ©2016 Learn To Code  All rights reserved
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Mentor
        -->
        Designed by <a href="https://amoldalwai.com/">Amol Dalwai</a>
      </div>
    </div>
  </footer>
  <!--/ Footer-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>
<!--    php for calculating visits in site-->
<?php

     
     if($_SERVER['REQUEST_METHOD']=="GET"){
       $localhost = "localhost";
       $usernamew = "root";
       $passwordw = "";
          $db = "expdb";
      $conn = mysqli_connect($localhost,$usernamew,$passwordw,$db);
      if(!$conn){
       echo "Connection error";
       }
         else{
     
     $sql = "UPDATE counter SET visit=visit+1 WHERE id = 2";
    $result = mysqli_query($conn,$sql);
 }

}

?>
</html>
