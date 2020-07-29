<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

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

.sidebar {
  min-height: 650px;
  height: 100%;
  width: 240px;
  background: #fafafa;
  /*box-shadow: inset -5px 0 8px rgba(0,0,0,.2);*/
  position: absolute;
  top: 0;
  bottom: 0;
}
.header a,
.link {
  color: #4b4f56;
  text-decoration: none;
  position: relative;
}

.link {
  color: #3B78E7;
  display: inline-block;
}

.link:after,
.header a:not(.faux):after {
  content: '';
  display: block;
  width: 0;
  height: 2px;
  background: #3B78E7;
  transition: width .3s;
  position: absolute;
  bottom: 0;
  left: 0;
}

.link {
  padding-bottom: 8px;
  margin-bottom: -8px;
}

.header .label a:after {
  bottom: -10px;
}

.header a:not(.faux):hover:after,
.link:hover:after {
  width: 100%;
}

.header .pipe {
  margin: 0 12px;
  color: #aaa;
  border-left: 1px solid #aaa;
  position: relative;  
  top: 1px;
}

.header .menu {
  float: right;
}

.header .menu a {
  padding: 10px 20px;
  vertical-align: top;
}


  padding: 20px 10px 10px;
}

.sidebar li a {
  text-decoration: none;
  color: #444;
  padding: 10px 20px;
  display: block;
  font-size: 16px;
  font-weight: 300;
  letter-spacing: .8px;
}

.sidebar li:hover:not(.spacer) {
  background: #d3e0f6;
  transition: 0s all;
}

.sidebar li:not(.spacer) {
  transition: .5s all cubic-bezier(0.15, 1.06, 0.87, 0.99);
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

.btn {
  border: none; /* Remove borders */
  color: white; /* Add a text color */
  padding: 14px 28px; /* Add some padding */
  cursor: pointer; /* Add a pointer cursor on mouse-over */
}

.success {background-color: #4CAF50;} /* Green */
.success:hover {background-color: #46a049;}

#navbar {
  position: fixed;
  top: 0px;
  left: 0px;
  width: 200px;
  height: 100%;
  padding-top:15px;
  padding-left: 25px;
}

#navbar header {
  text-transform: uppercase;
  font-size: 40px;
}

#navbar ul {
  border: 1px solid;
  padding: 0px;
}

#navbar li {
  list-style: none;
  color: #404040;
  position: relative;
  border-bottom: 1px solid;
  padding: 10px;
  
}

#navbar a {
  text-decoration: none;
  color: #8c8c8c;
}

@media only screen and (max-width: 1100px) {
    #navbar {
        position: relative;
  top: 0px;
  left: 0px;
  width: 100%;
  min-width: 180px;
  padding-top:5px;
  padding-left: 15px;
  }
}

</style>
</head>
<body>

 <!--- Start Sidenav Bar -->
  <nav id="navbar">
    <header>Lipsum code</header>
    <ul>
      <a class="nav-link" href="#Introduction">
        <li>Introduction</li>
      </a>
      <a class="nav-link" href="#First_steps">
        <li>First steps</li>
      </a>
      <a class="nav-link" href="#Creating_documentation">
        <li>Creating documentation
        </li>
      </a>
      <a class="nav-link" href="#Implementing_code">
        <li>Implementing code</li>
      </a>
      <a class="nav-link" href="#Processing_data">
        <li>Processing data</li>
      </a>
      <a class="nav-link" href="#Final_result">
        <li>Final result</li>
      </a>

    </ul>
  </nav>
  <!--- End Sidenav Bar -->




<h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="width: 550px;">
    <span class="close">&times;</span>
    <p><form >
  
  <button onclick="document.getElementById('id01').style.display='block'" style="width: 250px;">PS ADMIN LOGIN</button>

<!-- The Modal -->
<div id="id01" class="modal" style="height: 500px;">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="login" method="post" style="height: 350px;">
    {{csrf_field()}}
    <div class="imgcontainer">
      <img src="assets/images/bprd-logo.png" alt="Avatar" class="avatar" style="height: 180px;">
    </div>
<br>
<br><br>
    <div class="container">
      <center>
      <label for="uname" style="padding-right: 20px;"><b>Username    :</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required style="height: 26px;">
<br>
<br>
      <label for="psw" style="padding-right: 20px;"><b>Password      :</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required style="height: 26px;">
      </center>
  </div>
<div class="container" style="background-color:#f1f1f1">
      <button type="submit" style="margin-top: 30px;" onclick="form.submit()">Login</button>
      <button type="button" class="cancelbtn" onclick="document.getElementById('id01').style.display='none'"  >Cancel</button>
      
    </div>
   
    Want to Register As Police Station Admin <a href="RegReq"> Click Here </a>
  </form>
</div>



             <textarea name="message" placeholder="Enter Notice Here " id="message" autocomplete="off" style="width: 400px;
    height: 400px;"></textarea>
             <button onclick="myFunction()" class="btn success"><i class = "fa fa-paper-plane"></i>Send >> </button>
          
         </form></p>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
