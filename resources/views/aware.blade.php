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
    <p class="headernew" style="color: #b50d29; font-size: 3px;">Made With Love</p>
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
<nav class="navbar navbar-expand-md  navbar-dark" style=" width: 100%; background-color: black; padding-top: 0px; padding-bottom: 0px;">
  
 
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
<!--
    <div class="marquee">
        <p class="pp">Disaster strikes when you waver your concentration.Be Aware!</p>
    </div>
<div class="banner">
        <section id="dg-container" class="dg-container">
            <div class="dg-wrapper">
                <a href="#">
                    <img src="https://api.time.com/wp-content/uploads/2019/12/india-women-protests.jpg">
                </a>
                <a href="#">
                    <img src="https://www.grabellaw.com/docs/how_to_say_no_to_drugs_pic.jpg">
                </a>
                <a href="#">
                    <img src="https://gumlet.assettype.com/thequint-fit%2F2019-10%2Ff495df0c-e552-4223-bef4-a29f432e53be%2FiStock_486203059.jpg?auto=format%2Ccompress&w=600&dpr=2.6">
                </a>
                <a href="#">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTP7wQRAgP-Dn_weNw8Biyrfr-LmA8tmAbUfg&usqp=CAU">
                </a>
                <a href="#" >
                    <img src="https://astanatimes.com/wp-content/uploads/2014/11/shutterstock_128008547.jpg">
                </a>
            </div>
            <ol class="button" id="lightButton">
                <li index="0">
                <li index="1">
                <li index="2">
                <li index="3">
                <li index="4">
            </ol>
            <nav>
                <span class="dg-prev"></span>
                <span class="dg-next"></span>
            </nav>
        </section>
    </div> -->


    <div class="sidenav">
    <img src="assets/images/download.png">
    <h5 style="color:#b50d29; border-bottom:2px solid #ddd">HELLO ADMIN</h5>
      <h4><a href="#about">DASHBOARD</a></h4>
      <h4><a href="#about">REGISTRATION REQUESTS</a></h4>
  <h4><a href="#services">REGISTRATION APPROVAL</a></h4>
    <h4><a href="#clients">SARVASYA RAKSHAN</a></h4>
      <h4><a href="#contact">HELPLINE</a></h4>
      <h4><a href="#contact">HELPLINE</a></h4>
      <h4><a href="logout">LOGOUT</a></h4>
     </div>
    
    <div class="main">
      



    
    <div class="as">
    <div class="containerres">
      <div class="row">
        {{-- statics --}}
        <div class="column counter">
          <div class="card card_border border-primary-top p-4" style="height: 115px;">
            
            <h4 class="text-primary number">Total complaints</h4>
            <h3 class="text-primary number">{{$details['total_complaints']}} </h3>
            
          </div>
        </div>
        <div class="column counter">
          <div class="card card_border border-primary-top p-4" style="height: 115px;">
            {{-- <i class="lnr lnr-eye"> </i> --}}
            <h4 class="text-secondary number">FIR generated</h4>
            <h3 class="text-secondary number">{{$details['solved']}} </h3>
            
          </div>
        </div>
  
        <div class="column counter">
          <div class="card card_border border-primary-top p-4" style="height: 115px;">
            {{-- <i class="lnr lnr-cloud-download"> </i> --}}
             <h4 class="text-success number">Investigating</h4>
            <h3 class="text-success number">{{$details['investigating']}} </h3>
           
          </div>
        </div>
        <div class="column counter">
          <div class="card card_border border-primary-top p-4" style="height: 115px;">
            {{-- <i class="lnr lnr-cart"> </i> --}}
             <h4 class="text-danger number">Cancelled</h4>
            <h3 class="text-danger number">{{$details['declined']}}</h3>
          
      </div>
    </div>

      </div>
      <div class="row">
        
      <div class="column" style="width: 100%;">
        <div class="card" id= "column">
             
       
        </div>
      </div> 
    
      </div>
    <div class="row">


      <div class="column">
    <div class="card" id= "ps">
         
   
    </div>
  </div> 

  <div class="column">
  
    <div class="card" style=" height: 140px;">
         <a href="awareness" class="s">
        <span ></span>
        <span></span>
        <span></span>
        <span></span>
      <h4>REGISTRATION REQUESTS</h4>
    </a>
     <!-- <img style="width:100%;height:200px;" src="https://images.newindianexpress.com/uploads/user/imagelibrary/2020/1/24/w900X450/popolp_.JPG"/> -->
      
      <br>
        
    </div>
 
  
    <div class="card" style=" height: 140px; margin-top: 15px;">
         <a href="#" class="s"> 
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <h4>REGISTRATION APPROVAL</h4>
    </a>
     <!-- <img style="width:100%;height:200px" src="https://www.grgblaw.com/images/blog/2015/11/crime-rate.jpg"/> -->
  
        
  </div>

  <div class="card" style="margin-top: 5px">
      <h3 style="color:#b50d29">Send Notification To All Admin</h3>
       <form class="form"  action="send_msg" method="POST">
        {{csrf_field()}}
           <textarea name="message" class="messageText" id="message" autocomplete="off"></textarea>
           <button onclick="myFunction()" class="btn message"><i class = "fa fa-paper-plane"></i></button>
       </form>
 
  </div>
