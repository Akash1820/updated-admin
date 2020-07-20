<!DOCTYPE html>
<html>
  <head>
    <title></title>
     <link rel="stylesheet" type="text/css" href="assets/css/header (1).css">
    <link rel="stylesheet" href="assets/css/style-liberty2.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Ultra&display=swap" rel="stylesheet">
  </head>
    <style>
        h2
        {
            margin-left: 10px;
            color: #b50d29;
        }
        .pwd
        {
            margin-left: 200px;
        }
        p
        {
            margin-left: 140px;
        }
    legend
        {
            text-align: center;
                  
        }
    fieldset
        {
              width: 35%;
            margin-left: 475px;
            background-color: ;
            
        }
   .input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background:#b50d29;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid #b50d29;
}

    button
        {
            height: 36px;
            width: 100%;
            background-color: #b50d29;
            font-size: 25px;
            color:white;
        }
    
    
    </style>
<body>

<div class="navbar" style="padding: 0;">
  <div class="container-fluid" style="background-color: #b50d29; width: 100%;">
    <div class="container">
      
        </div>
        </div>

<div class="container-fluid" style="background-color: white;">
    <div class="container">
      <div class="row">
        <div id="logo" class="col-md-8 col-sm-8 col-xs-12 animated fadeInDown">
          <h1 class="logos">
            <a href="loginn" title="Home">
               <img src="assets/images/header.jpeg" alt="Home" style="">
            </a>
          </h1>
        </div>
      <div class="col-md-4 col-sm-4 col-xs-12 search ">
        <br>
        <div class="polaroid">
          <img src="assets/images/saynotocrime.jpg">
        </div>
          
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" style="background-color: black; width: 100%;">
    <div class="container" style="margin-bottom: 0;">
      <div class="topnav" id="topnav">
        <ul>
         <li> <a href="login_admin" style="">Adminstration Login</a></li>

                </ul>
      </div>
    </div>
  </div>
 </div>


 <fieldset>
  <legend><img src="assets/images/bprd-logo.png" text-align="center" style="border-radius: 15px; height: 295px; width: 280px; margin-top: 25px;"></legend>
     <center>
     <h2>Bureau of Police and Research Department</h2>
   </center>
     <br><br>
     <form action="adminwelcome" method="POST">
      {{csrf_field()}}
    <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm">
  </div>
          <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>
         <button type="submit" onclick="form.submit()" value="LOGIN" style="border-radius: 10px;">LOGIN</button>
         <br><br>
    
    </form>
</fieldset>


<footer class="page-footer" style="background-color: black;">

  <!-- Copyright -->
    <div class="row footer-bottom">
        <div  style ="padding :35px;margin-right:0px; text-align: center; color: white;"class="col-md-10">
          <center>
            Site developed and maintained by Team Code Gear,<a href="https://www.facebook.com/pages/gitam-kablana/384890248243377" style="color: white;">GITAM</a> , Haryana. Send your feedbacks to <a href="https://mail.google.com/mail/u/1/#search/codegearsih2020%40gmail.com"  style="color: white;">codegearsih2020@gmail.com</a> </center>
        </div>
    </div>
  
</footer>    
</body>
</html>