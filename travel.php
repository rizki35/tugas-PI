<?php session_start();
if(ISSET($_SESSION['username'])){
?>
<!DOCTYPE html>
<html lang="en">
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
                        <li class="active"><a href="home.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">TOUR <b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="advenjog.php">ADVENTURE JOGJA</a></li>
                                <li><a href="advenbal.php">ADVENTURE BALI</a></li>
                                <li><a href="advenban.php">ADVENTURE BANDUNG</a></li>
                                <li><a href="advenjak.php">ADVENTURE JAKARTA</a></li>
                            </ul>
                        </li>
                        <li><a href="book_tiket.php">Transaksi</a></li>
                        <li><a href="proseslogout.php">Logout</a><li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="home.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                    <li class="active">Travel</li>
                </ul>
            </div>
        </div>
    </div>
    <section id="content">
    <div id="contact-page" class="container">
        <div class="bg">      
            <div class="row">   
                <div class="col-sm-10">
                    <div class="contact-form">
                        <h2 class="title text-center">TIKET PESAWAT</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form method="post" action="cari.php">
                            <div class="form-group col-md-3">
                                <input type="text" name="asal1" class="form-control" required="required" placeholder="Asal">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" name="tujuan1" class="form-control" required="required" placeholder="Tujuan">
                            </div> 
                            <div class="form-group col-md-3">
                                <input type="text" name="hari1" class="form-control" required="required" placeholder="Hari">
                            </div>                      
                            <div class="form-group col-md-3">
                                <input type="submit" name="pilih" class="btn btn-primary pull-right" value="Check">
                            </div>
                        </form>
                    </div>
                </div>             
            </div>
            <div class="row">   
                <div class="col-sm-10">
                    <div class="contact-form">
                        <h2 class="title text-center">TIKET KERETA API</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form method="post" action="cari.php">
                            <div class="form-group col-md-3">
                                <input type="text" name="asal2" class="form-control" required="required" placeholder="Asal">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" name="tujuan2" class="form-control" required="required" placeholder="Tujuan">
                            </div> 
                            <div class="form-group col-md-3">
                                <input type="text" name="hari2" class="form-control" required="required" placeholder="Hari">
                            </div>                      
                            <div class="form-group col-md-3">
                                <input type="submit" name="pilih2" class="btn btn-primary pull-right" value="Check">
                            </div>
                        </form>
                    </div>
                </div>             
            </div> <div class="row">   
                <div class="col-sm-10">
                    <div class="contact-form">
                        <h2 class="title text-center">TIKET MINI BUS</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form method="post3" action="cari.php">
                            <div class="form-group col-md-3">
                                <input type="text" name="asal3" class="form-control" required="required" placeholder="Asal">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" name="tujuan3" class="form-control" required="required" placeholder="Tujuan">
                            </div> 
                            <div class="form-group col-md-3">
                                <input type="text" name="hari3" class="form-control" required="required" placeholder="Hari">
                            </div>                      
                            <div class="form-group col-md-3">
                                <input type="submit" name="pilih3" class="btn btn-primary pull-right" value="Check">
                            </div>
                        </form>
                    </div>
                </div>             
            </div> <div class="row">   
                <div class="col-sm-10">
                    <div class="contact-form">
                        <h2 class="title text-center">TIKET BUS</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form method="post4" action="cari.php">
                            <div class="form-group col-md-3">
                                <input type="text" name="asal4" class="form-control" required="required" placeholder="Asal">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" name="tujuan4" class="form-control" required="required" placeholder="Tujuan">
                            </div> 
                            <div class="form-group col-md-3">
                                <input type="text" name="hari4" class="form-control" required="required" placeholder="Hari">
                            </div>                      
                            <div class="form-group col-md-3">
                                <input type="submit" name="pilih4" class="btn btn-primary pull-right" value="Check">
                            </div>
                        </form>
                    </div>
                </div>             
            </div>   
        </div>  
    </div><!--/#contact-page-->
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