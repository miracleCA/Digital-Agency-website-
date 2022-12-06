<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Our Cookies Policy</title>
  
  <link rel="stylesheet" href="Index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0/js/bootstrap.min.js"></script>
</head>
    <?php
      include_once '../Sections/Back_to_top.php';
    ?>
    <section class="header">
          <nav class="navbar navbar-inverse fixed-to-top" id="nav">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" id="togg-btn" class="navbar-toggle" style="border-color: #1e1c87; background-color: #ffffff;" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar" style="background-color: rgb(11, 11, 95);"></span>
                        <span class="icon-bar" style="background-color: rgb(11, 11, 95);"></span>
                        <span class="icon-bar" style="background-color: rgb(11, 11, 95);"></span>                        
                </button>
                <a class="navbar-brand" href="#">WebSiteName</a>
              </div>
              <div class="collapse navbar-collapse navbar-right" style="border: none;" id="myNavbar">
                <ul class="nav navbar-nav">
                  <li><a href="#" style="color: white;">Home</a></li>
                  <li><a href="#" style="color: white;">About Us</a></li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" style="color: white;" href="#">
                      Services
                      <span class="caret"></span></a>
                    </a>
                    <ul class="dropdown-menu" id="dropdown-menu" style="left: 0; height: max-content;">
                      <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="blank" id="dropdown-item" href="#">Website Design</a></li>
                      <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="blank" id="dropdown-item" href="#">Website Development</a></li>
                      <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="blank" id="dropdown-item" href="#">Mobile App Development</a></li>
                      <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="blank" id="dropdown-item" href="#">Digital Marketing</a></li>
                      <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="blank" id="dropdown-item" href="#">Business Development</a></li>
                      <li style="border-top: rgb(255, 255, 255) 1px solid; border-bottom: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="blank" id="dropdown-item" href="#">Writing</a></li>
                    </ul>
                  </li>     
                  <li><a href="#" style="color: white;" target="blank">Blogs</a></li>
                  <li><a href="#" style="color: white;">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </nav>
    </section>  
    <section class="row" id="footer-row">
      <div class="col-md-3 col-sm-3" id="foot-col">
              <div class="row" style="padding-left: 12px;">Company's Name</div>
              <div class="row" style="padding-left: 12px;">Tagline</div>
              <div class="space"></div>
              <div class="">
                      <a href="#" class="fa fa-facebook"></a>
                      <a href="#" class="fa fa-linkedin"></a>
                      <a href="#" class="fa fa-instagram"></a>
                      <a href="#" class="fa fa-pinterest"></a>
                      <a href="#" class="fa fa-twitter"></a>
                      <a href="#" class="fa fa-youtube"></a>
              </div>
      </div>
      <div class="col-md-3 col-sm-3" id="foot-col">
              <div class="row" style="font-weight: bold; font-size: 25px; padding-left: 12px;">Quick links</div>
              <div class="row">
                      <ul style="display: grid; font-size: 14px; color: white;">
                              <li><a id="foot-links" style="font-size: 14px; color: white; text-decoration: none;" href="../" target="_blank">HOME</a></li>
                              <li><a id="foot-links" style="font-size: 14px; color: white; text-decoration: none;" href="../About Us" target="_blank">ABOUT</a></li>
                              <li><a id="foot-links" style="font-size: 14px; color: white; text-decoration: none;" href="../Services" target="_blank">SERVICES</a></li>
                              <li><a id="foot-links" style="font-size: 14px; color: white; text-decoration: none;" href="../Contact" target="_blank">CONTACT</a></li>
                      </ul>
              </div>
      </div>
      <div class="col-md-3 col-sm-3" id="foot-col">
              <div class="row" style="font-weight: bold; font-size: 25px; padding-left: 12px;">Our Policies</div>
              <div class="row">
                      <ul>
                              <li><a id="foot-links" style="font-size: 14px; color: white; text-decoration: none;" href="../Privacy policy" target="_blank">Privacy policy</a></li>
                              <li><a id="foot-links" style="font-size: 14px; color: white; text-decoration: none;" href="../Terms and conditions" target="_blank">Terms and conditions</a></li>
                              <li><a id="foot-links" style="font-size: 14px; color: white; text-decoration: none;" href="">Cookies policy</a></li>
                              <li><a id="foot-links" style="font-size: 14px; color: white; text-decoration: none;" href="../Support" target="_blank">Support</a></li>
                      </ul>
              </div>
      </div>
      <div class="col-md-3 col-sm-3" id="foot-col">
              <div class="row" id="Email-news-form" style="padding-left: 12px;">
                 <p>Subscribe to our Email Newsletter..</p>
              </div>
              <form id="Email-form" action="">
                <input id="Sub-Email" style="width: 65%; color: black; border: 1px solid rgb(255, 255, 255); height: 45px;" type="email" placeholder="Enter your E-mail">
                <button id="mail-but" style="width: fit-content; height: 45px;" type="submit">Submit</button>
                <div id="errors1"></div>
              </form>            
      </div>

        <script src="../Sub-Form.js"></script>

</section>  
    <?php
      include_once '../Sections/Last footer.php';
    ?>
    <script src="Index.js" type="text/javascript"></script>
</body>
</html>