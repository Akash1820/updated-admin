
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins');
 * {
   padding: 0;
   margin: 0;
}
 *:focus {
   outline: none;
}

/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}

 body {
   font-family: "Poppins", sans-serif;
   height: 100vh;
   justify-content: center;
   align-items: center;
   overflow: hidden;
}
 #bg {
   background: #b50d29;
   width: 100%;
   height: 100%;
   position: absolute;
   z-index: -1;
   clip-path: polygon(0 0, 55% 0, 45% 100%, 0% 100%);
}


 .underlineHover:after {
   display: block;
   left: 0;
   width: 0;
   height: 2px;
   background-color: #b50d29;
   content: "";
   transition: width 0.33s ease-in-out;
}
}
 .underlineHover:hover {
   color: #b50d29;
}
 .underlineHover:hover:after {
   width: 100%;
}
 .wrapper {
   display: flex;
   flex-direction: column;
   align-items: center;
   text-align: center;
   justify-content: center;
   border-radius: 10px 10px 10px 10px;
   min-height: 100%;
}
 .wrapper #form {
   max-width: 500px;
   position: relative;
   box-shadow: 2px 2px 3px #b3b3b3;
   border-radius: 10px 10px 10px 10px;
   background: #fff;
   position: relative;
}
 .wrapper #form #formHeader h2 {
   text-align: center;
   font-size: 15px;
   font-weight: 400px;
   text-transform: uppercase;
   color: #ccc;
   display: inline-block;
   margin: 20px 10px 20px 10px;
}
 .wrapper #form #formHeader h2.inactive {
   color: #ccc;
}
 .wrapper #form #formHeader h2.active {
   color: #0d0d0d;
   border-bottom: 2px solid #b50d29;
}
 .wrapper #form #formHeader i {
   font-size: 4.5em;
   margin: 0px;
   color: #28a7e8;
   text-shadow: 0px 2px 3px #28a7e8;
}
 .wrapper #form #formContent {
   padding: 20px 20px;
   position: relative;
}
 .wrapper #form #formContent form input[type=submit] {
   display: inline-block;
   background-color: #b50d29;
   border: none;
   color: white;
   padding: 15px 70px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   text-transform: uppercase;
   border-radius: 5px;
   box-shadow: 0 2px 2px 0px grey;
   font-size: 13px;
   margin-top: 5px;
}
 .wrapper #form #formContent form input[type=text] {
   background-color: #f6f6f6;
   border: 2px solid #f6f6f6;
   transition: all 0.5s ease-in-out;
   padding: 15px 3px;
   width: 90%;
   margin: 5px;
   border-radius: 5px;
   text-align: center;
   background-color: #f6f6f6;
   font-size: 16px;
   display: inline-block;
}
.wrapper #form #formContent form input[type=password] {
   background-color: #f6f6f6;
   border: 2px solid #f6f6f6;
   transition: all 0.5s ease-in-out;
   padding: 15px 3px;
   width: 90%;
   margin: 5px;
   border-radius: 5px;
   text-align: center;
   background-color: #f6f6f6;
   font-size: 16px;
   display: inline-block;
}
 .wrapper #form #formContent form input[type=submit]:hover {
   background-color: #b50d29;
   border: none;
}
 .wrapper #form #formContent input[type=text]:focus {
   background-color: #fff;
   border: none;
   border-bottom: 2px solid #b50d29;
}
.wrapper #form #formContent input[type=password]:focus {
   background-color: #fff;
   border: none;
   border-bottom: 2px solid #b50d29;
}
 .wrapper #form #formContent input[type=text]:placeholder {
   color: #ccc;
}
.wrapper #form #formContent input[type=password]:placeholder {
   color: #ccc;
}
 .wrapper #form #formFooter {
   padding: 10px 20px;
  background-color: #f6f6f6;
   border-top: 1px solid #e9e9e9;
   border-radius: 0px 0px 10px 10px;
}
 .wrapper #form #formFooter a {
   color: #b50d29;
   padding: 10px 25px;
   font-size: 1em;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
}
 .credits footer {
   position: absolute;
   bottom: 0;
   right: 5px;
   text-align: right;
   font-size: 0.6em;
   text-transform: uppercase;
   letter-spacing: 2px;
   color: #56baed;
}
 .credits footer p {
   border: none;
   padding: 0;
}
 .credits footer p strong {
   font-size: 2em;
   text-decoration: none;
}
 .credits footer p strong:hover {
   color: #ff0909;
   transition: all 0.4s ease-in-out;
   font-weight: 1500;
   font-size: 4em;
}
 .credits footer a {
   color: #28a7e8;
   text-decoration: none;
   transition: all 0.4s ease-in-out;
}
 .credits footer a:hover {
   color: #f22;
   font-weight: 900;
   font-size: 1.5em;
}
 

  </style>
</head>
<body>
<div id="bg"></div>
<div class="wrapper fadeInDown">
  
  <div id="form">
   
    <img src="assets/images/bprd-logo.png" alt="Avatar" class="avatar" style="height: 180px;">
    <div id="formHeader">
      <h2 class="active" > New Police Admin Registration Request </h2>
      
      <div class="fadeIn first">
        <i class="fa fa-user-circle-o"></i>
    </div>
    <div id="formContent">
      <form action="admin" method="post">
      {{csrf_field()}}
        
        <input class="fadeIn third" type="text" placeholder="Username" name="usrnm" required autocomplete="off">
        <input class="fadeIn third" type="text" placeholder="Police Station Name" name="station_name" required autocomplete="off">
         <input class="fadeIn third" type="text" placeholder="Email" name="email" required autocomplete="off">
         <input class="fadeIn third" type="text" placeholder="ID Number" name="id_num" required autocomplete="off">
        <!-- <input type="submit" class="fadeIn fourth" value="Log In"> -->
        <button style="  height: 36px;
            width: 100%;
            background-color: #b50d29;
            font-size: 25px;
            margin-top: 9px;
            border-radius: 8px;
            color:white;" onclick="form.submit()">Submit</button>
      </form>
    </div>
   <!--  <div id="formFooter">
        <a class="underlineHover" href="#">New Police Admin Registration Request</a>
    </div> -->
  </div>
</div>
  
<script>
      var msg = '{{Session::get('alert')}}';
      var exist = '{{Session::has('alert')}}';
      if(exist){
        alert(msg);
      }

      function submitted() {
        alert('Registration submitted we will notify you within 3-4 days');
 
}
     
    </script>
</body>
</html>