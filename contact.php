<?php

if($_POST["submit"]) {
    $recipient="dheeraj.sainikrubber@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $senderEmail");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="balaji.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Shri Balaji Agro Products</title>


</head>
<body>
  <header>  <img src="shri balaji.PNG"  width="100%" height="auto" >  </header>
      <nav class="navbar navbar-expand-md  navbar-dark"> <a class="brand"  href="#"> <img src="shri balaji.PNG"  width="100%" height="auto" > <a  class="text-white" href="tel:917830101001">  <i class="fa fa-phone-square">+917830101001 </i> </a>
        
      
          
           
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">

            <li class="nav-item">
              <a class="nav-link " href="index.html">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.html">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
               
      </nav>


 


     
      
      <div class="container contactus">
        <h4 class="text-center text-secondary"> Contact us</h4>
        <div class="row"> 
          <div class="col-xs-12 col-sm-12 ">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
        39, Industrial Estate  Railway Road Deoband-247554
       </div> </div>
  <div class="row">
    <div class="col-12 col-sm-12 ">   <i class="fa fa-phone-square" aria-hidden="true"></i> 7830101001 </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-12 "> <i class="fa fa-envelope"> </i> dheeraj.sainikrubber@gmail.com </div>
          </div>
        </div>
        </div>
        
  


<div class=" container"> <a href="#" class="plist"> Follow us on facebook <i class="fa fa-facebook-square" style="font-size: 20px;"></i> 
  </a> </div>

      
  <?=$thankYou ?>

          <h4 class="text-center secondary message"> Send us a message</h4>
          
          <div class="container">

            <form method="post" action="contact.php">
                
                
                
                
              
              
              
              <div class="row">
              
              <input name="sender" class="form-control" placeholder="Name">
      </div>

      <div class="row">
              
              <input name="senderEmail" class="form-control" placeholder="E-mail">
      </div>
      <div class="row">
              
              <textarea rows="5" cols="20" name="message" placeholder="message"
              class="form-control"></textarea>
      </div>
      
              <input type="submit" name="submit" > 
          </form>
        </div>
      


          
         
   <!-- footer starts-->
   <div class="container-fluid footer bg-dark" >
    <div class="row footer1">

      <div class=" col-3 col-sm-3"> <a class="  f" href="index.html"> Home</a>
      </div>
      <div class=" col-3 col-sm-3"> <a class="f" href="about.html"> About</a>
      </div>
      <div class=" col-3 col-sm-3"> <a class="f"  href="products.html"> Products</a></div>
      <div class="col-sm-3 col-3"> <a class="f active" href="contact.php"> Contact </a> </div>
      
    </div>
    <div class="row footer2">
<div class="col-12 col-sm-12 text-white "> <i class="fa fa-copyright" aria-hidden="true"></i> 2020 Balaji Agro Products</div>
    </div>
  </div>
</div>



           
 </body>


</html>