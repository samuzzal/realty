<!DOCTYPE html>
<html lang="en">
<head>
<title>Real Estate</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script src="js/jquery-1.6.js" ></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/Didact_Gothic_400.font.js"></script>
<script src="js/jquery.nivo.slider.pack.js"></script>
<script src="js/atooltip.jquery.js"></script>
<script src="js/jquery.jqtransform.js" ></script>
<script src="js/script.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<style type="text/css">.bg{behavior:url("js/PIE.htc");}</style>
<![endif]-->
</head>
<body id="page1">
<div class="body1">
  <div class="main">
    <!-- header -->
    <header>
      <h1><a href="index.html" id="logo"></a></h1>
      <div class="wrapper">
        <ul id="icons">
          <li><a href="#" class="normaltip"><img src="images/icon1.jpg" alt=""></a></li>
          <li><a href="#" class="normaltip"><img src="images/icon2.jpg" alt=""></a></li>
          <li><a href="#" class="normaltip"><img src="images/icon3.jpg" alt=""></a></li>
        </ul>
      </div>
      <nav>
        <ul id="menu">
          <li id="menu_active"><a href="index.php">Main Page</a></li>
          <li><a href="buying.html">Buying Estate</a></li>
          <li><a href="selling.html">Selling Estate</a></li>
          <li><a href="renting.html">Services</a></li> <!--Counselling/Consult/Finance-->
          <li><a href="finance.html">Finance</a></li>
          <li class="end"><a href="contacts.html">Contact Us</a></li>
        </ul>
      </nav>
    </header>
    <!-- / header -->
  </div>
