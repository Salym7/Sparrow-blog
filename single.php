<?php
require_once 'config/connect.php';
$post_id = $_GET['id'];
$post = mysqli_query($connect, "SELECT * FROM `posts` WHERE `id`='$post_id'");
$post = mysqli_fetch_assoc($post);
$author_id = $post['author'];
$author = mysqli_query($connect, "SELECT * FROM `author` WHERE `id`='$author_id'");
$author = mysqli_fetch_assoc($author);
$comments = mysqli_query($connect, "SELECT * FROM `comments`");
$comments = mysqli_fetch_all($comments);
function filter_by_second_value($arr)
{
   global $post_id;
   return $arr[1] == $post_id;
}
$comments = array_filter($comments, 'filter_by_second_value');

?>

<?php
$post_prev = mysqli_query($connect, "SELECT * FROM `posts` WHERE `id` < $post_id ORDER BY id DESC LIMIT 1");
$post_next = mysqli_query($connect, "SELECT * FROM `posts` WHERE `id` > $post_id ORDER BY id DESC LIMIT 1");

$post_prev = mysqli_fetch_assoc($post_prev);
$post_next = mysqli_fetch_assoc($post_next);
?>


<!DOCTYPE html>
<html class="no-js" lang="en"> <!--<![endif]-->

<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
   <title>Blog Post | Sparrow</title>
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

            <article class="post">

               <div class="entry-header cf">

                  <h1><?php echo $post['title']; ?></h1>

                  <p class="post-meta">

                     <time class="date" datetime="2014-01-14T11:24"><?php echo $post['pubdate']; ?></time>
                     /
                     <span class="categories">
                        <a href="#">Design</a> /
                        <a href="#">User Inferface</a> /
                        <a href="#">Web Design</a>
                     </span>

                  </p>

               </div>

               <div class="post-thumb">
                  <img src="images/post-image/post-image-1300x500-01.jpg" alt="post-image" title="post-image">
               </div>

               <div class="post-content">

                  <p class="lead">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,

                     nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
                     cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
                     ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. </p>

                  <p><?php echo $post['text ']; ?></p>
                  <p class="tags">
                     <span>Tagged in </span>:
                     <a href="#">orci</a>, <a href="#">lectus</a>, <a href="#">varius</a>, <a href="#">turpis</a>
                  </p>

                  <div class="bio cf">

                     <div class="gravatar">
                        <img src="<?php echo $author['avatar']; ?>" alt="">
                     </div>
                     <div class="about">
                        <h5><a title="Posts by <?php echo $author['name']; ?>" href="#" rel="author"><?php echo $author['name']; ?></a></h5>
                        <p><?php echo $author['description']; ?>
                           <a href="#">cursus</a> a sit <a href="#">amet mauris</a>. Morbi elit consequat ipsum.
                        </p>
                     </div>

                  </div>




                  <ul class="post-nav cf">
                     <?php if ($post_prev) {
                     ?>
                        <li class="prev"><a rel="prev" href="/single.php?id=<?= $post_prev['id'] ?>"><strong>Previous Article</strong> <?= $post_prev['title'] ?></a></li>
                     <?php
                     };
                     if ($post_next) {
                     ?>
                        <li class="next"><a rel="next" href="/single.php?id=<?= $post_next['id'] ?>"><strong>Next Article</strong><?= $post_next['title'] ?></a></li>
                     <?php
                     }
                     ?>

                  </ul>

               </div>

            </article> <!-- post end -->

            <!-- Comments
            ================================================== -->
            <div id="comments">

               <h3><?php echo count($comments); ?> Comments</h3>

               <!-- commentlist -->
               <ol class="commentlist">
                  <?php
                  foreach ($comments as $comment) {
                  ?>
                     <li>
                        <div class="avatar">
                           <img width="50" height="50" class="avatar" src="images/user-01.png" alt="">
                        </div>

                        <div class="comment-info">
                           <cite><?= $comment[2] ?></cite>

                           <div class="comment-meta">
                              <time class="comment-time" datetime="2014-01-14T23:05"><?= $comment[4] ?></time>
                              <span class="sep">/</span><a class="reply" href="#">Reply</a>
                           </div>
                        </div>

                        <div class="comment-text">
                           <p><?= $comment[3] ?></p>
                        </div>

                     </li>
                  <?php
                  }
                  ?>


               </ol> <!-- Commentlist End -->


               <!-- respond -->
               <div class="respond">

                  <h3>Leave a Comment</h3>
                  <!-- form -->
                  <form name="contactForm1" id="contactForm1" method="post" action="vendor/comments.php">
                     <fieldset>
                        <input type="hidden" name="id_post" value="<?= $post_id  ?>">
                        <div class="cf">
                           <label for="cName">Name <span class="required">*</span></label>
                           <input name="author" type="text" id="cName" size="35" value="" />
                        </div>
                        <div class="message cf">
                           <label for="cMessage">Message <span class="required">Message</span></label>
                           <textarea name="text" id="cMessage" rows="10" cols="50"></textarea>
                        </div>

                        <button type="submit" class="submit">Submit</button>

                     </fieldset>
                  </form> <!-- Form End -->

               </div> <!-- Respond End -->

            </div> <!-- Comments End -->

         </div>

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

               <div class="widget widget_categories">
                  <h5 class="widget-title">Categories</h5>
                  <ul class="link-list cf">
                     <li><a href="#">Designs</a></li>
                     <li><a href="#">Internet</a></li>
                     <li><a href="#">Typography</a></li>
                     <li><a href="#">Photography</a></li>
                     <li><a href="#">Web Development</a></li>
                     <li><a href="#">Projects</a></li>
                     <li><a href="#">Other Stuff</a></li>
                  </ul>
               </div>

               <div class="widget widget_tag_cloud">
                  <h5 class="widget-title">Tags</h5>
                  <div class="tagcloud cf">
                     <a href="#">drupal</a>
                     <a href="#">joomla</a>
                     <a href="#">ghost</a>
                     <a href="#">wordpress</a>
                  </div>
               </div>

               <div class="widget widget_photostream">
                  <h5>Photostream</h5>
                  <ul class="photostream cf">
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                  </ul>
               </div>

            </aside> <!-- Sidebar End -->

         </div> <!-- Comments End -->

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