<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Business Development</title>
  
  <link rel="stylesheet" href="Index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0/js/bootstrap.min.js"></script>

</head>
<body>
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
                <a class="navbar-brand" href="../">WebSiteName</a>
              </div>
              <div class="collapse navbar-collapse navbar-right" style="border: none;" id="myNavbar">
                <ul class="nav navbar-nav">
                  <li><a href="../" target="_blank" style="color: white;">Home</a></li>
                  <li><a href="../About Us/" target="_blank" style="color: white;">About Us</a></li>
                  <li class="dropdown">
                    <a id="active" class="dropdown-toggle" target="_blank" style="color: white;" href="../Services/">
                      Services
                      <span class="caret"></span></a>
                    </a>
                    <ul class="dropdown-menu" id="dropdown-menu" style="left: 0; height: max-content;">
                      <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="_blank" id="dropdown-item" href="../Website designing/">Website Design</a></li>
                      <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="_blank" id="dropdown-item" href="../Website development/">Website Development</a></li>
                      <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="_blank" id="dropdown-item" href="../Services/">Mobile App Development</a></li>
                      <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="_blank" id="dropdown-item" href="../Digital Marketing/">Digital Marketing</a></li>
                      <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" id="dropdown-item" href="">Business Development</a></li>
                      <li style="border-top: rgb(255, 255, 255) 1px solid; border-bottom: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="_blank" id="dropdown-item" href="../Writing/">Writing</a></li>
                    </ul>
                  </li>     
                  <li><a href="#" style="color: white;" target="_blank">Blogs</a></li>
                  <li><a href="../Contact/" style="color: white;" target="_blank">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="row" id="header-space"></div>
      <div class="row" id="header-items">
        <div class="col-md-4 col-sm-5 col-lg-4 col-xl-4" id="header-items1">
          <div id="header-cap">
            <h1 id="caption">We will help you develop your businesss by systematically planning and managing your business projects from one step to the other.</h1>
            <p id="P1">Get in touch with our team of experts to give you the best business guidelines and solutions.</p>
          </div>
          <div class="header-links">
            <button onclick=" window.open('../Contact','_blank')" class="cap-btn" id="contact">Contact US</button>
            <button onclick=" window.open('../About Us','_blank')" class="abt-btn" id="about-us">Watch a video</button>
          </div>
        </div>
        <div class="col-md-8 col-sm-7"></div>
      </div>
    </section>
    <section class="body">
      <?php
        include_once '../Sections/Serv_work.php';
      ?>
      <div class="spac" style="height: 10px;"></div>
      <section id="service">
        <div class="row" id="card-row">
          <div class="col-md-4 col-sm-4" id="work-col">
            <div class="card" id="card">
              <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                <img id="card-img" src="Icons/research.png" alt="">
                <h3 class="card-title1">Feasibilty Study</h3>
              </div>
              <div class="card-body" style="padding: 10px;">
                <p class="card-text">We will Make some researches that will determine the possibilities of venturing into a business.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4" id="work-col">
            <div class="card" id="card">
              <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                <img id="card-img" src="Icons/business-proposal.png" alt="">
                <h3 class="card-title1">Business Proposals</h3>
              </div>
              <div class="card-body" style="padding: 10px;">
                <p class="card-text">We will write professional business proposals to convince your prospects to transact, partner or invest in your business idea.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4" id="work-col">
            <div class="card" id="card">
              <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                <img id="card-img" src="Icons/briefing.png" alt="">
                <h3 class="card-title1">Project Management</h3>
              </div>
              <div class="card-body" style="padding: 10px;">
                <p class="card-text">Effective management of any business project from the first to the last stage to achieve the goal.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="card-row">
          <div class="col-md-4 col-sm-4" id="work-col">
            <div class="card" id="card">
              <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                <img id="card-img" src="Icons/team.png" alt="">
                <h3 class="card-title1">Business Consultation</h3>
              </div>
              <div class="card-body" style="padding: 10px;">
                <p class="card-text">We are open to give you business advice and strategies on how to start up and suceed in your business.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4" id="work-col">
            <div class="card" id="card">
              <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                <img id="card-img" src="Icons/planning.png" alt="">
                <h3 class="card-title1">Business Planning</h3>
              </div>
              <div class="card-body" style="padding: 10px;">
                <p class="card-text">Effective planning and documentation of all the required business strategies to help you achieve your business goals.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4" id="work-col">
            <div class="card" id="card">
              <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                <img id="card-img" src="Icons/operator.png" alt="">
                <h3 class="card-title1">Virtual Assistance</h3>
              </div>
              <div class="card-body" style="padding: 10px;">
                <p class="card-text">We will be your remote personal assistant whom will help you with all manual and digital adminstrative tasks.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php
      include_once '../Sections/Workflow.php';
      ?>
      <div class="space"></div>
      <div class="row" id="hire-us">
        <p>Get all your business projects done by us, just drop us a message and we will give you a free quote.</p>
        <button id="quote">Get a quote</button>
      </div>
      <div class="space"></div>
      <?php
      include_once '../Sections/Past clients.php';
      include_once '../Sections/Panel.php';
      ?>
    </section>   
    <div class="space" id="space-it"></div>
    <?php
    include_once '../Sections/Consult us.php';
    ?>
    <div class="space"></div>
    <?php
    include_once '../Sections/Footer 1.php';
    ?>
    <?php
    include_once '../Sections/Last footer.php';
    ?>  

    <script src="../Index.js" type="text/javascript"></script>
</body>
</html>



















