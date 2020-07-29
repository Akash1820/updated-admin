

   
<!DOCTYPE html>
<html>

<head>
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="assets/css/header (1).css">
    <script src="js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
{{-- chart library  --}}
<script src = "https://code.highcharts.com/highcharts.js"></script>  
      <script src = "https://code.highcharts.com/modules/drilldown.js"></script>  
      <script src = "https://code.highcharts.com/modules/data.js"></script> 
    <script src = "https://code.highcharts.com/highcharts-3d.js"></script>
    <style>
       
       .highcharts-credits {
display: none !important;
}
/* highcharts-drillup-button {

  display: none;
} */
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.success {background-color: #4CAF50;} /* Green */
.success:hover {background-color: #033f05cb;}
      .sideNav {
  background-color: #333547;
  height: 100%;
  position: fixed;
  width: 210px;
  display: inline-block;
}
h3{
    
}


.dataTables_wrapper .dataTables_paginate .paginate_button {
    padding : 10px;
    margin-left: 0px;
    display: inline-block;
    border: 5px solid #ffff;
    font-size: 8px;
    cursor: pointer;
    color:#b50d29
}
.dataTables_wrapper .dataTables_paginate .paginate_button:hover{
   
    border: 5px solid #fffffb;
    background-color:#f0f0dd;
    color: #000;
    cursor: pointer;
} 
.dataTables_filter label
{ width: 100% }
.dataTables_filter input
{ width: 100% ;
  
  box-shadow:0 4px 8px 0 #b50d29
}
.dataTables_filter input:focus
{ width: 100% ;
  box-shadow:0 4px 8px 0 #b50d29;
  border:none
}
.dataTables_length{
  display: none;
}
.display {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

.display th, .display td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

.display tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}
    </style>
<!--    card-->

    <style>
* {
  box-sizing: border-box;
  
}
body{
   
 width: 100%;
    overflow-x: hidden;
}



/* Float four columns side by side */
.column {
  float: left;
  width: 50%;
  padding:  10px;
}

/* Remove extra left and right margins, due to padding */
/* .row {margin: 0 -5px;} */

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.counter{
  margin-right:0px ;
  width:25%;
  display: inline-block;
  
}

/* Responsive columns */
@media screen and (max-width: 1300px) {
  .counter{
    width:50%;
  }
}
@media screen and (max-width: 900px) {
  .column {
    width: 100%;
    height: 25%;
    display: block;
    margin-bottom: 20px;
      
  }
  .counter{
    width:100%;
  }

}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 #b50d29;
/*    border-radius: 25px;*/
  padding: 16px;
  text-align: center;
  /*background-image:radial-gradient(#ffffff,#ffff99);*/
}
        
/*        glowing button*/
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    margin-right: 0px;
  }