</div>
<!-- content -->
<div class="body2">
  <div class="main">
    <section id="content">
      <div class="wrapper">
        <article class="col1">
          <div id="slider">
          <?php
          	$username="root";
			$password="";
			$database="realty";
			
			mysql_connect("localhost",$username,$password);
			@mysql_select_db($database) or die( "Unable to select database");
			
			$query = "select prop_type, dimension, city, site_picture from prop_info";
			$result=mysql_query($query);
			$num=mysql_numrows($result);
			$i=0;
			
			while ($i < $num){
				$site_picture = mysql_result($result,$i,"site_picture");
				$city = mysql_result($result,$i,"city");
				$dimension = mysql_result($result,$i,"dimension");
				$prop_type = mysql_result($result,$i,"prop_type");
				if ($prop_type == 'ind_house')
					$prop_type = 'Independent House';
				else if ($prop_type == 'plot')
					$prop_type = 'Plot';
				else
					$prop_type = 'Apartment';
				$i++;
				print "<img src=data/$site_picture title=\"<strong>$prop_type in $city</strong> <span>$dimension SQ Feet site</span>  &nbsp; &nbsp; &nbsp; <a href=getrecords.php?name=$site_picture>Read More</a>\"\>";
			}
		  ?>
		  </div>
        </article>
        <article class="col2">
          <form id="form_1" action="getrecords.php" method="post">
            <div class="pad1">
              <h3>Find Your Property</h3>
              <div class="row_select"> City<br>
                <select name='city'>
                	<option value=''>--Select--</option>
                	<option value='mysore'>Mysore</option>
                </select>
              </div>
              <div class="row_select"> Search Area:<br>
                <select name='locality'>
                  <option value=''>--Select--</option>
				  <?php

					$query = "select distinct(locality) as locality,city from prop_info where city in (select distinct(city) from prop_info)";
					$result=mysql_query($query);
					$num=mysql_numrows($result);
					$i=0;
					$loc_arr = array();
					while ($i < $num) {
						$loc = mysql_result($result,$i,"locality");
						print "<option value=\"$loc\">$loc</option>";
						$i++;
					}
					mysql_close();
				  ?>
                </select>
              </div>
              <div class="row_select">
                <div class="cols"> Price Range :<br>
                  <select name='price'>
                    <option value=''>--Select--</option>
                    <option value='<500000'>&lt; 500000</option>
                    <option value='between 500000 and 1499999'>500000-1500000</option>
                    <option value='between 1500000 and 2500000'>1500000-2500000</option>
                    <option value='>2500000'>&gt;2500000</option>
                  </select>
                </div>
                <div class="cols pad_left1"> Property Type<br>
                  <select name='prop_type'>
                    <option value=''>--Select--</option>
                    <option value='plot'>Plot</option>
                    <option value='ind_house'>Independent House</option>
                    <option value='apartment'>Apartment</option>
                  </select>
                </div>
              </div>
              <div class="row_select">
                <div class="cols">Area (Sq ft))<br>
                  <select name='area'>
                    <option value=''>--Select--</option>
                    <option value='<1000'>&lt; 1000</option>
                    <option value='between 1000 and 1999'>1000-1999</option>
                    <option value='between 2000 and 2999'>2000-3000</option>
                    <option value='> 3000'>&gt; 3000</option>
                  </select>
                </div>
                <!--div class="cols pad_left1"> Bathroom(s):<br>
                  <select>
                    <option>&nbsp;</option>
                    <option>...</option>
                    <option>...</option>
                  </select>
                </div-->
              </div>
              <div class="row_select pad_bot1">
                <!--div class="cols"> Radius:<br>
                  <select>
                    <option>&nbsp;</option>
                    <option>...</option>
                    <option>...</option>
                  </select>
    
                </div-->
                <div class="cols pad_left1"> <!--a href="#" class="button">Proposals</a-->
                	<BR><input type=submit value="Proposals"></input>
                </div>
              </div>
              <!--Know exactly what you want? <br>
              Try our <a href="#">Advanced Search</a--> </div>
          </form>
        </article>
      </div>
      <div class="wrapper">
        <article class="col1">
          <div class="pad_left1">
            <h2 class="pad_bot1">Buyers. Sellers. Proprietors. Agents.</h2>
            <div class="wrapper">
              <article class="cols">
                <h4 class="img1">Selling</h4>
                <!--p class="pad_bot1"><strong class="color1">Welcome one of <br>
                  free website templates</strong></p>
                <p class="pad_bot2"> created by TemplateMonster.com team, optimized for 1024X768 px.</p-->
                <a href="#" class="button">Coming soon ... </a> </article>
              <article class="cols pad_left1">
                <h4 class="img2">Investing</h4>
                <!--p class="pad_bot1"><strong class="color1">Free website template for<br>
                  Real Estate business</strong></p>
                <p class="pad_bot2"> goes with PSD source files and without them.</p-->
                <a href="#" class="button">Coming soon ... </a> </article>
              <article class="cols pad_left1">
                <h4 class="img3">Renting</h4>
                <!--p class="pad_bot1"><strong class="color1">Template has several pages</strong></p>
                <p class="pad_bot2"> <a href="index.html" class="color2">Main</a>, <a href="buying.html" class="color2">Buying</a>, <a href="selling.html" class="color2">Selling</a>, <a href="renting.html" class="color2">Renting</a>, <a href="finance.html" class="color2">Finance</a>, <a href="contacts.html" class="color2">Contacts</a> (note that contact us form – doesn’t work).</p-->
                <a href="#" class="button">Coming soon ... </a> </article>
            </div>
          </div>
        </article>
        <!--article class="col2">
          <div class="pad1">
            <h3>Special Offers</h3>
            <ul class="list1">
              <li><a href="#">Home Loan Offer</a></li>
              <li><a href="#">Free Calculators</a></li>
              <li><a href="#">Free Loan Tools</a></li>
              <li><a href="#">Value Your Home</a></li>
              <li><a href="#">Recently Sold Properties</a></li>
              <li><a href="#">Suburb Statistics</a></li>
              <li><a href="#">Compare Property Prices</a></li>
            </ul>
          </div>
        </article-->
      </div>
    </section>
  </div>
