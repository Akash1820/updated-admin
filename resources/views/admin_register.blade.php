<!DOCTYPE html>
<html>
  <head>
    <title></title>
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
            margin-left: 495px;
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
    /* styling for toogle popup */
    /* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
    </style>
<body>
  
 <fieldset>
  <legend><img src="assets/images/bprd-logo.jpg" text-align="center"></legend>
     <center>
     <h2>Bureau of Police Research and Development</h2>
     <br><br>
   </center>
     <form class="chat-form" action="admin_finalreg" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
         <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm" required autocomplete="off">
  </div>
         <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Police Station Name" name="PS_code" required autocomplete="off">
  </div>
        
         <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email" required autocomplete="off">
         </div>
              <div class="input-container">
                <div class="popup">
                  <span class="popuptext" id="myPopup">to get ip you can open cmd and run "ipconfig" command and then check for ipv4 address!</span>
                </div>
    <i class="fa fa-address-card icon"></i>
    <input class="input-field"  onMouseOver="myFunction()" type="text" placeholder="IP Address" name="ip_addr" required autocomplete="off">
  </div>
          <div class="input-container">
    <i class="fa fa-credit-card icon"></i>
    <input class="input-field" type="text" placeholder="ID Number" name="id_num" required autocomplete="off">
  </div>
  <div class="input-container">
<b> UPLOAD YOUR ID PROOF :</b>
  </div>
  
          <div class="input-container">
             
    <i class="fa fa-drivers-license icon"></i>
    <input class="input-field" type="file" id="img" name="ID" accept="image/*" placeholder="ID Proof" required>
  </div>
  <div class="input-container">
 <b>UPLOAD YOUR e-SIGNATURE :</b>
  </div>

          <div class="input-container">
 
    <i class="fa fa-edit icon"></i>
    <input class="input-field" type="file" id="img" name="signature" accept="image/*" placeholder="Signature" required >
  </div>
         <button type="submit">Register</button>
     </form>
    </fieldset>
  </center>
    </body>
    <script>
      var msg = '{{Session::get('alert')}}';
      var exist = '{{Session::has('alert')}}';
      if(exist){
        alert(msg);
      }
      function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
    </script>

   