.s{
    position: relative;
    display: inline-block;
    padding: 25px 30px;
   width: 100%;
    color: #b50d29;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.5s;
    letter-spacing: 4px;
    overflow: hidden;
    margin-right: 50px;
   
}
.s:hover{
    /* background: darkgreen; */
    color: darkgreen;
    border-radius: 50px;
    box-shadow: 0 0 5px darkgreen,
                0 0 25px darkgreen,
                0 0 50px darkgreen,
                0 0 200px darkgreen;
     -webkit-box-reflect:below 1px linear-gradient(transparent, #03e9f4);
}
.s:nth-child(1){
    filter: hue-rotate(270deg);
}
.s:nth-child(2){
    filter: hue-rotate(110deg);
}
.s span{
    position: absolute;
    display: block;
}
.s span:nth-child(1){
    top: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg,transparent,#b50d29);
    animation: animate1 1s linear infinite;
}
@keyframes animate1{
    0%{
        left: -100%;
    }
    50%,100%{
        left: 100%;
    }
}
.s span:nth-child(2){
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg,transparent,#b50d29);
    animation: animate2 1s linear infinite;
    animation-delay: 0.25s;
}
@keyframes animate2{
    0%{
        top: -100%;
    }
    50%,100%{
        top: 100%;
    }
}
.s span:nth-child(3){
    bottom: 0;
    right: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg,transparent,#b50d29);
    animation: animate3 1s linear infinite;
    animation-delay: 0.50s;
}
@keyframes animate3{
    0%{
        right: -100%;
    }
    50%,100%{
        right: 100%;
    }
}


.s span:nth-child(4){
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg,transparent,#b50d29);
    animation: animate4 1s linear infinite;
    animation-delay: 0.75s;
}
@keyframes animate4{
    0%{
        bottom: -100%;
    }
    50%,100%{
        bottom: 100%;
    }
}
  

        .aa{
            font-size: 16px;
            color: black;
        }

        .form{
  display: flex;
}
        .messageText{
            width: 80%;
            border: 2px inset maroon;
            resize: none;
            height: 90%;
            font-size: 20px;
           box-shadow:0 4px 8px 0 #b50d29
        }
        .messageText:hover{
          border: 2px outset blue;
        }
        .message{
          width: 15%;
          height:80%;
          border-radius:20px;
          margin-left:10px ; 
          background:#ffff;
          color: maroon;
          font-size: 30px
        }
        .message:hover{
          background: blue;
          color: white
        }


   
 .sidenav {
  height: 81%;
  width: 250px;
  position: fixed;
  z-index: 1;
  left: 0;
  bottom: 1px;
  background-color: #fffffb;
  overflow-x: hidden;
  border: outset;
  border-top-color: transparent;
  border-color: #b50d29;
  word-wrap: break-word;
  overflow-y: scroll
}

.sidenav a {
  text-decoration: none;
  padding: 10px;
  display: block;
  font-size: 15px;
  font-weight: bolder;
  color: #b50d29;
  border-bottom:1px solid #ddd;
  position: relative;
  text-align: left
  
}
::-webkit-scrollbar{
  width: 2px
}
.header a,
.link {
  
}

.link {
  color: #3B78E7;
  display: inline-block;
}

/*.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}*/
.sideNav img{
  height: 20%;
  align: center
}
.sidenav a:hover {
  color: #ffffff;
  background-color: #b50d29;
}

.main {
  margin-left: 280px; /* Same as the width of the sidenav */
  margin-right: 30px;
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.hdr{
  position: sticky;
  z-index: 1;
  top: 0;
}

/*input[type=text] {
  width: 130px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}*/

        </style>
    </head>

<body>
<div class="hdr">
<div class="container-fluid" style="background-color: #b50d29;">
  
      <div class="row" style="background-color: #b50d29;">
        <div class="col-md-9 order-same order-md-2">
            <div class="date">
    <p class="headernew" style="color: #b50d29; font-size: 8px;">Made With Love</p>
  </div>
</div>
  <!-- <div class="col-md-3 order-same order-md-2">
                                                <div class="icons">
       <a href="https://www.facebook.com/BPRDIndia/"><i class="fa fa-facebook-square" align="right" style="font-size:36px;color:white"></i></a>
     <a href="https://twitter.com/BPRDIndia?s=20"><i class="fa fa-twitter-square" style="font-size:36px;color:white"></i></a>                
    <a href="https://www.youtube.com/channel/UCGhrg_cnnGuhwXfCU16kYow"><i class="fa fa-youtube-square" style="font-size:36px;color:white"></i></a>
</div>
</div> -->
        </div>
      </div>

         <div class="container-fluid" style="background-color: white;">
    
      <div class="row">
        <div id="logo" class="col-md-8 col-sm-8 col-xs-12 animated fadeInDown">
          <h1 class="logo">
            <a href="" title="Home">
               <img src="assets/images/header.jpeg" alt="Home" style="height: 100px;">
            </a>
          </h1>
        </div>
      <div class="col-md-4 col-sm-4 col-xs-12 search ">
        
        <div class="polaroid">
          <img src="assets/images/saynotocrime.jpg" style="height: 80px;">
        </div>
          
        </div>
      </div>
    </div>
 


 <!-- <div class="container-fluid" style="background-color: #b50d29; ">
  
      <div class="row" style="background-color: #b50d29;">
       <div class="col-md-9 order-same order-md-2">
            <div class="date">
    <p class="headernew"><span id="datetime"></span></p>
  </div>
</div>
 
        </div>
      </div> -->
<nav class="navbar navbar-expand-md  navbar-dark" style=" width: 100%; background-color: black; padding: 5px;">
  
 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="row">
  <div claass="collapse navbar-collapse" id="collapsibleNavbar">
    <div class="date">
    <p class="headernew"><span id="datetime"></span></p>
  </div>
</div>
   
    
   </div>   
  
</nav>
</div>



    <div class="sidenav">
    <img src="assets/images/download.png">
    <h5 style="color:#b50d29; border-bottom:2px solid #ddd">HELLO ADMIN</h5>
        <h4><a href="#about">DASHBOARD</a></h4>
      <h4><a href="#about">REGISTRATION REQUESTS</a></h4>
  <h4><a href="#services">REGISTRATION APPROVAL</a></h4>
    <h4><a href="#clients">SARVASYA RAKSHAN</a></h4>
      <h4><a href="#contact">HELPLINE</a></h4>
      <h4><a href="#contact">HELPLINE</a></h4>
      <h4><a href="#contact">HELPLINE</a></h4>
      <h4><a href="#contact">HELPLINE</a></h4>
      <h4><a href="#contact">HELPLINE</a></h4>
      <h4><a href="#contact">HELPLINE</a></h4>
      <h4><a href="#contact">HELPLINE</a></h4>
      <h4><a href="#contact">HELPLINE</a></h4>
</div>
    
    <div class="main">
      



    
    <div class="as">
    <div class="containerres">
      <div class="row">
        <!-- {{-- statics --}} -->
        <div class="column counter">
          <div class="card card_border border-primary-top p-4" style="height: 115px;">
            
            <h4 class="text-primary number">Total complaints</h4>
            
            
          </div>
        </div>
        <div class="column counter">
          <div class="card card_border border-primary-top p-4" style="height: 115px;">
            <!-- {{-- <i class="lnr lnr-eye"> </i> --}} -->
            <h4 class="text-secondary number">FIR generated</h4>
            
            
          </div>
        </div>
  
        <div class="column counter">
          <div class="card card_border border-primary-top p-4" style="height: 115px;">
            <!-- {{-- <i class="lnr lnr-cloud-download"> </i> --}} -->
             <h4 class="text-success number">Investigating</h4>
           
           
          </div>
        </div>
        <div class="column counter">
          <div class="card card_border border-primary-top p-4" style="height: 115px;">
            {{-- <i class="lnr lnr-cart"> </i> --}}
             <h4 class="text-danger number">Cancelled</h4>
           
          
      </div>
    </div>

      </div>
      <div class="row">
  <div class="column" style="width: 100%;">
    <div class="card" style="width: 100%;" >
    
    <!-- data tables -->
    <div class="data-tables">
      <div class="row">
        <div class="col-lg-12 mb-4">
          <div class="card card_border p-4">
            <h3 class="card__title position-absolute">Registration Request Table</h3>
            <div class="table-responsive">
              <table id="example" class="display" style="width:100%">
             

              <thead>
        <tr>
          
          <th>Name</th>
          <th>Staion Name</th>
          
          <th>E-Mail</th>
          <th>IP Address</th>
          <th>ID-Number</th>
          <th>ID Proof</th>
          <th>E-Sign</th>
          <th>Accept</th>
          <th>Decline</th>
        </tr>
      </thead>
                <tbody>
              
              @foreach($details['reg'] as $row)
                 <tr>
         
          <td>{{$row->Name}}</td>
          <td>{{$row->PS_name}}</td>
          
          <td>{{$row->e_mail}}</td>
          <td>{{$row->Ip_Address}}</td>
          <td>{{$row->ID_number}}</td>  
          <td>{{$row->ID_proof}}</td>
          <td>{{$row->E_sign}}</td> -->
          

        
    <td>
   <!-- Button trigger modal -->
   <form method="post" action="approve/{{$row->ID_number}}">
     {{ csrf_field() }}
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#anyid" onclick="form.submit()">
  Accept
</button>
</form>
</td>
    <td>
   <!-- Button trigger modal -->
   <form method="post" action="reject/{{$row->ID_number}}">
     {{ csrf_field() }}
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#anyid" onclick="form.submit()">
  Decline
</button>
</form>

          @endforeach
         
        </td> 
    

        </tr>
       
       </tbody>
              </table>
 </div>
          </div>
     

</div>
    
    </div>
  </div> 

  
 <!--  <div class="column">
    <div class="card" id="">
         
   
    </div>
  </div>
 -->

</div> 
    </div>

    </div>
    </div>
    </div>
    
    <footer class="page-footer" style="background-color: black;">

  <!-- Copyright -->
    <div class="row footer-bottom">
        <div  style ="padding :25px;margin-left: 120px; margin-top: 15px; text-align: center; color: white;"class="col-md-10">
          
            Site developed and maintained by Team Code Gear,<a href="https://www.facebook.com/pages/gitam-kablana/384890248243377" style="color: white;">GITAM</a> , Haryana. Send your feedbacks to <a href="https://mail.google.com/mail/u/1/#search/codegearsih2020%40gmail.com"  style="color: white;">codegearsih2020@gmail.com</a> 
          
        </div>
    </div>
    </footer>
  </body>
  </html>