</div>
  
  


  
  <div class="column">
    <div class="card" style="width: 100%;" id= "ps">
     <!-- data tables -->
    <div class="data-tables" style="width: 100%;">
        <div class="row">
          <div class="col-lg-12 mb-4">
          <!-- -- <div class="card card_border p-4"> --}} -->
              <h3 class="card__title" style="color: #b50d29;" >POLICE STATION ADMIN LIST</h3>
              <div class="table-responsive" >
                <table id="example" class="display" style="width:100%">
               
  <br>

                <thead style="text-align:left">
          <tr>
            <th>S.No.</th>
  
            <th>Name</th>
            <th>police Station</th>
          </tr>
        </thead>
        <tbody style="text-align: left;padding:10px">

    @foreach ($details['Admins'] as $item)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$item->User_name}}</td>
        <td>{{$item->PS_name}}</td>
    </tr>
    
     @endforeach   
        </tbody>  
    </table>   
              </div>
            {{-- </div> --}}
          </div>
        </div>
    </div>
    
    </div>
  </div> 

  <div class="column">
    
  


  </div>

 <!--  <div class="column">
    <div class="card" id="">
         
   
    </div>
  </div>
 -->

</div> 
    </div></div>

    
    
    <footer class="page-footer" style="background-color: black;">

  <!-- Copyright -->
    <div class="row footer-bottom">
        <div  style ="padding :25px;margin-left: 120px; margin-top: 15px; text-align: center; color: white;"class="col-md-10">
          
            Site developed and maintained by Team Code Gear,<a href="https://www.facebook.com/pages/gitam-kablana/384890248243377" style="color: white;">GITAM</a> , Haryana. Send your feedbacks to <a href="https://mail.google.com/mail/u/1/#search/codegearsih2020%40gmail.com"  style="color: white;">codegearsih2020@gmail.com</a> 
          
        </div>
    </div>
    <script>
var dt = new Date();
document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
</script>
   
{{-- chart scripts --}}
<script language = "JavaScript">
   
  var colours=[ '#b50d29', '#ffff00', '#6629ad', ' #c99600','#b28033','#db6b00'];
     Highcharts.getOptions().colors = Highcharts.map(colours, function (color) {
   
   
              return {
                  radialGradient: {
                      cx: 0.5,
                      cy: 0.3,
                      r: 0.5
                  },
                  stops: [
                      [0,color],
                      [1, Highcharts.Color(color).brighten(-0.5, -0.5, -0.3, 0, - 0.8).get('rgb')] // darken
                  ]
              };
      
      
          });
       // Create the chart
