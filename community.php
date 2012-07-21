<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Company-Community</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="jquery/cufon-yui.js"></script>
        <script type="text/javascript" src="jquery/Book_Antiqua_400.font.js"></script>
        <script type="text/javascript">
            Cufon.replace ('h1')('h3')('.top_span_48')('.top_span_36')('.but1')('.antiqua');
        </script>
    </head>
    <body>
        <div id="container">
            <div id="bg_top">
                <div id="top_line"></div>
                <div id="navigation">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li class="active"><a href="#">Community</a></li>
                        <li><a href="aboutus.html">About us</a></li>
                    </ul>
                </div>

                <div id="main">
                    <!-- header begins -->
                    <div id="header">
                        <div id="logo">
                            <a href="#"><span class="logo_span antiqua">LOGO</span></a>
                        </div>
                        <div id="top">
                            <span style="padding-left: 64px" class="top_span_48 uppercase">Need Help?</span><br />
                            <span style="padding-left: 158px" class="top_span_36">We Know What To Do!</span><br />
                            <!--                            <span style="padding-left: 230px" class="top_span_36 uppercase">Let</span> <span class="top_span_48 uppercase">Us</span> <br />
                                                      <span style="padding-left: 330px" class="top_span_36">Solve</span>  <span class="top_span_48 uppercase">Your</span> <span class="top_span_48">Problems!</span>  -->
                        </div>                     
                    </div>
                    <!-- header ends -->

                    <div id="content" >
  
                        <div id="content_one" class="content_bg">
                            <?php
                            echo "<h1>Community buiding ...</h1>\n";
                            echo "<p>";
                            for ($i = 0 ; $i < 10; $i++) {
                                echo "<br />";
                            }
                            echo "</p>";
                             ?>
                        </div>
                    </div>

                    <div id="bottom">
                        <div class="bottom_box1">
                            <h3>Quick Links</h3>
                            <ul class="bottom_ul">
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 2</a></li>
                                <li><a href="#">Link 3</a></li>
                                <li><a href="#">Link 4</a></li>
                                <li><a href="#">Link 5</a></li>
                            </ul>
                        </div>
                        <div class="bottom_box2">
                            <h3>Recent Activity</h3>
                            <span class="span_lh">
                                Activity ...
                            </span>
                        </div>

                        <div class="bottom_box3">
                            <div class="ul_img_text">
                                <h3>Follow Us</h3>
                                <div class="ul_img_link ul_img_link1"><a href="#">Subscribe to Blog</a></div>
                                <div class="ul_img_link ul_img_link2"><a href="#">Be a fan on Facebook</a></div>
                                <div class="ul_img_link ul_img_link3"><a href="#">RSS Feed</a></div>
                                <div class="ul_img_link ul_img_link4"><a href="#">Follow us on Twitter</a></div>
                                <div class="ul_img_link ul_img_link5"><a href="#">Follow us on Sina</a></div>
                            </div>
                        </div>
                    </div>
                    <div id="foot_line"></div>
                    <div id="footer">
                        <p>&copy; 2012. Company Name. Inc. | <a href="#">Privacy Policy</a></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
