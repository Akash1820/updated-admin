<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="referrer" content="no-referrer"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Official Website of BPRD" >
        <meta name="keywords" content="Official Website of BPRD" >
        <link rel="canonical" href="https://bprd.nic.in" />
        <title>Crime Reporting Portal</title>
        <!-- CSS and bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/header.css" rel="stylesheet">
        <link href="css/horizBarChart.css" rel="stylesheet">

        <link rel="stylesheet" href="css/jquery-confirm.min.css"  media="screen" charset="utf-8" />
<!-------bootstrapCDN------->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        


        <script src="https://keralapolice.gov.in/media/js/jquery-1.11.2.min.js"></script>

        
<style>


body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 95%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #b50d29;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 13%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}



/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {

  .cancelbtn {
     width: 100%;
  }
}

</style>



    </head>
<body>
      <!--     <canvas id="canvas"></canvas> -->
  <div class="top-bar hidden-xs" >
            <div class="container" id="top">
                <div class="row">
                    <div class="col-md-6 top-nav hidden-sm hidden-xs " >
                    <!---test-->
                    </div>

                    <div class="col-md-6 top-nav pull-right" style="text-align: right" >

                        <a href="#" id="btn-decrease" class="social-icon" title="Decrease font size">A-</a> &nbsp;
                        <a href="#" id="btn-orig" class="social-icon" title="Default font size">A</a> &nbsp;
                        <a href="#" id="btn-increase" class="social-icon" title="Increase font size">A+</a>&nbsp;

                        <a class="btn social-icon" href="https://www.facebook.com/BPRDIndia/" target="blank" ><i class="fa  fa-facebook-square"></i></a>
                        <a class="btn social-icon" href ="https://twitter.com/bprdindia" target="blank" ><i class="fa  fa-twitter-square"></i></a>
                        <a class="btn social-icon" href ="https://www.youtube.com/channel/UCGhrg_cnnGuhwXfCU16kYow" target="blank" ><i class="fa  fa-youtube-square"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container body-wrapper">
            <div class="row header">
                <div class="col-md-12 header-cnt hidden-sm hidden-xs" >

                    <img src="assets/images/header.png" class="img-responsive" />


                </div>
            </div>
<div class="smodal" id="serModal">
    <div class="smodal-content">
        <span class="sclose">&times;</span>
        <input type="text" id="myInput" onkeyup="myFunction()" style="position: -webkit-sticky;position: sticky;top: 0px;" placeholder="Type to Search " title="Type in a name" autocomplete="off">
        <ul id="myUL">

        </ul>
    </div>
</div>
<!-- Navigation ----------------------->
<div class="yamm navbar navbar-default main-nav" role="navigation" id="nav">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand visible-xs" href="">BPRD</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="menu-item hidden-xs current-menu">
                    <a href="https://bprd.nic.in/"> <i class="fa fa-home" style="font-size: 1.5em; line-height: 15px;"></i></a>
                </li>
                <li class="menu-item dropdown yamm-fw ">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">BPRD<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <div class="yamm-content">
                            <div class="row">
                                <div class="col-md-3">
                                    <h4>About Us</h4>
                                   
                                    <h4>Events</h4>


                                </div>
                                <div class="col-md-3">
                                    <h4>Innovative Initiatives</h4>
                                    <ul class="list-group list-unstyled">

				    </ul>
                                </div>
                               
                                


                            </div>
                        </div>
                    </ul>
                </li>
                <li class="dropdown yamm-fw ">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">RESOURCES<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h4>FAQs</h4>
                                        
                                        <h4>User Manual</h4>
                                        
                                    </div>
                            
                                    
                                    <div class="col-md-3">
                                        <h4>Helpline </h4>
                                        
                                    </div>
                                </div>
                               
                            </div>
                        </li>
                    </ul>
                </li>
                
                <li class="dropdown yamm-fw ">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">HELPLINE<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                </div>
                                <div class="row">
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
		
		
		 <li class="" style="margin-left:11vw">
                <li  id="myBtn" style="margin-left:.1vw">
                    <a >
                <i class="fa fa-search" style="font-size:15px;cursor:pointer;"></i>
                <b> SEARCH </b>
                    </a>

                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Navigation Ends ------------------>
    



<h2><center>Login Form For Officer</center></h2>
 @auth
           {{Auth::user()->name}} 
           <a href="/logout">Logout</a>
 @endauth
<form action="/action_page.php" method="post">
  <div class="imgcontainer">
    <img src="assets/images/bprdlogo.png" alt="B.P.R.D" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
  
    <button type="submit"><a href="welcome.blade.php">Login</a></button>
  
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    
  </div>
</form>

<div class="container">
    <div class="row footer-bottom">
        <div  style ="padding-right:0px;margin-right:0px; text-align: center"class="col-md-10">
            Site developed and maintained by Team Code Gear, GITAM, Haryana. Send your feedbacks to xyz@cimereporting.in 
        </div>
	
	 
	
	<div style ="padding-left:0px;margin-left:0px"class="col-md-1">
            <a href="" title="feedback"><img src="https://keralapolice.gov.in/media/images/icon/feedback.png" class="img-responsive"/></a>
        </div>
	
    </div>
</div>
</body>
</html>