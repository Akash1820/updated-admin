<!DOCTYPE html>
<html lang="en">
<head>
  <title>SARVASYA RAKSHA | ADMIN PORTAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/header (1).css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-liberty2.css">
    
    
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
</head>

<body>
  <div class="navbar" style="padding: 0;">
 
  <div class="container-fluid" style="background-color: #b50d29; width: 100%;">
  
<div class="container"></div> 
        </div>
      </div>

         <div class="container-fluid" style="background-color: white;">
    <div class="container">
      <div class="row">
        <div id="logo" class="col-md-8 col-sm-8 col-xs-12 animated fadeInDown">
          <h1 class="logo">
            <a href="/" title="Home">
               <img src="assets/images/header.jpeg" alt="Home" style="">
            </a>
          </h1>
        </div>
      <div class="col-md-4 col-sm-4 col-xs-12 search ">
        
        <div class="polaroid">
          <img src="assets/images/saynotocrime.jpg">
        </div>
          
        </div>
      </div>
    </div>
  </div>
<nav class="navbar navbar-expand-md  navbar-dark" style=" width: 100%; background-color: black; padding-top: 0px; padding-bottom: 0px;">
  
 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      
      <li>hjkl;</li>
    </ul>
  </div> 

   
</nav>
<br>
 <fieldset>
  <legend><img src="assets/images/bprd-logo.png" text-align="center" style="border-radius: 15px; height: 295px; width: 280px; margin-top: 25px;"></legend>
     <center>
     <h2>Bureau of Police and Research Department</h2>
     <br><br>
   </center>
     <form action="logout" method="GET">
      {{csrf_field()}}
    
         <button type="submit" onclick="form.submit()" value="LOGIN" style="border-radius: 10px;">ADMIN LOGIN</button>
       </form>
         <br>
<form action='login_admin' method="GET">
         <button type="submit" onclick="form.submit()" value="LOGIN" style="border-radius: 10px;">ADMINSTRATION LOGIN</button>
         <br><br>
    
    </form>


    Want to Register As Police Station Admin <a href="RegReq"> Click Here </a>
</fieldset>   

<footer class="page-footer" style="background-color: black;">

  <!-- Copyright -->
    <div class="row footer-bottom">
        <div  style ="padding :35px;margin-right:0px; text-align: center; color: white;"class="col-md-10">
            Site developed and maintained by Team Code Gear,<a href="https://www.facebook.com/pages/gitam-kablana/384890248243377" style="color: white;">GITAM</a> , Haryana. Send your feedbacks to <a href="https://mail.google.com/mail/u/1/#search/codegearsih2020%40gmail.com"  style="color: white;">codegearsih2020@gmail.com</a> 
        </div>
    </div>
  </div>
</footer>
<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
</script>

</body>
</html>
