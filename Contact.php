<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title>Online Shop Designers</title>
   <!-- bootstrap sheets -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
   <!-- internal sheets -->
   <link rel="stylesheet" href="css/home_style.css">
   <!-- google-fonts -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
   <!-- google jquery cdn -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <!-- iconify -->
   <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
   <!-- google recaptcha script -->
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact us</title>
   <link rel="stylesheet" href="css/newcontact.css">
<!-- favicon links  -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
 <!-- favicon links end -->
 </head>
 <body>
    <div id="title">
      <div class="container-fluid nav-container">
      <nav class="navbar navbar-light navbar-expand-lg ">
        <a class="navbar-brand" href="index.html">
          <img src="assets/logo.png" height="55px" width="140">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <a class="nav-link " href="index.html">Home</a>
            </li>
            <li class="nav-item dropdown">
               <span class="nav-link">About</span>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="About.html">Our Mission</a>
                 <a class="dropdown-item" href="Career.html">Career</a>
               </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Ourwork.html">Our Work</a>
            </li>
            <li class="nav-item dropdown">
                 <span class="nav-link">Products</span>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="metric.html">OSD Metrics & Platform</a>
                 <a class="dropdown-item" href="facebook.html">OSD Facebook</a>
                 <a class="dropdown-item" href="checkout.html">OSD Checkout </a>
                 <a class="dropdown-item" href="starter.html">OSD Starter Pack </a>
               </div>
            </li>
            <li class="nav-item">
                 <a class="nav-link" href="Contact.php">
                <button type="button" class="btn btn-outline-primary" id="nav-contact">Contact Us</button>
                </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
      </div>

      <section>
        <div class="container-fluid">

        <div class="container">

            <div class="contactinfo">
                <div>
                    <h2>Contact Info</h2>
                    <ul class="info">
                        <li>
                            <span><img src="assets/location.png"></span>
                            <span>No:32 Vinayagar Kovil st,<br>
                               Karungalpalayam, <br> Erode-03, Tamil Nadu <br>India.

                        </li>
                        <li>
                           <span><img src="assets/email.png" alt=""></span>
                           <span>Email: <a href="mailto:support@abcinfomedia.in">support@abcinfomedia.in</a></span>

                       </li>
                       <li>
                           <span><img src="assets/phone.png" alt=""></span>
                           <span>Mobile: <a href="tel:+91-73392 80155">+91-73392 80155</a></span>

                       </li>
                    </ul>
                    </div>


            </div>

            <div class="contactForm">
                <h2>Send a Message</h2>
                <!-- action="  http://onlineshopdesigners.com/Demo/Contact.html " -->
                <form action=""   method="POST" class="formBox" enctype="multipart/form-data" name="ContactForm"   >
                  <!-- <form class="" action="contactHandle.php" method="POST"> -->

                    <div class="inputBox w50">
                        <input type="text" name="fname"required>
                        <span>Frist Name</span>
                    </div>
                    <div class="inputBox w50">
                       <input type="text" name="lname"required>
                       <span>Last Name</span>
                   </div>
                   <div class="inputBox w50">
                       <input type="text" name="email"required>
                       <span>Email Address</span>
                   </div>
                   <div class="inputBox w50">
                       <input type="text" name="mob"required>
                       <span>Mobile Number</span>
                   </div>
                   <br>
                   <br>
                    <div class="inputBox ">
                            <label style="font-family: 'poppins',sans-serif; font-size:20px; margin-right:20px; margin-bottom: 12px;">Type of Website  </label>
                            <select style="font-weight:300;" class="box" id="cars" name="typeOfWebsite" required>

                              <option value="">None</option>
                              <option value="Food Chain">Food Chain</option>
                              <option value="Media">Media</option>
                              <option value="Business">Business</option>
                              <option value="Entertainment">Entertainment</option>
                              <option value="Fashion">Fashion</option>
                              <option value="Sports">Sports</option>
                              <option value="any">Any Other</option>

                            </select>
                   </div>
                   <div class="inputBox w100">
                       <textarea name="msg" required></textarea>
                       <span>Write your message..here</span>
                   </div>

                   <div class=" w100 captcha">
                       <div class="g-recaptcha" data-sitekey="6LdNWxYbAAAAAC-UVXgjfHc3i2vEaLmhASQcjTtR "></div>
                   </div>




                   <!-- <div id="captchaBackground">
                     <canvas id="captcha">captcha text</canvas>
                     <input id="textBox" type="text" name="text">
                     <div id="buttons">
                     <button id="refreshButton" type="submit">Refresh</button>
                     </div>
                     <span id="output"></span>
                   </div> -->
                   <div class="inputBox w100">
                       <button class="btn btn-outline-primary" id="nav-contact" type="submit" name="submit" value="Send">Send</button>
                   <div class="w100 status" >
                   <?php

                   // $errors = "";

                   if(isset($_POST["submit"])) {

                     //captcha code
                     $secretKey = "6LdNWxYbAAAAAJw1mdkQH_K5xVhjZ8L73xu6wgAR";
                     //6Lc4hRMbAAAAAIlsArPhq0SQtpdsOSrheZa4-d1G
                     $responseKey = $_POST["g-recaptcha-response"];
                     $user_ip = $_SERVER['REMOTE_ADDR'];
                     $url = "https://www.google.com/recaptcha/api/siteverify?secret=". $secretKey. "&response=" . $responseKey . "&remoteip=" . $user_ip;

                     function curl_get_file_contents($URL)
                                  {
                                      $c = curl_init();
                                      curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
                                      curl_setopt($c, CURLOPT_URL, $URL);
                                      $contents = curl_exec($c);
                                      curl_close($c);

                                      if ($contents) return $contents;
                                      else return FALSE;
                                  }
                     $response = curl_get_file_contents($url);
                     $response = json_decode($response);

                     if ($response-> success)
                     {
                       // code...

                       $myMail = "onlineshopdesigners007@gmail.com"; //host email


                       $fname = $_POST['fname'];
                       $lname = $_POST['lname'];
                       $email = $_POST['email']; //email written by visitor
                       $typeOfWebsite = $_POST['typeOfWebsite'];
                       $message = $_POST['msg'];
                       $mob = $_POST['mob'];



                       //setting email for Acknowledgment
                       $from = $myMail;
                       $to_email = $email;
                       $subject = "Acknowledgment Email from Online Shop Designers";
                       $user_html_content = '
                       <html lang="en" dir="ltr">
                         <head>
                           <meta charset="utf-8">
                           <title>Welcome To Online Shop Designers</title>
                         </head>
                         <body >
                           <h2 style="color: #322095;">Thanks For Joining Us!</h2>
                           <h4>Acknowledgment Email from Online Shop Designers</h4>
                           <p >Hi, <br>
                           We have recieved your enquiry. Our Team will reach you soon.</p>
                           <p >Response submitted by you:</p> <br>
                           <table style="border: none;  text-align: left; ">
                             <tr style="padding: 20px; margin: 10px 10px 10px 0;">
                               <th style="padding-right: 10px">Name: </th>
                               <td>'. $fname . ' ' . $lname .' </td>
                             </tr>
                             <tr style="padding: 20px; margin: 10px 10px 10px 0;">
                               <th style="padding-right: 10px">Email: </th>
                               <td>'. $email .' </td>
                             </tr>
                             <tr style="padding: 20px; margin: 10px 10px 10px 0;">
                               <th style="padding-right: 10px">Mobile: </th>
                               <td>'.  $mob .'</td>
                             </tr>
                             <tr style="padding: 20px; margin: 10px 10px 10px 0;">
                               <th style="padding-right: 10px">Type of website: </th>
                               <td> '.$typeOfWebsite.' </td>
                             </tr>
                             <tr style="padding: 20px; margin: 10px 10px 10px 0;">
                               <th style="padding-right: 10px">Message: </th>
                               <td>'. $message .'</td>
                             </tr>
                           </table>
                         </body>
                       </html>
                       ';
                       $body = $user_html_content;
                       $headers = "MIME-Version: 1.0\r\n" ;
                       $headers = $headers ."Content-type:text/html;charset=UTF-8\r\n";
                       $headers = $headers .  "From: ". $myMail ;
                       if(mail($to_email, $subject, $body, $headers) ){
                         echo "Thank You! We recieved your enquiry.";
                       } else {
                         echo "Email failed.";
                       }
                       //Acknowledgment mail end


                       //mail new response recieved from contact-us
                       $from = $myMail;
                       $office_mail = "onlineshopdesigners007@gmail.com";
                       $to_email = "soumgupta025@gmail.com";
                       $officeSubject = "New Contact Form Submission";
                       $office_html_content = '
                       <html lang="en" dir="ltr">
                         <head>
                           <meta charset="utf-8">
                           <title>New Contact Form Submission</title>
                         </head>
                         <body " >
                           <h2 style="color: #322095;">New Contact Form has been Submitted</h2>
                           <h4>Here are the details:</h4>

                           <table style="border: none;  text-align: left; ">
                             <tr style="padding: 20px; margin: 10px 10px 10px 0;">
                               <th style="padding-right: 10px">Name: </th>
                               <td>'. $fname .  ' ' . $lname .' </td>
                             </tr>
                             <tr style="padding: 20px; margin: 10px 10px 10px 0;">
                               <th style="padding-right: 10px">Email: </th>
                               <td>'. $email .' </td>
                             </tr>
                             <tr style="padding: 20px; margin: 10px 10px 10px 0;">
                               <th style="padding-right: 10px">Mobile: </th>
                               <td>'. $mob .'</td>
                             </tr>
                             <tr style="padding: 20px; margin: 10px 10px 10px 0;">
                               <th style="padding-right: 10px">Type of website: </th>
                               <td> '.$typeOfWebsite .'</td>
                             </tr>
                             <tr style="padding: 20px; margin: 10px 10px 10px 0;">
                               <th style="padding-right: 10px">Message: </th>
                               <td> '.$message .' </td>
                             </tr>
                           </table>
                         </body>
                       </html>

                       ';
                       $officeBody = $office_html_content;
                       $headers = "MIME-Version: 1.0\r\n" ;
                       $headers = $headers ."Content-type:text/html;charset=UTF-8\r\n";
                       $headers = $headers . "From:". $from ;
                          if(mail($to_email, $officeSubject, $officeBody, $headers)){
                            echo " We'll reach you soon.\n";
                          }
                          else{
                            echo "Something Went wrong! Please try again.";
                          }

                       // end

                     } else {
                       echo "<span  style=\" color: red; font-weight: bolder;
                       font-size: 1.2rem;
                       text-align: center;\" >";
                       echo "Please enter captcha!";
                       echo "</span>";
                     }

                       // header('Location: http://onlineshopdesigners.com/Demo/Contact.php');

                    }
                   ?>
                 </div>
               </div>

               </form>



            </div>

        </div>

        </div>
       </section>
       <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=rajankunte+(maps)&amp;t=p&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/draw-radius-circle-map/"></a></div>

   </div>

      <footer>
     <div class="container-fluid">
       <div class="row footer-list">
         <div class="col-lg-3 col-md-6">
           <h4>OnlineShopDesigners</h4>
           <p>OSD has been dedicated to helping entrepreneurs and businesses push the boundaries of commerce and thereby achieve their ambitions.</p>
         </div>
         <div class="col-lg-3 col-md-6">
           <h4>Quick Links</h4>
           <ul>
             <li><a  href="index.html">Home</a></li>
             <li><a  href="About.html">About Us</a></li>
             <li><a  href="Ourwork.html">Our Work</a>
             <li><a  href="Career.html">Career</a></li>
             <li><a  href="Contact.php">Contact Us</a></li>
           </ul>
         </div>
         <div class="col-lg-3 col-md-6">
           <h4>Products</h4>
           <ul>
             <li><a  href="metric.html">OSD Metrics & Platform</a></li>
             <li><a  href="facebook.html">OSD Facebook</a></li>
             <li><a  href="checkout.html">OSD Checkout</a></li>
             <li><a  href="starter.html">OSD Starter Pack</a></li>
             
           </ul>
         </div>
         <div class="col-lg-3 col-md-6">
           <h4>We are located at</h4>
           <p>No:32 Vinayagar Kovil st, <br> Karungalpalayam, <br> Erode-03, Tamil Nadu <br>India. </p>
           <p>Email: <a href="mailto:info@onlineshopdesigners.com">info@onlineshopdesigners.com</a> <br><a href="mailto:support@abcinfomedia.in">support@abcinfomedia.in</a> <br> Mobile: <a href="tel:+91-73392 80155">+91-73392 80155</a> </p>
         </div>
       </div>
       <div class="social">
         <h4>Follow Us</h4>
         <a href="#"><span class="iconify" data-icon="akar-icons:facebook-fill" data-inline="false"></span></a>
         <a href="#"><span class="iconify" data-icon="bx:bxl-instagram-alt" data-inline="false"></span></a>
         <a href="#"><span class="iconify" data-icon="ant-design:twitter-circle-filled" data-inline="false"></span></a>
         <a href="#"><span class="iconify" data-icon="akar-icons:telegram-fill" data-inline="false"></span></a>
         <a href="#"><span class="iconify" data-icon="foundation:social-youtube" data-inline="false"></span></a>
         <a href="#"><span class="iconify" data-icon="entypo-social:linkedin-with-circle" data-inline="false"></span></a>
         <a href="#"><span class="iconify" data-icon="ic:round-email" data-inline="false"></span></a>
       </div>
       <hr>
       <div class="copyright">
          <p>©2021 <a href="https://abcinfomedia.com/index.php" sytle="color:green;">ABC INFOMEDIA PRIVATE LIMITED.</a> All rights reserved.</p>
         <a href="Credit.html"><p style="color: #fff;">Meet the developers!</p></a>
       </div>
     </div>

   </footer>


   <script src="script.js"></script>

   </body>
   </html>
