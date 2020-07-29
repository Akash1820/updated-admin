<!DOCTYPE html>
<html lang="en">
<head>
  <title>header and footer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/header (1).css">
  <link rel="stylesheet" href="assets/css/style-liberty2.css">
  <!-- google fonts -->
  <link href="http://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/header (1).css">
{{-- chart library  --}}
<script src = "https://code.highcharts.com/highcharts.js"></script>  
      <script src = "https://code.highcharts.com/modules/drilldown.js"></script>  
      <script src = "https://code.highcharts.com/modules/data.js"></script> 
	  <script src = "https://code.highcharts.com/highcharts-3d.js"></script>
    <style>
.marquee {
            height: 50px;
            overflow: hidden;
            position: relative;
            font-size: 40px;
            color: #b50d29;
            position: absolute;
            width: 100%;
            height: 100%;
            margin: 0;
            line-height: 50px;
            text-align: center;
            -moz-transform: translateX(100%);
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
            -moz-animation: scroll-left 2s linear infinite;
            -webkit-animation: scroll-left 2s linear infinite;
            animation: scroll-left 15s linear infinite;
        }
.btn {
  color: black;
  cursor: pointer;
  font-size: 16px;
  font-weight: 400;
  line-height: 45px;
  margin: 0 0 2em;
  max-width: 450px;
  position: relative;
  text-decoration: none;
  text-transform: uppercase;
  width: 100%;
  margin-top: 100px;
}


.btn-1 {
  background: white;
  font-weight: 100;
}
.btn-1 svg {
  height: auto;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}
.btn-1 rect {
  fill: none;
  stroke: black;
  stroke-width: 2;
  stroke-dasharray: 422, 0;
  -webkit-transition: all 0.35s linear;
  transition: all 0.35s linear;
}

.btn-1:hover {
  background: white;
  font-weight: 900;
  letter-spacing: 5px;
}
.btn-1:hover rect {
  stroke-width: 5;
  stroke-dasharray: 15, 310;
  stroke-dashoffset: 48;
  -webkit-transition: all 1.35s cubic-bezier(0.19, 1, 0.22, 1);
  transition: all 1.35s cubic-bezier(0.19, 1, 0.22, 1);
}


      * {
  box-sizing: border-box;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 50%;
  padding:  10px;
      text-align: center;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 800px) {
  .column {
    width: 100%;
    display: block;

    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 8px 5px 0 	#d2d2d2;
  padding: 16px;
  text-align: center;
  <!-- background-color: #b50d29; -->
  border-radius:50px;
}
.highcharts-credits {
display: none !important;
}

    </style>
</head>

<body>
 
  <div class="container-fluid" style="background-color: #b50d29;">
  
      <div class="row" style="background-color: #b50d29;">
       <div class="col-md-9 order-same order-md-2">
            <div class="date">
    <p class="headernew"><span id="datetime"></span></p>
  </div>
</div>
  <div class="col-md-3 order-same order-md-2">
                                                <div class="icons">
       <a href="https://www.facebook.com/BPRDIndia/"><i class="fa fa-facebook-square" align="right" style="font-size:36px;color:white"></i></a>
     <a href="https://twitter.com/BPRDIndia?s=20"><i class="fa fa-twitter-square" style="font-size:36px;color:white"></i></a>                
    <a href="https://www.youtube.com/channel/UCGhrg_cnnGuhwXfCU16kYow"><i class="fa fa-youtube-square" style="font-size:36px;color:white"></i></a>
</div>
</div>
        </div>
      </div>

         <div class="container-fluid" style="background-color: white; width: 100%;">
    <div class="container" style=" width: 100%;">
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
      <li class="nav-item">
        <a class="nav-link active" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Emergency Complaint</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Report crime</a>
      </li>    
         <li class="nav-item">
        <a class="nav-link" href="#">Crime Awareness</a>
      </li>  
         <li class="nav-item">
        <a class="nav-link" href="#">Resources</a>
      </li>  
         <li class="nav-item">
        <a class="nav-link" href="#">Helpline</a>
      </li>  
         <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="#">FAQ</a>
      </li> 
      <li></li>
    </ul>
  </div> 
</nav>
<marquee>
BHARAT MATA KI JAI !!!                                     BHARAT MATA KI JAI !!!                                 BHARAT MATA KI JAI !!!
</marquee>
<!-- statistics data -->
<div class="statistics">
  <div class="row">
    <div class="col-xl-6 pr-xl-2">
      <div class="row">
        <div class="col-sm-6 pr-sm-2 statistics-grid">
          <div class="card card_border border-primary-top p-4">
            {{-- <i class="lnr lnr-users"> </i> --}}
            <h2 class="text-primary number">Total complaints</h2>
            <h3 class="text-primary number">{{$details['total_complaints']}} </h3>
            
          </div>
        </div>
        <div class="col-sm-6 pl-sm-2 statistics-grid">
          <div class="card card_border border-primary-top p-4">
            {{-- <i class="lnr lnr-eye"> </i> --}}
            <h2 class="text-secondary number">FIR generated</h2>
            <h3 class="text-secondary number">{{$details['solved']}} </h3>
            
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 pl-xl-2">
      <div class="row">
        <div class="col-sm-6 pr-sm-2 statistics-grid">
          <div class="card card_border border-primary-top p-4">
            {{-- <i class="lnr lnr-cloud-download"> </i> --}}
             <h2 class="text-success number">Investigating</h2>
            <h3 class="text-success number">{{$details['investigating']}} </h3>
           
          </div>
        </div>
        <div class="col-sm-6 pl-sm-2 statistics-grid">
          <div class="card card_border border-primary-top p-4">
            {{-- <i class="lnr lnr-cart"> </i> --}}
             <h2 class="text-danger number">Cancelled</h2>
            <h3 class="text-danger number">{{$details['declined']}}</h3>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- charts --}}