Highcharts.chart('ps', {
  chart: {
backgroundColor:"#ffffe6",
borderRadius:"50px",
      type: 'pie',
      options3d: {
          enabled: true,
          alpha: 45
      }
  },
  lang: {
        drillUpText: '<<',
    },
  title: {
      text: 'Total crime'
  },
  subtitle: {
      text: 'click on crime to see the total statistics of solved'
  },
  plotOptions: {
      <!-- series: { -->
      pie: {
                allowPointSelect: true,
                cursor: 'pointer',
        innerSize:200,
                depth: 100,
        
        borderColor: 'transparent',
                
                dataLabels: {
                   enabled: true,
                   format: '{point.name}',
        
                }

        
         
  <!-- }, -->
      }
  },

   series: [
      {
          name: "Crime Category",
          colorByPoint: true,
          data: [
              {
                  name: "property crime",
                  y: {!!$details['Property Crime']!!},
                  drilldown: "property crime"
        
              },
              {
                  name: "cyber crime",
                  y:  {!!$details['Cyber Crime']!!},
                  drilldown: "cyber crime"
              },
              {
                  name: "personal crime",
                  y: {!!$details['Personal Crime']!!},
                  drilldown: "personal crime"
              },
              {
                  name: "Statutory Crime",
                  y: {!!$details['Statutory Crime']!!},
                  drilldown: "Statutory Crime"
              },
              {
                  name: "Financial Crime",
                  y: {!!$details['Financial Crime']!!},
                  drilldown: "Financial Crime"
              },
              {
                  name: "Inchoate Crime",
                  y: {!!$details['Inchoate Crime']!!},
                  drilldown: "Inchoate Crime"
              },
          ]
      }
  ],
    drilldown: {
        drillUpButton: {
                relativeTo: 'spacingBox',
                theme: {
                    fill: '#ffffe6',
                    'stroke-width': 0,
                    stroke: 'white',
                    r: 50,
                    states: {
                        hover: {
                            fill: '#ffcccc'
                        },
                    }
                }
        },
      series: [
          {
              name: "property crime",
              id: "property crime",
              data: [
                  [
                      "v65.0",
                      0.1
                  ],
                  [
                      "v64.0",
                      1.3
                  ],
                  [
                      "v63.0",
                      53.02
                  ],
                  [
                      "v62.0",
                      1.4
                  ],
                  [
                      "v61.0",
                      0.88
                  ],
                  [
                      "v60.0",
                      0.56
                  ],
                  [
                      "v59.0",
                      0.45
                  ],
                  [
                      "v58.0",
                      0.49
                  ],
                  [
                      "v57.0",
                      0.32
                  ],
                  [
                      "v56.0",
                      0.29
                  ],
                  [
                      "v55.0",
                      0.79
                  ],
                  [
                      "v54.0",
                      0.18
                  ],
                  [
                      "v51.0",
                      0.13
                  ],
                  [
                      "v49.0",
                      2.16
                  ],
                  [
                      "v48.0",
                      0.13
                  ],
                  [
                      "v47.0",
                      0.11
                  ],
                  [
                      "v43.0",
                      0.17
                  ],
                  [
                      "v29.0",
                      0.26
                  ]
              ]
          },
          {
              name: "cyber crime",
              id: "cyber crime",
              data: [
                  [
                      "v58.0",
                      1.02
                  ],
                  [
                      "v57.0",
                      7.36
                  ],
                  [
                      "v56.0",
                      0.35
                  ],
                  [
                      "v55.0",
                      0.11
                  ],
                  [
                      "v54.0",
                      0.1
                  ],
                  [
                      "v52.0",
                      0.95
                  ],
                  [
                      "v51.0",
                      0.15
                  ],
                  [
                      "v50.0",
                      0.1
                  ],
                  [
                      "v48.0",
                      0.31
                  ],
                  [
                      "v47.0",
                      0.12
                  ]
              ]
          },
          {
              name: "personal crime",
              id: "personal crime",
              data: [
                  [
                      "Rape",
                      {!!$details['Rape']!!}
                  ],
                  [
                      "Murder",
                      {!!$details['Murder']!!}
                  ],
                  [
                      "v9.0",
                      0.27
                  ],
                  [
                      "v8.0",
                      0.47
                  ]
              ]
          },
          {
              name: "Statutory Crime",
              id: "Statutory Crime",
              data: [
                  [
                      "v11.0",
                      3.39
                  ],
                  [
                      "v10.1",
                      0.96
                  ],
                  [
                      "v10.0",
                      0.36
                  ],
                  [
                      "v9.1",
                      0.54
                  ],
                  [
                      "v9.0",
                      0.13
                  ],
                  [
                      "v5.1",
                      0.2
                  ]
              ]
          },
          {
              name: "Financial Crime",
              id: "Financial Crime",
              data: [
                  [
                      "v16",
                      2.6
                  ],
                  [
                      "v15",
                      0.92
                  ],
                  [
                      "v14",
                      0.4
                  ],
                  [
                      "v13",
                      0.1
                  ]
              ]
          },
          {
              name: "Inchoate Crime",
              id: "Inchoate Crime",
              data: [
                  [
                      "v50.0",
                      0.96
                  ],
                  [
                      "v49.0",
                      0.82
                  ],
                  [
                      "v12.1",
                      0.14
                  ]
              ]
          }
      ]
  }
});
// <!-- column chart -->
  var chart = new Highcharts.Chart({
  chart: {
      renderTo: 'column',
      type: 'column',
  <!-- backgroundColor:"#ffcccc", -->
borderRadius:"50px",
      options3d: {
          enabled: true,
          alpha: 13,
          beta: 25,
          depth: 50,
          viewDistance: 50
      }
  },
xAxis: {
      type: 'category'
  },
  yAxis: {
      title: {
          text: 'Total number of cases'
      }
  },
  lang: {
        drillUpText: '<<',
    },
  title: {
      text: 'Crime all over India'
  },
  subtitle: {
      text: 'click the crime to get detailed chart'
  },
  plotOptions: {
      column: {
          depth: 50
      }
  },
colors: [
      
      '#00ff00',
      '#0000ff'
  ],
  series: [{
      data: [ {
                  name: "Jammu & Kashmir",
                  y: 62.74,
        color:"#000066",
                  drilldown: "Chrome"
        
              },
              {
                  name: "cyber crime",
                  y: 10.57,
        color:"#00ff00",
                  drilldown: "Firefox"
              },
              {
                  name: "Internet Explorer",
                  y: 7.23,
        color:"#000066",
                  drilldown: "Internet Explorer"
              },
              {
                  name: "Safari",
                  y: 5.58,
        color:"#00ff00",
                  drilldown: "Safari"
              },
              {
                  name: "Edge",
                  y: 4.02,
                  drilldown: "Edge"
              },
              {
                  name: "Opera",
                  y: 1.92,
        color:"#000066",
                  drilldown: "Opera"
              },
              {
                  name: "Other",
                  y: 7.62,
        color:"#00ff00",
                  drilldown: null
              }]
  }],
drilldown: {
  drillUpButton: {
                relativeTo: 'spacingBox',
                theme: {
                    fill: '#ffffe6',
                    'stroke-width': 0,
                    stroke: 'white',
                    r: 50,
                    states: {
                        hover: {
                            fill: '#ffcccc'
                        },
                    }
                }
        },
      series: [
          {
              name: "Chrome",
              id: "Chrome",
              data: [
                  [
                      "v65.0",
                      0.1
                  ],
                  [
                      "v64.0",
                      1.3
                  ],
                  [
                      "v63.0",
                      53.02
                  ],
                  [
                      "v62.0",
                      1.4
                  ],
                  [
                      "v61.0",
                      0.88
                  ],
                  [
                      "v60.0",
                      0.56
                  ],
                  [
                      "v59.0",
                      0.45
                  ],
                  [
                      "v58.0",
                      0.49
                  ],
                  [
                      "v57.0",
                      0.32
                  ],
                  [
                      "v56.0",
                      0.29
                  ],
                  [
                      "v55.0",
                      0.79
                  ],
                  [
                      "v54.0",
                      0.18
                  ],
                  [
                      "v51.0",
                      0.13
                  ],
                  [
                      "v49.0",
                      2.16
                  ],
                  [
                      "v48.0",
                      0.13
                  ],
                  [
                      "v47.0",
                      0.11
                  ],
                  [
                      "v43.0",
                      0.17
                  ],
                  [
                      "v29.0",
                      0.26
                  ]
              ]
          },
          {
              name: "Firefox",
              id: "Firefox",
              data: [
                  [
                      "v58.0",
                      1.02
                  ],
                  [
                      "v57.0",
                      7.36
                  ],
                  [
                      "v56.0",
                      0.35
                  ],
                  [
                      "v55.0",
                      0.11
                  ],
                  [
                      "v54.0",
                      0.1
                  ],
                  [
                      "v52.0",
                      0.95
                  ],
                  [
                      "v51.0",
                      0.15
                  ],
                  [
                      "v50.0",
                      0.1
                  ],
                  [
                      "v48.0",
                      0.31
                  ],
                  [
                      "v47.0",
                      0.12
                  ]
              ]
          },
          {
              name: "Internet Explorer",
              id: "Internet Explorer",
              data: [
                  [
                      "v11.0",
                      6.2
                  ],
                  [
                      "v10.0",
                      0.29
                  ],
                  [
                      "v9.0",
                      0.27
                  ],
                  [
                      "v8.0",
                      0.47
                  ]
              ]
          },
          {
              name: "Safari",
              id: "Safari",
              data: [
                  [
                      "v11.0",
                      3.39
                  ],
                  [
                      "v10.1",
                      0.96
                  ],
                  [
                      "v10.0",
                      0.36
                  ],
                  [
                      "v9.1",
                      0.54
                  ],
                  [
                      "v9.0",
                      0.13
                  ],
                  [
                      "v5.1",
                      0.2
                  ]
              ]
          },
          {
              name: "Edge",
              id: "Edge",
              data: [
                  [
                      "v16",
                      2.6
                  ],
                  [
                      "v15",
                      0.92
                  ],
                  [
                      "v14",
                      0.4
                  ],
                  [
                      "v13",
                      0.1
                  ]
              ]
          },
          {
              name: "Opera",
              id: "Opera",
              data: [
                  [
                      "v50.0",
                      0.96
                  ],
                  [
                      "v49.0",
                      0.82
                  ],
                  [
                      "v12.1",
                      0.14
                  ]
              ]
          }
      ]
  }
});
// <!-- state wise chart -->
  var chart = new Highcharts.Chart({
   chart: {
       renderTo: 'state_wise',
       type: 'column',
   <!-- backgroundColor:"#ffcccc", -->
 borderRadius:"50px",
       options3d: {
           enabled: true,
           alpha: 15,
           beta: 25,
           depth: 50,
           viewDistance: 25
       }
   },
 xAxis: {
       type: 'category'
   },
   yAxis: {
       title: {
           text: 'Total number of cases'
       }
   },
   title: {
       text: 'Crime all over India'
   },
   subtitle: {
       text: 'click the crime to get detailed chart'
   },
   plotOptions: {
       column: {
           depth: 50
       }
   },
 colors: [
       '#000066',
       '#00ff00',
       '#0000ff'
   ],
   series: [{
       data: [ {
                  name: "Jammu & Kashmir",
                   y: 62.74,
                   drilldown: "Chrome"
        
               },
               {
                   name: "cyber crime",
                   y: 10.57,
                   drilldown: "Firefox"
               },
               {
                   name: "Internet Explorer",
                   y: 7.23,
                   drilldown: "Internet Explorer"
               },
               {
                   name: "Safari",
                   y: 5.58,
                   drilldown: "Safari"
               },
               {
                   name: "Edge",
                   y: 4.02,
                   drilldown: "Edge"
               },
               {
                   name: "Opera",
                   y: 1.92,
                   drilldown: "Opera"
               },
               {
                   name: "Other",
                   y: 7.62,
                   drilldown: null
               }]
   }],
 drilldown: {
       series: [
           {
               name: "Chrome",
               id: "Chrome",
               data: [
                   [
                       "v65.0",
                       0.1
                   ],
                   [
                       "v64.0",
                       1.3
                   ],
                   [
                       "v63.0",
                       53.02
                   ],
                   [
                       "v62.0",
                       1.4
                   ],
                   [
                       "v61.0",
                       0.88
                   ],
                   [
                       "v60.0",
                       0.56
                   ],
                   [
                       "v59.0",
                       0.45
                   ],
                   [
                       "v58.0",
                       0.49
                   ],
                   [
                       "v57.0",
                       0.32
                   ],
                   [
                       "v56.0",
                       0.29
                   ],
                   [
                       "v55.0",
                       0.79
                   ],
                   [
                       "v54.0",
                       0.18
                   ],
                   [
                       "v51.0",
                       0.13
                   ],
                   [
                      "v49.0",
                       2.16
                   ],
                   [
                      "v48.0",
                      0.13
                  ],
                  [
                       "v47.0",
                     0.11
                   ],
                 [
                      "v43.0",
                      0.17
                   ],
                   [
                       "v29.0",
                       0.26
                  ]
              ]
           },
           {
               name: "Firefox",
               id: "Firefox",
               data: [
                  [
                      "v58.0",
                      1.02
                  ],
                  [
                      "v57.0",
                      7.36
                  ],
                  [
                      "v56.0",
                      0.35
                  ],
                  [
                      "v55.0",
                      0.11
                  ],
                  [
                      "v54.0",
                      0.1
                  ],
                  [
                      "v52.0",
                      0.95
                  ],
                  [
                      "v51.0",
                      0.15
                  ],
                  [
                      "v50.0",
                      0.1
                  ],
                  [
                      "v48.0",
                      0.31
                  ],
                  [
                      "v47.0",
                      0.12
                  ]
              ]
          },
          {
              name: "Internet Explorer",
              id: "Internet Explorer",
              data: [
                  [
                      "v11.0",
                      6.2

                  ],
                  [
                      "v10.0",
                      0.29
                  ],
                  [
                      "v9.0",
                      0.27
                  ],
                  [
                      "v8.0",
                      0.47
                  ]
              ]
          },
          {
              name: "Safari",
              id: "Safari",
              data: [
                  [
                      "v11.0",
                      3.39
                  ],
                  [
                      "v10.1",
                      0.96
                  ],
                  [
                      "v10.0",
                      0.36
                  ],
                  [
                      "v9.1",
                      0.54
                  ],
                  [
                      "v9.0",
                      0.13
                  ],
                  [
                      "v5.1",
                      0.2
                  ]
              ]
          },
          {
              name: "Edge",
              id: "Edge",
              data: [
                  [
                      "v16",
                      2.6
                  ],
                  [
                      "v15",
                      0.92
                  ],
                  [
                      "v14",
                      0.4
                  ],
                  [
                      "v13",
                      0.1
                  ]
              ]
          },
          {
              name: "Opera",
              id: "Opera",
              data: [
                  [
                      "v50.0",
                      0.96
                  ],
                  [
                      "v49.0",
                      0.82
                  ],
                  [
                      "v12.1",
                      0.14
                  ]
              ]
          }
      ]
  }
});

