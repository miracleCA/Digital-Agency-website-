<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>

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
                include_once '../Sections/Contact Nav.php';
        ?>
                <div class="row" id="header-items">
                        <div class="col-md-4 col-sm-5" id="header-items1">
                                <div id="header-cap">
                                        <h1 id="caption">Contact us to do a professional job that produces results.</h1>
                                        <p id="P1">Drop us a message and we will give you the best services.</p>
                                </div>
                        </div>
                        <div class="col-md-8 col-sm-7"></div>
                </div>
        </section>
        <section class="row" id="body-row" style="font-family: aladin; color: black;">
                        <div class="col-md-4 col-sm-4" id="info-col">
                                <h2 id="con-text">We are always at your service</h2>
                                <div class="row" style="padding-left: 20px;">
                                        <img src="Icons/email.png" style="width: 30px; height: 30px;" alt="">
                                        <b id="mail">loremipsum@gmail.com</b>
                                </div>
                                <div class="spacers" style="height: 10px;" ></div>
                                <div class="row" style="padding-left: 20px;">
                                        <img src="Icons/call.png" style="width: 30px; height: 30px;" alt="">
                                        <b id="mail">+234-814-5353-201</b>
                                </div>
                                <div class="spacers" style="height: 10px;" ></div>
                                <div class="row" style="padding-left: 20px;">
                                        <img src="Icons/clock.png" style="width: 30px; height: 30px;" alt="">
                                        <b id="mail">Mon-Sun (7:00am-8:00am)</b>
                                </div>
                                <div class="spacers" style="height: 20px;" ></div>
                                <div class="row">
                                        <p id="Follow-text">Follow us on social media</p>
                                </div>
                                <div class="row" id="fol-soc">
                                        <a href="#" class="fa fa-facebook"></a>
                                        <a href="#" class="fa fa-twitter"></a>
                                        <a href="#" class="fa fa-linkedin"></a>
                                        <a href="#" class="fa fa-youtube"></a>
                                        <a href="#" class="fa fa-instagram"></a>
                                        <a href="#" class="fa fa-pinterest"></a>
                                </div>
                        </div>
                        <div class="col-md-8 col-sm-8" id="form">
                                <div class="space2" style="height: 20px;"></div>
                                        <form id="contact-form" name="contact-form" action="" method="POST">
                                                <div class="row">
                                                        <div class="input-control col-md-6 col-sm-6">
                                                                <input type="text" id="Firstname" placeholder="First name" name="Firstname" class="form-control">
                                                                <div id="error1" style="color: red; font-size: 20px;"></div>
                                                        </div>
                                                        <div class="input-control col-md-6 col-sm-6">
                                                                <input type="text" id="Lastname" placeholder="Last name" name="Lastname" class="form-control">
                                                                <div id="error2" style="color: red; font-size: 20px;"></div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="input-control col-md-6 col-sm-6">
                                                                <input type="text" id="Email" placeholder="Email" name="Email" class="form-control">
                                                                <div id="error3" style="color: red; font-size: 20px;"></div>
                                                        </div>
                                                        <div class="input-control col-md-6 col-sm-6">
                                                                <input type="number" id="Phone" placeholder="Phone number" name="Phone" class="form-control">
                                                                <div id="error4" style="color: red; font-size: 20px;"></div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="input-control col-md-12">
                                                                <input type="text" id="subject" placeholder="Your message subject" name="subject" class="form-control">
                                                                <div id="error5" style="color: red; font-size: 20px;"></div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="input-control col-md-12">
                                                                <textarea type="text" style="border: 2px rgb(8, 8, 79) solid; color: black;" id="message" placeholder="Tell us about your project" name="message" rows="6" class="form-control md-textarea"></textarea>
                                                                <div id="error6" style="color: red; font-size: 20px;"></div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="input-control col-md-12">
                                                                <input type="file" id="myFile" name="filename" style="border: none;">
                                                                <div id="error7" style="color: red; font-size: 20px;"></div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-12" id="form-sub" style="padding-left: 15px;">
                                                                <button id="submit" type="submit" class="button">Submit</button>
                                                        </div>
                                                </div>
                                        </form>
                                
                        </div>
        </section>
        <div class="spaced" style="height: 70px;"></div>
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
                                        <li><a id="foot-links" style="font-size: 14px; color: white;" href="../" target="_blank">HOME</a></li>
                                        <li><a id="foot-links" style="font-size: 14px; color: white;" href="../About Us" target="_blank">ABOUT</a></li>
                                        <li><a id="foot-links" style="font-size: 14px; color: white;" href="../Services" target="_blank">SERVICES</a></li>
                                        <li><a id="foot-links" style="font-size: 14px; color: white;" href="">CONTACT</a></li>
                                </ul>
                        </div>
                </div>
                <div class="col-md-3 col-sm-3" id="foot-col">
                        <div class="row" style="font-weight: bold; font-size: 25px; padding-left: 12px;">Our Policies</div>
                        <div class="row">
                                <ul style="display: grid; font-size: 14px; color: white;">
                                        <li><a id="foot-links" style="font-size: 14px; color: white;" href="../Privacy policy" target="_blank">Privacy policy</a></li>
                                        <li><a id="foot-links" style="font-size: 14px; color: white;" href="../Terms and conditions" target="_blank">Terms and conditions</a></li>
                                        <li><a id="foot-links" style="font-size: 14px; color: white;" href="../Cookies policy" target="_blank">Cookies policy</a></li>
                                        <li><a id="foot-links" style="font-size: 14px; color: white;" href="../Support" target="_blank">Support</a></li>
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

        </section>  
        <?php
                include_once '../Sections/Last footer.php';
        ?>
        <script src="Index.js"></script>
        <script src="../Sub-Form.js"></script>
        <script src="../Index.js"></script>
</body>
</html>