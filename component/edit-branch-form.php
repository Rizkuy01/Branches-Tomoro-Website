<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Edit Data</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../images/fevicon.png" type="image/gif" />
      <link href="../images/head.jpg" rel="icon" type="image/jpg" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
      <div class="header_section">
         <div class="container">
         <!-- navbar -->
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.php"><img src="images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="component/index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="component/about.php">About Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="component/testimonial.php">Testimonial</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="auth/login.php">JOIN NOW</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                  </form>
               </div>
            </nav>
            <!-- navbar end -->
         </div>
      </div>
      <!-- header section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="contact_taital">Contact Us</h1>
                  <p class="contact_text"> content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
               </div>
            </div>
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12 padding15">
                     <form action="../admin/edit-branch.php" method="POST">
                        <div class="mail_section_1 ">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                           <input type="text" class="mail_text" placeholder="Your Name" name="name" value="<?php echo $name; ?>">
                           <input type="text" class="mail_text" placeholder="Email" name="email" value="<?php echo $email; ?>">
                           <input type="text" class="mail_text" placeholder="City" name="city" value="<?php echo $city; ?>"> 
                           <input type="text" class="mail_text" placeholder="Branch Type" name="type" value="<?php echo $type; ?>"> 
                           <input type="submit" value="update">
                           <div class="readmore_btn active"><a href="#" class="mt-4">Edit Data</a></div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="map_main">
            <div class="map-responsive">
               <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Universitas+Singaperbangsa+Karawang" width="600" height="300" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2024 Website Final Exam. &copy;<a href="https://github.com/Rizkuy01">Rizkuy01</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="../js/jquery.min.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.bundle.min.js"></script>
      <script src="../js/jquery-3.0.0.min.js"></script>
      <script src="../js/plugin.js"></script>
      <!-- sidebar -->
      <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../js/custom.js"></script>
   </body>
</html>