// // Create the data 
// Highcharts.chart('data', {
//   chart: {
// <!-- backgroundColor:"#ffcccc", -->
// borderRadius:"50px",
//       type: 'pie',
//       options3d: {
//           enabled: true,
//           alpha: 45
//       }
//   },
//   title: {
//       text: 'Total crime'
//   },
//   subtitle: {
//       text: 'click on crime to see the total statistics of solved'
//   },
//   plotOptions: {
//       <!-- series: { -->
//       pie: {
//                 allowPointSelect: true,
//                 cursor: 'pointer',
//         innerSize:200,
//                 depth: 100,
        
//         borderColor: 'transparent',
                
//                 dataLabels: {
//                    enabled: true,
//                    format: '{point.name}',
//         style: {
//                           color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
//                       },
//                 }

        
         
//   <!-- }, -->
//       }
//   },

//    series: [
//       {
//           name: "Browsers",
//           colorByPoint: true,
//           data: [
//               {
//                   name: "property crime",
//                   y: 62.74,
//                   drilldown: "Chrome"
        
//               },
//               {
//                   name: "cyber crime",
//                   y: 10.57,
//                   drilldown: "Firefox"
//               },
//               {
//                   name: "Internet Explorer",
//                   y: 7.23,
//                   drilldown: "Internet Explorer"
//               },
//               {
//                   name: "Safari",
//                   y: 5.58,
//                   drilldown: "Safari"
//               },
//               {
//                   name: "Edge",
//                   y: 4.02,
//                   drilldown: "Edge"
//               },
//               {
//                   name: "Opera",
//                   y: 1.92,
//                   drilldown: "Opera"
//               },
//               {
//                   name: "Other",
//                   y: 7.62,
//                   drilldown: null
//               }
//           ]
//       }
//   ],
//     drilldown: {
//       series: [
//           {
//               name: "Chrome",
//               id: "Chrome",
//               data: [
//                   [
//                       "v65.0",
//                       0.1
//                   ],
//                   [
//                       "v64.0",
//                       1.3
//                   ],
//                   [
//                       "v63.0",
//                       53.02
//                   ],
//                   [
//                       "v62.0",
//                       1.4
//                   ],
//                   [
//                       "v61.0",
//                       0.88
//                   ],
//                   [
//                       "v60.0",
//                       0.56
//                   ],
//                   [
//                       "v59.0",
//                       0.45
//                   ],
//                   [
//                       "v58.0",
//                       0.49
//                   ],
//                   [
//                       "v57.0",
//                       0.32
//                   ],
//                   [
//                       "v56.0",
//                       0.29
//                   ],
//                   [
//                       "v55.0",
//                       0.79
//                   ],
//                   [
//                       "v54.0",
//                       0.18
//                   ],
//                   [
//                       "v51.0",
//                       0.13
//                   ],
//                   [
//                       "v49.0",
//                       2.16
//                   ],
//                   [
//                       "v48.0",
//                       0.13
//                   ],
//                   [
//                       "v47.0",
//                       0.11
//                   ],
//                   [
//                       "v43.0",
//                       0.17
//                   ],
//                   [
//                       "v29.0",
//                       0.26
//                   ]
//               ]
//           },
//           {
//               name: "Firefox",
//               id: "Firefox",
//               data: [
//                   [
//                       "v58.0",
//                       1.02
//                   ],
//                   [
//                       "v57.0",
//                       7.36
//                   ],
//                   [
//                       "v56.0",
//                       0.35
//                   ],
//                   [
//                       "v55.0",
//                       0.11
//                   ],
//                   [
//                       "v54.0",
//                       0.1
//                   ],
//                   [
//                       "v52.0",
//                       0.95
//                   ],
//                   [
//                       "v51.0",
//                       0.15
//                   ],
//                   [
//                       "v50.0",
//                       0.1
//                   ],
//                   [
//                       "v48.0",
//                       0.31
//                   ],
//                   [
//                       "v47.0",
//                       0.12
//                   ]
//               ]
//           },
//           {
//               name: "Internet Explorer",
//               id: "Internet Explorer",
//               data: [
//                   [
//                       "v11.0",
//                       6.2
//                   ],
//                   [
//                       "v10.0",
//                       0.29
//                   ],
//                   [
//                       "v9.0",
//                       0.27
//                   ],
//                   [
//                       "v8.0",
//                       0.47
//                   ]
//               ]
//           },
//           {
//               name: "Safari",
//               id: "Safari",
//               data: [
//                   [
//                       "v11.0",
//                       3.39
//                   ],
//                   [
//                       "v10.1",
//                       0.96
//                   ],
//                   [
//                       "v10.0",
//                       0.36
//                   ],
//                   [
//                       "v9.1",
//                       0.54
//                   ],
//                   [
//                       "v9.0",
//                       0.13
//                   ],
//                   [
//                       "v5.1",
//                       0.2
//                   ]
//               ]
//           },
//           {
//               name: "Edge",
//               id: "Edge",
//               data: [
//                   [
//                       "v16",
//                       2.6
//                   ],
//                   [
//                       "v15",
//                       0.92
//                   ],
//                   [
//                       "v14",
//                       0.4
//                   ],
//                   [
//                       "v13",
//                       0.1
//                   ]
//               ]
//           },
//           {
//               name: "Opera",
//               id: "Opera",
//               data: [
//                   [
//                       "v50.0",
//                       0.96
//                   ],
//                   [
//                       "v49.0",
//                       0.82
//                   ],
//                   [
//                       "v12.1",
//                       0.14
//                   ]
//               ]
//           }
//       ]
//   }
// });


    </script>
  </div>
    <!-- data tables js -->
<script>
  $(document).ready(function () {
    $('#example').DataTable({
        "pagingType": "simple_numbers",
        "pageLength": 7,
        "bInfo" : false,
    });
  
  });
</script>
<!-- //data tables js -->

<script src="assets/js/jquery.dataTables.min.js"></script>


<script src="assets/js/faq.js"></script>

<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/scripts.js"></script>


<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
</body>

</html>