</div>
<!--div class="body3">
  <div class="main">
    <section id="content2">
      <div class="wrapper">
        <article class="col1">
          <div class="pad2">
            <h2>Remodeling Rooms</h2>
            <div class="wrapper pad_bot3">
              <figure class="left marg_right1"><img src="images/page1_img4.jpg" alt=""></figure>
              <p class="pad_bot1"><strong class="color2">2006, 3 baths, 6 beds, building size: 5000 sq. ft.<br>
                Price: <span class="color1">$ 600 000</span></strong></p>
              <p class="pad_bot2"> Massa dictum ementum velitumo od consequat ante oremsumas ame consectetueraipiscing eliteli ueedlorAliquam conguen nisauris accusalla vel deinol tincidunt ligula magna semper ipsum.</p>
              <a href="#" class="button">Read more</a> </div>
            <div class="wrapper">
              <figure class="left marg_right1"><img src="images/page1_img5.jpg" alt=""></figure>
              <p class="pad_bot1"><strong class="color2">2006, 3 baths, 6 beds, building size: 5000 sq. ft.<br>
                Price: <span class="color1">$ 600 000</span></strong></p>
              <p class="pad_bot2"> Massa dictum ementum velitumo od consequat ante oremsumas ame consectetueraipiscing eliteli ueedlorAliquam conguen nisauris accusalla vel deinol tincidunt ligula magna semper ipsum.</p>
              <a href="#" class="button">Read more</a> </div>
          </div>
        </article>
        <article class="col2">
          <div class="pad1">
            <h3>Recent News</h3>
            <div class="wrapper"> <span class="date"><strong>28</strong><span>may</span></span>
              <p><a href="#" class="color2">Donec consequat risus</a><br>
                Hendrerit conghdim entum diam metus fringilla nisl, in porta sapien purus quis odiosem... <a href="#">more</a></p>
            </div>
            <div class="wrapper"> <span class="date"><strong>25</strong><span>may</span></span>
              <p><a href="#" class="color2">Nullam dignissim</a><br>
                Laoreet neque, quis sollicitudin orci tempus etiam viverra leo euismod pulvinar accumsan... <a href="#">more</a></p>
            </div>
            <div class="wrapper"> <span class="date"><strong>22</strong><span>may</span></span>
              <p><a href="#" class="color2">Quisque nunc lorem</a><br>
                Feugiat nec sodales quis, iaculis sed libero. Cras vel nisl justo, ac posuere est nulla facilisi... <a href="#">more</a></p>
            </div>
          </div>
        </article>
      </div>
    </section>
  </div>
</div-->
<!-- / content -->
<div class="body4">
  <div class="main">
    <!-- footer -->
    <footer><span class="call"><a href="adminlogin.html">Admin Login</a></span></footer>
    <!-- / footer -->
  </div>
</div>
<script>Cufon.now();</script>
<script>
$(window).load(function () {
    $('#slider').nivoSlider({
        effect: 'sliceUpDown', //Specify sets like: 'fold,fade,sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft'
        slices: 17,
        animSpeed: 500,
        pauseTime: 6000,
        startSlide: 0, //Set starting Slide (0 index)
        directionNav: false, //Next & Prev
        directionNavHide: false, //Only show on hover
        controlNav: true, //1,2,3...
        controlNavThumbs: false, //Use thumbnails for Control Nav
        controlNavThumbsFromRel: false, //Use image rel for thumbs
        controlNavThumbsSearch: '.jpg', //Replace this with...
        controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
        keyboardNav: true, //Use left & right arrows
        pauseOnHover: true, //Stop animation while hovering
        manualAdvance: false, //Force manual transitions
        captionOpacity: 1, //Universal caption opacity
        beforeChange: function () {
            $('.nivo-caption').animate({
                bottom: '-110'
            }, 400, 'easeInBack')
        },
        afterChange: function () {
            Cufon.refresh();
            $('.nivo-caption').animate({
                bottom: '-20'
            }, 400, 'easeOutBack')
        },
        slideshowEnd: function () {} //Triggers after all slides have been shown
    });
    Cufon.refresh();
});
</script>
</body>
</html>
