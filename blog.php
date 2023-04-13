<?php
require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
   <title>Blog | Sparrow</title>
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
            <h1>Our Blog<span>.</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
               enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row">

         <div id="primary" class="eight columns">
            <?php


            $posts = mysqli_query($connect, "SELECT * FROM `posts`");
            $posts = mysqli_fetch_all($posts);
            $posts = array_slice($posts, -3);
            $posts = array_reverse($posts);

            $per_page = 3;



            foreach ($posts as $post) {
            ?>
               <article class="post">

                  <div class="entry-header cf">

                     <h1><a href="single.php?id=<?= $post[0] ?>" title=""><?php echo $post[1]; ?></a></h1>

                     <p class="post-meta">

                        <time class="date" datetime="2014-01-14"><?php echo $post[4]; ?></time>

                        <?php
                        $post_categories = mysqli_query($connect, "SELECT * FROM `post_categories`");
                        $post_categories = mysqli_fetch_all($post_categories);
                        $categories = mysqli_query($connect, "SELECT * FROM `categories`");
                        $categories = mysqli_fetch_all($categories);
                        ?>


                        <span class="categories">
                           <?php
                           foreach ($post_categories as $item) {
                              if ($item[1] === $post[0]) {
                                 foreach ($categories as $categorie) {
                                    if ($item[2] === $categorie[0]) {
                           ?>
                                       / <a href="categories.php?id=<?= $categorie[0] ?>"><?= $categorie[1] ?></a>
                           <?php
                                    }
                                 }
                              }
                           }
                           ?>
                        </span>

                     </p>

                  </div>

                  <div class="post-thumb">
                     <a href="single.php?id=<?= $post[0] ?>" title=""><img src="<?php echo $post[2]; ?>" alt="post-image" title="post-image"></a>
                  </div>

                  <div class="post-content">

                     <p><?php echo substr($post[3], 0, 340); ?></p>

                  </div>

               </article> <!-- post end -->
            <?php
            }
            ?>



            <!-- Pagination -->
            <nav class="col full pagination">
               <ul>
                  <li><span class="page-numbers prev inactive">Prev</span></li>
                  <li><span class="page-numbers current">1</span></li>
                  <li><a href="#" class="page-numbers">2</a></li>
                  <li><a href="#" class="page-numbers">3</a></li>
                  <li><a href="#" class="page-numbers">4</a></li>
                  <li><a href="#" class="page-numbers">5</a></li>
                  <li><a href="#" class="page-numbers">6</a></li>
                  <li><a href="#" class="page-numbers">7</a></li>
                  <li><a href="#" class="page-numbers">8</a></li>
                  <li><a href="#" class="page-numbers">9</a></li>
                  <li><a href="#" class="page-numbers next">Next</a></li>
               </ul>
            </nav>

         </div> <!-- Primary End-->

         <div id="secondary" class="four columns end">

            <aside id="sidebar">

               <div class="widget widget_search">
                  <h5>Search</h5>
                  <form action="#">

                     <input class="text-search" type="text" onfocus="if (this.value == 'Search here...') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Search here...'; }" value="Search here...">
                     <input type="submit" class="submit-search" value="">

                  </form>
               </div>

               <div class="widget widget_text">
                  <h5 class="widget-title">Text Widget</h5>
                  <div class="textwidget">Proin gravida nibh vel velit auctor aliquet.
                     Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                     nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
                     a sit amet mauris. Morbi accumsan ipsum velit. </div>
               </div>

               <?php
               $categories = mysqli_query($connect, "SELECT * FROM `categories`");
               $categories = mysqli_fetch_all($categories);
               ?>

               <div class="widget widget_categories">
                  <h5 class="widget-title">Categories</h5>
                  <ul class="link-list cf">
                     <?php foreach ($categories as $item) {; ?>
                        <li><a href="categories.php?id=<?= $item[0] ?>"><?= $item[1] ?></a></li>
                     <?php }; ?>
                  </ul>
               </div>

               <?php
               $tags = mysqli_query($connect, "SELECT * FROM `tags`");
               $tags = mysqli_fetch_all($tags);
               ?>

               <div class="widget widget_tag_cloud">
                  <h5 class="widget-title">Tags</h5>
                  <div class="tagcloud cf">
                     <?php foreach ($categories as $item) {; ?>
                        <a href="tags.php?id=<?= $item[0] ?>"><?= $item[1] ?></a>
                     <?php }; ?>
                  </div>
               </div>

            </aside>

         </div> <!-- Secondary End-->

      </div>

   </div> <!-- Content End-->

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

   </section> <!-- Tweets Section End-->

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