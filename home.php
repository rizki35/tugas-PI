<?php session_start();
if(ISSET($_SESSION['username'])){
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Adventure Tour And Travel</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />


<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="home.php"class="navbar-brand">Adventure<span>Tour</span></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">TOUR <b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="advenjog.php">ADVENTURE JOGJA</a></li>
                                <li><a href="advenbal.php">ADVENTURE BALI</a></li>
								<li><a href="advenban.php">ADVENTURE BANDUNG</a></li>
								<li><a href="advenjak.php">ADVENTURE JAKARTA</a></li>
                            </ul>
                        </li>
                       	<li><a href="travel.php">Travel</a></li>
                       	<li><a href="book_tiket.php">Transaksi</a></li>
                        <li><a href="proseslogout.php">Logout</a><li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	<section id="tour">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="img/slides/1jog.png" alt="" />
                <div class="flex-caption">
                    <h3>ADVENTURE Jogja</h3> 
					<p>Tour yang memberikan sesuatu pengalaman yang menarik, perjalanan yang menantang, sesuatu yang tidak biasa, sesuatu yang berbahaya, sesuatu yang mengejutkan dan diluar perkiraan yang ada di Jogja</p> 
					<a href="advenjog.php" class="btn btn-theme">Learn More</a>
                </div>
              </li>
              <li>
                <img src="img/slides/2bal.png" alt="" />
                <div class="flex-caption">
                    <h3>ADVENTURE Bali</h3> 
					<p>Tour yang memberikan sesuatu pengalaman yang menarik, perjalanan yang menantang, sesuatu yang tidak biasa, sesuatu yang berbahaya, sesuatu yang mengejutkan dan diluar perkiraan yang ada di Bali</p> 
					<a href="advenbal.php" class="btn btn-theme">Learn More</a>
                </div>
              </li>
              <li>
                <img src="img/slides/3ban.png" alt="" />
                <div class="flex-caption">
                    <h3>ADVENTURE Bandung</h3> 
					<p>Tour yang memberikan sesuatu pengalaman yang menarik, perjalanan yang menantang, sesuatu yang tidak biasa, sesuatu yang berbahaya, sesuatu yang mengejutkan dan diluar perkiraan yang ada di Bandung</p> 
					<a href="advenban.php" class="btn btn-theme">Learn More</a>
                </div>
              </li>
              <li>
                <img src="img/slides/4jak.png" alt="" />
                <div class="flex-caption">
                    <h3>ADVENTURE Jakarta</h3> 
					<p>Tour yang memberikan sesuatu pengalaman yang menarik, perjalanan yang menantang, sesuatu yang tidak biasa, sesuatu yang berbahaya, sesuatu yang mengejutkan dan diluar perkiraan yang ada di Jakarta</p> 
					<a href="advenjak.php" class="btn btn-theme">Learn More</a>
                </div>
              </li>
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	
	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2>GALERY</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Portfolio Projects -->
		<div class="row">
			<div class="col-lg-12">
				<!--<h4 class="heading">Recent Works</h4>-->
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<!-- Item Project and Filter Name -->
						<li class="col-lg-3 design" data-id="id-0" data-type="web">
						<div class="item-thumbs">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="" href="img/works/1a.png">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/1a.png" alt="Bermain Outbound Dengan Keluarga Besar">
						</div>
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="" href="img/works/2a.png">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/2a.png" alt="Wisata Dengan Menggunakan Jeep">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="" href="img/works/3a.png">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/3a.png" alt="Wisata Adventure Cave Tubing Gua Kalisuci">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="" href="img/works/4a.png">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/4a.png" alt="Merapi Amazing Race Dengan Jeep">
						</li>
						<!-- End Item Project -->
					</ul>
					</section>
				</div>
			</div>
		</div>

	</div>
	</section>
	<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">Tempat kantor</h5>
                    <address>
                    <strong>Adventure Tour And Travel</strong><br>
                    <p>
                        <i class="alamat"></i>Jl. Imam Bonjol No.21 Semarang<br>
                        <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                        <i class="icon-envelope-alt"></i> AdventureTAT@tat.com
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">Pages</h5>
                    <ul class="link-list">
                        <li><a href="#">Tour</a></li>
                        <li><a href="travel.php">Travel</a></li>
                        <li><a href="us.php">Contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">Posting Terbaru</h5>
                    <ul class="link-list">
                        <li><a href="advenjog.php">Adventure Tour Jogja</a></li>
                        <li><a href="advenbal.php">Adventure Tour Bali</a></li>
                        <li><a href="advenban.php">Adventure Tour Bandung</a></li>
                        <li><a href="advenjak.php">Adventure Tour Jakarta</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">Flickr photostream</h5>
                    <div class="flickr_badge">
                        <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
                    </div>
                    <div class="clear">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="social-network">
                        <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
<?php
}else{
?>
<?php
header("location:index.php");
}
?>