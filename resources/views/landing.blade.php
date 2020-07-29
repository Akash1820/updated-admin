<!DOCTYPE html>
<html>
<head>
	<title>Sample</title>
<style>
	body, html {
  height: 100%;
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 0px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5px auto; /* 15% from the top and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  /* Position it in the top right corner outside of the modal */
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

/* Close button on hover */
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}
* {
  box-sizing: border-box;
  height: 40%;
}

.bg-text button {
  background-color: #B50D29;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 20px 22px 20px 22px;
  border-radius: 8px;

}
.bg-image {
  /* The image used */
  background-image: url("assets/images/bprdlogo.png");

  /* Add the blur effect */
  filter: blur(5px);
  -webkit-filter: blur(5px);

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #B50D29;
  position: absolute;
  top: 45%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
  text-shadow:5px 5px 10px black;
}

</style>



</head>
<body>
	<div class="bg-image"></div>

<div class="bg-text">
  <h1>Welcome to Sarvasya Rakshan Admin Portal</h1>
  
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

<button onclick="document.getElementById('id02').style.display='block'" style="width: 250px; ">WEBSITE ADMIN LOGIN</button>

<!-- The Modal -->
<div id="id02" class="modal" style="height: 500px;">
  <span onclick="document.getElementById('id02').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="adminwelcome" method="post" style="height: 350px;">
    {{csrf_field()}}
    <div class="imgcontainer">
      <img src="assets/images/bprd-logo.png" alt="Avatar" class="avatar" style="height: 180px;">
    </div>
<br>
<br><br>
    <div class="container">
    	<center>
      <label for="uname" style="padding-right: 20px;"><b>Username    </b></label>
      <input type="text" placeholder="Enter Username" name="uname" required style="height: 26px;">
<br>
<br>
      <label for="psw" style="padding-right: 20px;"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required style="height: 26px;">
      </center>
  </div>
<div class="container" style="background-color:#f1f1f1">
      <button type="submit" style="margin-top: 30px;" onclick="form.submit()">Login</button>
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>



</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>
<script>
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>