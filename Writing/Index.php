<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Writing</title>
  
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
                      <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="_blank" id="dropdown-item" href="../Business Development/">Business Development</a></li>
                      <li style="border-top: rgb(255, 255, 255) 1px solid; border-bottom: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" id="dropdown-item" href="">Writing</a></li>
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
        <div class="col-md-4 col-sm-5 col-xs-12" id="header-items1">
          <div id="header-cap">
            <h1 id="caption">We will write all your personal, creative, and business contents or documents in an informative way so as to give a requisite understanding.</h1>
            <p id="P1">Get in touch with our team of experts to give you the best writing and documentation services.</p>
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
      <div class="spacee" style="height: 10px;"></div>
      <section id="service">
        <div class="row" id="card-row">
          <div class="col-md-4 col-sm-4" id="work-col">
            <div class="card" id="card">
              <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                <img id="card-img" src="Icons/Content writing.png" alt="">
                <h3 class="card-title1">Content Writing</h3>
              </div>
              <div class="card-body" style="padding: 10px;">
                <p class="card-text">We create and write all kinds of contents for individuals, websites, and businesses.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4" id="work-col">
            <div class="card" id="card">
              <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                <img id="card-img" src="Icons/file.png" alt="">
                <h3 class="card-title1">Copy Writing</h3>
              </div>
              <div class="card-body" style="padding: 10px;">
                <p class="card-text">We write all kinds of engaging and persuasive copies that will convert your readers into clients or customers.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4" id="work-col">
            <div class="card" id="card">
              <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                <img id="card-img" src="Icons/design-thinking.png" alt="">
                <h3 class="card-title1">Creative Writing</h3>
              </div>
              <div class="card-body" style="padding: 10px;">
                <p class="card-text">We write informative and creative contents for businesses and individuals.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="card-row">
          <div class="col-md-4 col-sm-4" id="work-col">
            <div class="card" id="card">
              <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                <img id="card-img" src="Icons/set-square.png" alt="">
                <h3 class="card-title1">Technical Writing</h3>
              </div>
              <div class="card-body" style="padding: 10px;">
                <p class="card-text">We research, and write all kinds of contents in any area of technology.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4" id="work-col">
            <div class="card" id="card">
              <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                <img id="card-img" src="Icons/blog.png" alt="">
                <h3 class="card-title1">Articles and Blog Posts</h3>
              </div>
              <div class="card-body" style="padding: 10px;">
                <p class="card-text">We write SEO-friendly articles and blog posts that are plagiarism-free, attractive, and engaging.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4" id="work-col">
            <div class="card" id="card">
              <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                <img id="card-img" src="Icons/proofreading.png" alt="">
                <h3 class="card-title1">Proofreading and Editing</h3>
              </div>
              <div class="card-body" style="padding: 10px;">
                <p class="card-text">We proofread, format, and edit all kinds of documents and contents to suit it's purpose..</p>
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
        <p>Get all your writing projects done by us, just drop us a message and we will give you a free quote.</p>
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
  include_once '../Sections/Last footer.php';
?>
    <script src="../Index.js" type="text/javascript"></script>
</body>
</html>




