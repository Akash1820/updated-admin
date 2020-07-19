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
 <fieldset>
  <legend><img src="assets/images/bprd-logo.jpg" text-align="center"></legend>
     
     <h2>Bureau of Police and Research Department</h2>
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
         <button type="submit" onclick="form.submit()" value="LOGIN">LOGIN</button>
         <br><br>
    
    </form>
</fieldset>   
    
    
    
</body>
</html>