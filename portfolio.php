<?php
require_once 'config/connect.php';
$work_id = $_GET['id'];
$work = mysqli_query($connect, "SELECT * FROM `works` WHERE `id`='$work_id'");
$work = mysqli_fetch_assoc($work);

// $comments = mysqli_query($connect, "SELECT * FROM `comments`");
// $comments = mysqli_fetch_all($comments);
// // print_r($comments);  
// function filter_by_second_value($arr)
// {
//    global $goods_id;
//    return $arr[1] == $goods_id;
// }
// $comments = array_filter($comments, 'filter_by_second_value');
// 
?>

<!DOCTYPE html>
<html class="no-js" lang="en"> <!--<![endif]-->

<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
   <title>Portfolio Entry | Sparrow</title>
   <meta name="description" content="">
   <meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
   <link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">

   <!-- Script
   ================================================== -->
   <script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
   <link rel="shortcut icon" href="favicon.ico">

</head>

<body>

   <!-- Header
   ================================================== -->
   <?php
   require_once('header.php');
   ?>

   <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Our Amazing Works<span>.</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
               enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row portfolio">

         <section class="entry cf">

            <div id="secondary" class="four columns entry-details">

               <h1><?php echo $work[1]; ?></h1>

               <div class="entry-description">

                  <p><?php echo $work[2]; ?></p>

               </div>

               <ul class="portfolio-meta-list">
                  <li><span>Date: </span><?php echo $work['date']; ?></li>
                  <li><span>Client </span>Styleshout</li>
                  <li><span>Skills: </span>Photoshop, Photography, Branding</li>
               </ul>

               <a class="button" href="http://behance.net">View project</a>

            </div> <!-- secondary End-->

            <div id="primary" class="eight columns">

               <div class="entry-media">

                  <img src="<?php echo $work['image_path']; ?>" alt="" />
                  <!-- 
                  <img src="images/portfolio/entries/geometric-backgrounds-02.jpg" alt="" /> -->

               </div>

               <div class="entry-excerpt">

                  <p><?php echo $work['text']; ?></p>

               </div>

            </div> <!-- primary end-->

         </section> <!-- end section -->

         <ul class="post-nav cf">
            <li class="prev"><a href="#" rel="prev"><strong>Previous Entry</strong> Duis Sed Odio Sit Amet Nibh Vulputate</a></li>
            <li class="next"><a href="#" rel="next"><strong>Next Entry</strong> Morbi Elit Consequat Ipsum</a></li>
         </ul>

      </div>

   </div> <!-- content End-->

   <!-- Tweets Section
   ================================================== -->
   <section id="tweets">

      <div class="row">

         <div class="tweeter-icon align-center">
            <i class="fa fa-twitter"></i>
         </div>

         <ul id="twitter" class="align-center">
            <li>
               <span>
                  This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                  Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
                  <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">2 Days Ago</a></b>
            </li>
            <!--
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">3 Days Ago</a></b>
            </li>
            -->
         </ul>

         <p class="align-center"><a href="#" class="button">Follow us</a></p>

      </div>

   </section> <!-- Tweet Section End-->

   <!-- footer
   ================================================== -->
   <?php include('footer.php'); ?>

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>
      window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')
   </script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/doubletaptogo.js"></script>
   <script src="js/init.js"></script>

</body>

</html>