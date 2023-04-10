<?php

$goods = mysqli_query($connect, "SELECT * FROM `goods`");
$goods = mysqli_fetch_all($goods);
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/media-queries.css">

    <script src="js/modernizr.js"></script>

    <link rel="shortcut icon" href="favicon.ico">

</head>

<body>

    <!-- Header
   ================================================== -->

    <?php
    require_once('header.php');
    ?>


    <!-- Journal Section
   ================================================== -->
    <section id="journal">

        <div class="row">
            <div class="twelve columns align-center">
                <h1>Our latest posts and rants.</h1>
            </div>
        </div>

        <div class="blog-entries">

            <!-- Entry -->
            <article class="row entry">

                <div class="entry-header">

                    <div class="permalink">
                        <a href="single.php"><i class="fa fa-link"></i></a>
                    </div>

                    <div class="ten columns entry-title pull-right">
                        <h3><a href="single.php">Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin auctor.</a></h3>
                    </div>

                    <div class="two columns post-meta end">
                        <p>
                            <time datetime="2014-01-31" class="post-date" pubdate="">Jan 31, 2014</time>
                            <span class="dauthor">By Sakura Haruno</span>
                        </p>
                    </div>

                </div>

                <div class="ten columns offset-2 post-content">
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                        deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
                        <a class="more-link" href="single.php">Read More<i class="fa fa-arrow-circle-o-right"></i></a>
                    </p>
                </div>

            </article> <!-- Entry End -->

            <!-- Entry -->
            <article class="row entry">

                <div class="entry-header">

                    <div class="permalink">
                        <a href="single.php"><i class="fa fa-link"></i></a>
                    </div>

                    <div class="ten columns entry-title pull-right">
                        <h3><a href="single.php">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed.</a></h3>
                    </div>

                    <div class="two columns post-meta end">
                        <p>
                            <time datetime="2014-01-29" class="post-date" pubdate="">Jan 30, 2014</time>
                            <span class="dauthor">By John Doe</span>
                        </p>
                    </div>

                </div>

                <div class="ten columns offset-2 post-content">
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                        deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
                        <a class="more-link" href="single.php">Read More<i class="fa fa-arrow-circle-o-right"></i></a>
                    </p>
                </div>

            </article> <!-- Entry End -->

            <!-- Entry -->
            <article class="row entry">

                <div class="entry-header">

                    <div class="permalink">
                        <a href="single.php"><i class="fa fa-link"></i></a>
                    </div>

                    <div class="ten columns entry-title pull-right">
                        <h3><a href="blog-single.php">Quis autem vel esse eum iure reprehenderit qui in ea voluptate velit esse.</a></h3>
                    </div>

                    <div class="two columns post-meta end">
                        <p>
                            <time datetime="2014-01-28" class="post-date" pubdate="">Jan 28, 2014</time>
                            <span class="dauthor">By Naruto Uzumaki</span>
                        </p>
                    </div>

                </div>

                <div class="ten columns offset-2 post-content">
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                        deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
                        <a class="more-link" href="single.php">Read More<i class="fa fa-arrow-circle-o-right"></i></a>
                    </p>
                </div>

            </article> <!-- Entry End -->

        </div> <!-- Entries End -->

    </section> <!-- Journal Section End-->

    <!-- Call-To-Action Section
   ================================================== -->
    <section id="call-to-action">

        <div class="row">

            <div class="eight columns offset-1">

                <h1><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Host This Template on Dreamhost.</a></h1>
                <p>Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><span>DreamHost</span></a>.
                    Get <span>$50 off</span> when you sign up with the promocode <span>STYLESHOUT</span>.
                    <!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->
                </p>

            </div>

            <div class="three columns action">

                <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT" class="button">Sign Up Now</a>

            </div>

        </div>

    </section> <!-- Call-To-Action Section End-->

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