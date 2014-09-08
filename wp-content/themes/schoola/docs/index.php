<?php include('includes/tmpl.php'); ?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="[description]" />
        <meta name="viewport" content="width=1000">

        <title>Schoola Blog</title>

        <link rel="shortcut icon" href="/images/favicon.ico" />

        <link type="text/css" rel="stylesheet" href="../assets/css/vendor/bootstrap/bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="../assets/css/vendor/font-awesome/font-awesome.min.css" />
        <link type="text/css" rel="stylesheet" href="../assets/css/schoola-blog.css" />
</head>
    <body class="schoola-blog">
        <div class="s-container">

            <!-- 1st row. -->
            <div class="m-row">

                <div class="module big">
                    <img src="../assets/img/tmp/module-1.jpg" />
                    <?php module_ribbon(array('category' => 'art', 'with-comment' => true)); ?>
                    <div class="meta-block">
                        <!-- This (first) special module should use `h1` for SEO purposes. -->
                        <h1>Why art actually really matters</h1>
                        <p><strong>2 days ago</strong> | Art can be one of the most important parts of a young student&rsquo;s life. It teaches kids that it&rsquo;s okay to be creative and take risks at school—not just... <a href="">More</a></p>
                    </div>
                </div>

                <div class="bulletin">
                    <p>The latest what nots from Schoola, intro text and stuff. Oh, subscribe via RSS if you swing that way.</p>
                    <h4>Popular Topics</h4>
                    <ul class="popular-topics">
                        <li><a href="#">#art</a>,</li>
                        <li><a href="#">#music</a>,</li>
                        <li><a href="#">#play</a>,</li>
                        <li><a href="#">#opinio</a>,</li>
                        <li><a href="#">#sweepstakes</a>,</li>
                        <li><a href="#">#video</a>,</li>
                        <li><a href="#">see all</a></li>
                    </ul>
                    <h4>Looking Back</h4>
                    <div class="split-block">
                        <ul>
                            <li><a href="#">May 2014</a></li>
                            <li><a href="#">Jun 2014</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Jul 2014</a></li>
                            <li><a href="#">Aug 2014</a></li>
                        </ul>
                    </div>
                    <h4>Come say Hi!</h4>
                    <div class="split-block">
                        <ul>
                            <li><a class="wi" href="#"><i class="fa fa-twitter"></i>@schoola</a></li>
                            <li><a class="wi" href="#"><i class="fa fa-youtube-play"></i>schoolstories</a></li>
                        </ul>
                        <ul>
                            <li><a class="wi" href="#"><i class="fa fa-facebook-square"></i>/schoola</a></li>
                            <li><a class="wi" href="#"><i class="fa fa-instagram"></i>@schoola</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- 2nd row. -->
            <div class="m-row">

                <div class="module-rowspan">
                    <div class="module">
                        <a href="#"><img src="../assets/img/tmp/module-5.jpg" /></a>
                        <?php module_ribbon(array('category' => 'how-to')); ?>
                        <div class="meta-block">
                            <p>An anatomy of a perfect clothing drive</p>
                        </div>
                    </div>
                    <div class="module">
                        <a href="#"><img src="../assets/img/tmp/module-4.jpg" /></a>
                        <?php module_ribbon(array('category' => 'video')); ?>
                        <div class="meta-block">
                            <p>Video premiere: how Schoola works</p>
                        </div>
                    </div>
                </div>

                <div class="module big">
                    <img src="../assets/img/tmp/module-2.jpg" />
                    <?php module_ribbon(array('category' => 'sweepstakes', 'with-comment' => true)); ?>
                    <div class="meta-block">
                        <!-- This (second) special module can use `h2` because `h1` is already used. -->
                        <h2>Super Style Sweepstakes is here!</h2>
                        <p><strong>5 days ago</strong> | Now that back to school is just right around the corner oh my goodness it&rsquo;s crazy it&rsquo;s actually here hahahaha, you may be realizing that you are a bit... <a href="">More</a></p>
                    </div>
                </div>

            </div>

            <!-- 3rd row. -->
            <div class="m-row">

                <div class="module">
                    <a href="#"><img src="../assets/img/tmp/module-3.jpg" /></a>
                    <?php module_ribbon(array('category' => 'success')); ?>
                    <div class="meta-block">
                        <p>What worked for me: Cathy Bibb</p>
                    </div>
                </div>

                <div class="module">
                    <a href="#"><img src="../assets/img/tmp/module-6.jpg" /></a>
                    <?php module_ribbon(array('category' => 'music')); ?>
                    <div class="meta-block">
                        <p>Kipp: Making beautiful music</p>
                    </div>
                </div>

                <div class="module">
                    <a href="#"><img src="../assets/img/tmp/module-7.jpg" /></a>
                    <?php module_ribbon(array('category' => 'summerfun')); ?>
                    <div class="meta-block">
                        <p>Brain teaser of the day</p>
                    </div>
                </div>

            </div>

            <section class="previous-block">
                <h4>Previously on the Scoop...</h4>
                <ul>
                    <li>
                        <h3><a href="#">31 Days of Smart Summer Fun, Day 31: Teaching Kindness</a></h3>
                        <p>12 days ago</p>
                    </li>
                    <li>
                        <h3><a href="#">31 Days of Smart Summer Fun, Day 28: Learning a New Game</a></h3>
                        <p>15 days ago</p>
                    </li>
                    <li>
                        <h3><a href="#">31 Days of Smart Summer Fun, Day 27: Graphic Novels for Kids</a></h3>
                        <p>16 days ago</p>
                    </li>
                </ul>
                <p><a href="#">See More</a></p>
            </section>
        </div><!-- /.container -->

        <?php s_footer(); ?>
    </body>
</html>