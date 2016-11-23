<?php
	require_once("db.php");
	$db = new DB();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>THEMELOCK.COM - FREE THEMES & TEMPLATES</title>
<!--CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link  href="css/colorbox.css" rel="stylesheet" type="text/css" />
<!--Js -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/swiss.js"></script>
<script type="text/javascript" src="js/hoverIntent.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
</head>
<body>
<!--wrapper -->
<div id="outer_wrapper">
  <div id="wrapper">
    <!--header -->
    <div id="header"> <a href="index.html"><img src="images/logo.png" alt="" id="logo" /></a>
      <div id="right_header">
        <div id="top_nav">
          <ul>
            <li><a href="#" class="active"><span>Campus maps</span></a></li>
            <li><a href="contactus.html"><span>Contact us</span></a></li>
            <li><a href="#"><span>Jobs</span></a></li>
            <li><a href="#"><span>Help</span></a></li>
            <li><a href="#"><span>A-Z index</span></a></li>
          </ul>
        </div>
        <div id="search_header">
          <ul>
            <li>
              <input type="text" value="Search you any keyword" onfocus="if(this.value == 'Search you any keyword') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Search you any keyword'; }" />
            </li>
            <li><a href="#">Search</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!--Menu Area -->
    <div id="nav">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="#">Current students</a></li>
        <li><a href="#">International</a>
          <ul>
            <li><a href="#">Offices</a>
              <ul>
                <li><a href="#">International</a></li>
                <li><a href="#">Uk Offices</a></li>
                <li><a href="#">London Campus</a></li>
                <li><a href="#">Online Support</a></li>
              </ul>
            </li>
            <li><a href="#">Student</a></li>
            <li><a href="#">Affiliation</a></li>
            <li><a href="#">Community</a></li>
            <li><a href="#">Success Statement</a></li>
          </ul>
        </li>
        <li><a href="#">Study Departments </a></li>
        <li><a href="#">Research</a></li>
        <li><a href="#">Alumni</a></li>
        <li><a href="#"> About us</a></li>
        <li><a href="#">Pages</a>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="blogdetail.html">Blog Detail</a></li>
            <li><a href="news.html">News</a></li>
            <li><a href="contactus.html">Contact us</a></li>
            <li><a href="courses.html">Courses</a></li>
            <li><a href="gallery.html">Gallery</a></li>
          </ul>
        </li>
        <li><a href="#">Themes</a>
          <ul>
            <li><a href="../blue/index.html">Blue</a></li>
            <li><a href="../green/index.html">Green</a></li>
            <li><a href="../red/index.html">Red</a></li>
            <li><a href="../yellow/index.html">Yellow</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!--content area -->
    <div id="content">
      <!--banner section -->
      <div id="banner_wrapp">
        <div id="banner"><img src="images/banner.jpg" alt="" /></div>
        <div id="banner_accordion">
          <div class="acord_box">
            <div class="hdaccor">
              <h2>Find out Right Program for you</h2>
            </div>
            <div class="slideaccor">
              <h5>Browse by Category</h5>
              <ul>
                <li><a href="#" class="active">Browse undergraduate</a></li>
                <li><a href="#">Browse postgraduate</a></li>
                <li><a href="#">Browse Courses</a></li>
                <li><a href="#">Others</a></li>
              </ul>
              <h6>You Already applied?</h6>
              <a href="#" class="btn_banner1">Order Printed Prospectus</a> <a href="#" class="btn_banner2">Check Application Process</a> </div>
          </div>
          <div class="acord_box">
            <div class="hdaccor">
              <h2>International Students</h2>
            </div>
            <div class="slideaccor">
              <div class="student_box"> <img src="images/img-student.jpg" alt="" />
                <h2>Jai Parkash ( INDIA)</h2>
                <p>Lorem ipsum dolor sit amet, ctetur adiiscing elit. Quisque sit amet sem felisLorem ipsum dolor sit amet, ctetur adiiscing elit. Quisque sit amet sem felis    Read More</p>
              </div>
            </div>
          </div>
          <div class="acord_box">
            <div class="hdaccor">
              <h2>Quick Links</h2>
            </div>
            <div class="slideaccor">
              <ul>
                <li><a href="#" class="active">Collge Exams List</a></li>
                <li><a href="#">Illumni</a></li>
                <li><a href="#">Sports Festivels</a></li>
                <li><a href="#">National Day</a></li>
                <li><a href="#">Books and Classis</a></li>
                <li><a href="#">Our New courses</a></li>
                <li><a href="#">Famous Courses</a></li>
                <li><a href="#">A to Z Pages</a></li>
                <li><a href="#">Top Courses</a></li>
                <li><a href="#">Staff Section</a></li>
              </ul>
              <a href="#" class="btn_banner1">Go to Quick Link Page</a> </div>
          </div>
        </div>
      </div>
      <!--News and spotlight container -->
      <div class="outer_row">
         <div class="spotlight_slider">
            <h2>Новости и события</h2>
	    <?php
		$news = $db->getHandler()->query("SELECT id, title, date, concat(substring(text, 1, 100), '...') as short from news");
       	    	foreach ($news as $k => $newsRow) {
                   echo "<div class='news_box'> <span class='date'> <img src='images/img-ico-calendar.gif' alt='' /> <strong>".date_format(date_create($newsRow['date']), 'd.m.Y')."</strong> </span>
                     <div class='news_desc'>
                       <h3><a href='#'>{$newsRow['title']}</a></h3>
                       <p>{$newsRow['short']}<a href='/news.php?id={$newsRow['id']}'>Читать далее</a></p>
                     </div>
                   </div>";
		}
	    ?>
          </div>
      </div>
      <br class="clear" />
    </div>
  </div>
  <!--footer -->
  <div id="outer_footer">
    <div id="footer">
      <div id="left_footer">
        <ul>
          <li>
            <h2>About Us</h2>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="#">Site map</a></li>
              <li><a href="#">International students</a></li>
              <li><a href="#">About College</a></li>
            </ul>
          </li>
          <li>
            <h2>Academia</h2>
            <ul>
              <li><a href="#">Academic Calendar</a></li>
              <li><a href="#">Bookstore</a></li>
              <li><a href="#">Colleges &amp; Schools</a></li>
              <li><a href="#">Courses</a></li>
            </ul>
          </li>
          <li>
            <h2>Portals</h2>
            <ul>
              <li><a href="#">Directories</a></li>
              <li><a href="#">A–Z Index</a></li>
              <li><a href="#">Quick Links</a></li>
              <li><a href="#">cMail | xMail</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div id="right_footer">
        <div class="tweetbox">
          <div class="left_tweet">
            <p><a href="#">@University college</a> By Simon Cole 11-04-2011</p>
            <p>“ Lorem ipsum dolor sit amet, ctetur adiiscing top of elit. Quisque sit amet sem felis  “</p>
            <em class="shoutright">&nbsp;</em> </div>
          <div class="right_tweet"> <img src="images/bg-tweet.png" alt="" />
            <h3>Latest Tweet</h3>
          </div>
        </div>
        <div class="bottom_links">
          <div class="left_links">
            <ul>
              <li>
                <h3>Follow Us</h3>
              </li>
              <li><a href="#"><img src="images/img-fb.png" alt="" /></a></li>
              <li><a href="#"><img src="images/img-tw.png" alt="" /></a></li>
              <li><a href="#"><img src="images/img-dg.png" alt="" /></a></li>
              <li><a href="#"><img src="images/img-ut.png" alt="" /></a></li>
            </ul>
          </div>
          <div class="right_links">
            <h3>Call: (800) 123-4567</h3>
          </div>
        </div>
      </div>
      <div class="bottom_footer">
        <p>&copy; 2011 College Site All Rights Reserved</p>
        <a href="#" id="topScroll">Back to Top</a> </div>
    </div>
  </div>
  <br class="clear" />
</div>
</body>
</html>