<div>
  <div class="row">
<div class="column">
  <div class="card" id = "pie">
  
  </div>
</div>

<div class="column">
  <div class="card" id = "column">
       

  </div>
</div>

<div class="column">
  <div class="card" id = "state_wise">

  </div>
</div>

<div class="column">
  <div class="card" id = "data">
       

  </div>
</div>
</div>

{{-- card for navigation --}}
<div>
  <div class="row">
<div class="column">
  <div class="card">
    <button class="btn btn-1">
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
      CRIMES REPORTED IN DIFFERENT POLICE STATIONS
    </button>
  </div>
</div>

<div class="column">
  <div class="card">
    <button class="btn btn-1">
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
      CRIMES REPORTED IN DIFFERENT POLICE STATIONS
    </button>

  </div>
</div>

<div class="column">
  <div class="card">
    <button class="btn btn-1">
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
      CRIMES REPORTED IN DIFFERENT POLICE STATIONS
    </button>
  </div>
</div>

<div class="column">
  <div class="card">
       
    <button class="btn btn-1" >
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
      CRIMES REPORTED IN DIFFERENT POLICE STATIONS
    </button>
  </div>
</div>
<div class="column">
  <div class="card">
       
    <button class="btn btn-1" >
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
      CRIMES REPORTED IN DIFFERENT POLICE STATIONS
    </button>
  </div>
</div>
<div class="column">
  <div class="card">
       
    <button class="btn btn-1" >
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
      CRIMES REPORTED IN DIFFERENT POLICE STATIONS
    </button>
  </div>
</div>
</div>
{{-- <div class="row">
  <div class="column" style="margin-right: 15px;">
       <button class="btn btn-1" style="margin-top: 100px; margin-left: 150px;">
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
      CRIMES REPORTED IN DIFFERENT POLICE STATIONS
    </button>
  </div>
  <div class="column"  style="background-color: white;">
    
<button class="btn btn-1" style="margin-top: 100px; margin-left: 150px;">
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
     CRIME RATE IN DIFFERENT STATE
    </button>

  </div>
  
</div>
<div class="row">
  
  <div class="column"  style="background-color: white; margin-right: 15px; margin-top: 15px;">
<button class="btn btn-1" style="width: 400px; margin-top: 100px; margin-left: 150px;">
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
REGISTRATION FORM REQUEST   
 </button> 
  </div>
  <div class="column" style="margin-top: 15px; margin-top: 15px;">
    
<button class="btn btn-1" style="margin-top: 100px; width: 500px; margin-left: 150px;">
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
     REGISTRATION APPROVAL REQUEST
    </button>

  </div>
  
</div>

<div class="row">
  
  <div class="column" style="margin-right: 15px; margin-top: 15px;">
 
<button class="btn btn-1" style="margin-top: 100px; margin-left: 150px;">
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
     Hove
    </button>
  </div>
  <div class="column" style="background-color:#bbb; margin-top: 15px;">
    

  <button class="btn btn-1" style="margin-top: 100px; margin-left: 150px;">
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
     RESOURCES
    </button>

  </div>
  
</div>    --}}

<footer class="page-footer" style="background-color: black;">

  <!-- Copyright -->
    <div class="row footer-bottom">
        <div  style ="padding :35px;margin-right:0px; text-align: center; color: white;" class="col-md-10">
            Site developed and maintained by Team Code Gear,<a href="https://www.facebook.com/pages/gitam-kablana/384890248243377" style="color: white;">GITAM</a> , Haryana. Send your feedbacks to <a href="https://mail.google.com/mail/u/1/#search/codegearsih2020%40gmail.com"  style="color: white;">codegearsih2020@gmail.com</a> 
        </div>
    </div>
  </div>
</footer>
<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
</script>
{{-- chart scripts --}}
<script language = "JavaScript">
	  var colours=[ '#b50d29','#b28033', '#ffff00', '#6629ad', ' #c99600','#db6b00'];
	     Highcharts.getOptions().colors = Highcharts.map(colours, function (color) {
		 
		 
                return {
                    radialGradient: {
                        cx: 0.5,
                        cy: 0.3,
                        r: 0.5
                    },
                    stops: [
                        [0,color],
                        [1, Highcharts.Color(color).brighten(-0.3, -0.5, -0.3, 0, - 0.3).get('rgb')] // darken
                    ]
                };
				
				
            });
         // Create the chart
Highcharts.chart('pie', {
    chart: {
	<!-- backgroundColor:"#ffcccc", -->
	borderRadius:"50px",
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45
        }
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
            name: "Browsers",
            colorByPoint: true,
            data: [
                {
                    name: "property crime",
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
                }
            ]
        }
    ],
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
<!-- column chart -->
	  var chart = new Highcharts.Chart({
    chart: {
        renderTo: 'column',
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
        
        '#00ff00',
        '#0000ff'
    ],
    series: [{
        data: [ {
                    name: "property crime",
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
<!-- state wise chart -->
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
                    name: "property crime",
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

 // Create the data 
Highcharts.chart('data', {
    chart: {
	<!-- backgroundColor:"#ffcccc", -->
	borderRadius:"50px",
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45
        }
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
					style: {
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        },
                  }

				  
           
    <!-- }, -->
        }
    },

     series: [
        {
            name: "Browsers",
            colorByPoint: true,
            data: [
                {
                    name: "property crime",
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
                }
            ]
        }
    ],
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
      </script>
</body>
</html>