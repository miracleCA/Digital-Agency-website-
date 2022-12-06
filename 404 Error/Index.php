<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>404 Error</title>
  
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
    <div class="space1" style="height: 100px;"></div>
        <section class="body">
                <div class="row" id="error-img">
                        <img id="error" src="IMG/404.png" alt="">
                </div>
                <div class="row" id="error-info">
                        <p><b id="error-head">ERROR:</b><span id="error-detals"> The page you are looking for does not exist.</span></p>
                </div>
                <p id="error-refferal">Visit our <a href="../">homepage</a> or check out our <a href="../Services">Services</a>.</p>
                <div class="space"></div>
        </section>
        <div class="space2"></div>
    <?php
      include_once '../Sections/Footer 1.php';
      include_once '../Sections/Last footer.php';
    ?>
    <script src="Index.js" type="text/javascript"></script>
</body>
</html>