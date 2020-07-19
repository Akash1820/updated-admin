
<head>
  <!doctype html>


<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Official WebPortal of BPRD| Admin </title>

  <link rel="stylesheet" type="text/css" href="assets/css/Slider.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    
</head>
<body>
  @section('header')
<div class="top-bar hidden-xs" style="background-color: #b50d29; width: 100%;" >
            <div class="container" id="top">
                <div class="row">
                    
                    <div class="col-md-12 top-nav pull-right" style="text-align:right; background-color: #b50d29;">

                        <a href="#" id="btn-decrease" class="social-icon" title="Decrease font size" style="color: rgb(255,255,255)">A-</a> &nbsp;
                        <a href="#" id="btn-orig" class="social-icon" title="Default font size" style="color: rgb(255,255,255)">A</a> &nbsp;
                        <a href="#" id="btn-increase" class="social-icon" title="Increase font size" style="color: rgb(255,255,255)">A+</a>&nbsp;

                        <a class="btn social-icon" href="https://www.facebook.com/BPRDIndia/" target="blank" style="color: rgb(255,255,255)" ><i class="fa  fa-facebook-square"></i></a>
                        <a class="btn social-icon" href ="https://twitter.com/bprdindia" target="blank" style="color: rgb(255,255,255)"><i class="fa  fa-twitter-square"></i></a>
                        <a class="btn social-icon" href ="https://www.youtube.com/channel/UCGhrg_cnnGuhwXfCU16kYow" target="blank" style="color: rgb(255,255,255)"><i class="fa  fa-youtube-square"></i></a>
                    </div>
                </div>
            </div>
        </div>
  <div class="se-pre-con"></div>

<!--<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">-->
    <center>
    <img src="assets/images/header.png" alt="BPRD" width="100%;">
  </center>
  <div class="topnav" id="myTopnav" style="margin-top: 8px;">
  

  <a href="#home" class="" ass="active">Home</a>
  <a href="#news">Awareness</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
   <a href="#about">Helpline No.</a>

  <a href="#about">About</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
  
</div>
@show

@yield('content')
<div class="slideshow-container">

<div class="mySlides">
  <div class="numbertext">1 / 3</div>
  <img src="assets/images/images.jpg" style="width:100%; height: 400;">
  <div class="text"></div>
</div>

<div class="mySlides">
  <div class="numbertext">2 / 3</div>
  <img src="assets/images/images (2).jpg" style="width:100%; height: 400;">
  <div class="text"></div>
</div>

<div class="mySlides">
  <div class="numbertext">3 / 3</div>
  <img src="assets/images/images (1).jpg" style="width:100%; height: 400;">
  <div class="text"></div>
</div>

<a class="prev" onclick="plusSlides(-1)" style="color: white;">&#10094;</a>
<a class="next" onclick="plusSlides(1)" style="color: white;">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>


@section('footer')
  <div class="container" style="bottom: 0; ">
    <div class="row footer-content hidden-xs">
        <div class="col-md-6">                 
            <h5 class="small text-info">Bureau Of Police Research And Development</h5>
            <div class="row">
                <div class="col-sm-4">
                   Crime Awareness
                </div>
                <div class="col-md-3 col-sm-3">
                   Track Complaint 
                </div>
                <div class="col-md-4 col-sm-4">
                   
                </div>

            </div>                 
        </div>
        <div class="col-md-6" style="float: right;">                 
            <h5 class="small text-info">Other Websites</h5>
            <div class="row">            
                <div class="col-sm-5">
                   
                        
                    </ul>
                </div>
                <div class="col-sm-5">
                   
                </div>
            </div>                 
        </div>

    </div>
</div>
<div class="container" style="background-color: #b50d29;">
    <div class="row footer-bottom">
        <div  style ="padding-right:0px;margin-right:0px; text-align: center"class="col-md-10">
            Site developed and maintained by Team Code Gear, GITAM, Haryana. Send your feedbacks to xyz@cimereporting.in 
        </div>
@show

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>