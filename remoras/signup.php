<?php

include 'databaseAdapter.php';

$database = mysqli_connect( $db_hostname, $db_username, $db_password, $db_dbname );

if ( mysqli_connect_errno() ){
  echo "Failed to connect to database: " . mysqli_connect_error();
}

$user_email = mysql_real_escape_string( $_POST["email"] );

mysqli_query($database, "INSERT INTO $db_table_newsletter (email)
VALUES ( $user_email )");

mysqli_close($database);
?>

<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <title>remora - responsive landing page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Twitter bootstrap theme">
    <meta name="author" content="prettystrap">

    <!-- Le styles -->
    <link href="assets/css/style.css" rel="stylesheet"> 

    <!--Import Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
      </script>
    <![endif]-->
    <!-- Le fav  -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
    if (typeof jQuery == 'undefined') {
      document.write(unescape("%3Cscript src='assets/js/jquery-1.9.1.min.js' type='text/javascript'%3E%3C/script%3E"));
    }
    </script>


    <!--Has to be in head, to lazy load images.
    Minimize in production. -->

    <script src="assets/js/lazyload.js"></script>
    <script src="assets/js/jRespond.js"></script>
    <script src="assets/js/spin.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Main js fail. -->
    <script src="assets/js/main.js"></script>

  </head>

  <body id="top" data-spy="scroll" data-target=".navbar">

       <!-- Brand and Navigation -->
      <header class="navbar navbar-fixed-top">
        <div class="inner-page">
          <h1 class="logo">remora</h1>
          <a class="btn-nav" data-toggle="collapse" data-target=".nav-collapse">
            <i class="icon-reorder"></i>
          </a>
          <div class="nav-collapse collapse">
            <ul class="nav navigation" id="menu">
              <li class="active"><a title="Home page" class="scroll brand-1" href="#home">Home</a></li>
              <li><a title="Check out our awesome services" href="#features" class=" scroll brand-4">Service</a></li>
              <li><a title="Who we are" href="#team" class="scroll fadeto brand-4"> Team</a></li>
              <li><a title="Get in touch!" href="#contact" class="scroll brand-2">Contact</a></li>
            </ul>
          </div> 
        </div> 
      </header>
      
      <!-- Home Page -->
      <div id="home" class="page color-1">
        <div class="inner-page">
          <h2 class="page-headline large"><strong>The Elastic Office</strong> - work in the best offices in the world</h2>
        </div>  
        <div class="row-fluid inner-page">
          <div class="span8 pull-right lazy-container">
            <img class="lazy" alt="Looks great on every device" src="assets/img/pixel.png" data-original="assets/img/key-visual.png"/>
          </div>
          <div class="span4 pull-right">
            <ul class="big-list">
              <!--<li><i class="icon-ok"></i> Flexible office</li>
              <li><i class="icon-tablet"></i> Best locations</li>
              <li><i class="icon-cloud"></i> Lorem Ipsum</li>
              <li><i class="icon-cog"></i> Lorem Ipsum</li>-->
              <li><i class="icon-map-marker"></i> Best locations</li>
              <li><i class="icon-time"></i> Save time</li>
              <li><i class="icon-money"></i> Save money</li>
            </ul>
            <br />
            <a href="#newsletter" title="Sign up now!" class="scroll btn btn-centered"><i class="icon-caret-down"></i> Sign up</a>
          </div>
        </div>
      </div>

      <!-- Newsletter -->
      <div id="newsletter" class="newsletter color-2">
        <div class="inner-page row-fluid">
          <div class="span4">
            <h4><strong>Get in touch!</strong> Sign up and we'll keep you updated</h4>
          </div>
          <div class="span6">
            <input type="email" placeholder="your@e-mail.com" name="EMAIL" class="subscribe">
          </div>
          <div class="span2">
            <button type="submit"  class="btn pull-right subscribe">Subscribe</button>
          </div>
        </div>
      </div>

      <!-- Features -->
      <div id="features" class="page color-4">
        <div class="inner-page">
          <h2 class="page-headline">Why bother searching for your own office?</h2>
        </div>

        <div class="inner-page row-fluid">
          <ul class="features list-inline">
            <li>
              <h3><img src="assets/img/icon-location.png" alt="" width="45"/> Best locations</h3>
              <p>We partnered up with several technology companies which are located at prime locations throughout Stockholm.</p>
            </li>
            <li>
              <h3><img src="assets/img/icon-clock.png" alt="" width="45"/> Save time</h3>
              <p>Never spend days searching for a new office again. When you sign up with us, you can browse hundreds of available desks inside our partner companies.</p>
            </li>
            <li>
              <h3><img src="assets/img/icon-money.png" alt="" width="45"/> Save money</h3>
              <p>Instead of renting a whole office for an extended period, you can rent a desk for a day, a week or a month. No minimum contract duration.</p>
            </li>
            </ul>
        </div>
                         
        <div class="row-fluid inner-page">
          <div class="span6 lazy-container">
            <img class="figurette lazy" src="assets/img/pixel.png" data-original="assets/img/office-2.jpg" alt="Our workspace" />
          </div>
          <div class="span6">           
            <h3>Work in the coolest offices of Stockholm</h3>
            <p class="lead">Our partner companies are looking for talented people all the time</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>  
          </div>
        </div>

        <hr>


      <!-- About page -->
      <div id="about" class="page color-4">
        <div class="inner-page">
          <h2 class="page-headline">Traditional workplaces do not fit the flexible and mobile workforce of today</h2>
        </div>
        <div class="row-fluid inner-page">
          <div class="span6  lazy-container">
              <img class="figurette lazy" src="assets/img/pixel.png" data-original="assets/img/office.jpg" alt="Our workspace" />
          </div>
          <div class="span6">
            <h3>Why remora is the better choice</h3>
            <p class="lead">It's not just about the desk – it's about exchanging ideas and knowledge as well!</p>
            <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering animata corpora quaeritis. Summus brains sit​​, morbo vel maleficia? De apocalypsi gorger omero undead survivor dictum mauris. Hi mindless mortuis soulless creaturas, imo evil stalking monstra adventus resi dentevil vultus comedat cerebella viventium.</p>
          </div>
        </div>

        <hr>

        <!-- Team -->
        <div id="team" class="row-fluid inner-page team">
          <h2 class="page-headline">remora was founded out of our own desire for a more flexible workspace</h2>
          <div class="span6">
            <img class="pull-left" src="assets/img/andrew.jpg" alt="Andrew" />
            <h4>Andrew Berezovskiy</h4>
            <p>Kiev, Ukraine</p>
            <ul>
              <li><i class="icon-envelope-alt"></i> <a href="andrew@remora.eu">andrew@remora.eu</a></li>
            </ul>
          </div>
          <div class="span6 team2">
            <img class="pull-left" src="assets/img/hendrik.jpg" alt="Hendrik" />
            <h4>Hendrik Heuer</h4>
            <p>Bremen, Germany</p>
            <ul>
              <li><i class="icon-envelope-alt"></i> <a href="hendrik@remora.eu">hendrik@remora.eu</a></li>
            </ul>
          </div>
          <div class="span6">
            <img class="pull-left" src="assets/img/irene.jpg" alt="Irene" />
            <h4>Irene Kolomvrezou</h4>
            <p>Athens, Greece</p>
            <ul>
              <li><i class="icon-envelope-alt"></i> <a href="irene@remora.eu">irene@remora.eu</a></li>
            </ul>
          </div>
          <div class="span6 team2">
            <img class="pull-left" src="assets/img/simon.jpg" alt="Simon" />
            <h4>Simon Kreiser</h4>
            <p>Cologne, Germany</p>
            <ul>
              <li><i class="icon-envelope-alt"></i> <a href="simon@remora.eu">simon@remora.eu</a></li>
            </ul>
          </div>
          <div class="span6">
            <img class="pull-left" src="assets/img/shaun.jpg" alt="Shaun" />
            <h4>Shaun Mulligan</h4>
            <p>Cape Town, South Africa</p>
            <ul>
              <li><i class="icon-envelope-alt"></i> <a href="shaun@remora.eu">shaun@remora.eu</a></li>
            </ul>
          </div>
        </div>
      </div>


      <!-- Contact Us -->
      <div id="contact" class="page color-1">
        <div class="inner-page">
          <h2 class="page-headline">Get in touch and stay updated</h2>
        </div>
        <div class="row-fluid inner-page contact">
          <div class="span6">
            <h3>What's on your mind?</h3>
            <textarea rows="6" placeholder="Your story"></textarea>
            <input type="text" placeholder="your@e-mail.com"><br />
            <input type="text" placeholder="Name"><br />
            <button class="btn btn-centered">Contact us</button>
          </div>
          <div class="span6">
            <div class="btn-container centered lazy-container text-center">
              <img src="assets/img/pixel.png" class="lazy figurette" alt="Open the map"   data-original="assets/img/map.png"/>
              <a class="lightbox iframe  btn-map" target="blank" title="Open google maps" href="https://www.google.com/maps/place/Royal+Institute+of+Technology/@59.2842991,18.0389002,11z/data=!3m1!4b1!4m2!3m1!1s0x0:0xb1366ae00b879b4a"><i class="pull-left icon-map-marker"></i><div>Valhallavägen 79,<br />100 44 Stockholm,<br />Sweden</div></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Newsletter -->
      <div class="newsletter color-2">
        <div class="inner-page row-fluid">
          <div class="span4">
            <h4><strong>Get in touch!</strong> Sign up and we'll keep you updated</h4>
          </div>
          <div class="span6">
            <input type="email" placeholder="your@e-mail.com" name="EMAIL" class="subscribe">
          </div>
          <div class="span2">
            <button type="submit"  class="btn pull-right subscribe">Subscribe</button>
          </div>
        </div>
      </div>

      <!-- The footer, social media icons, and copyright -->        
      <footer class="page color-5">
        <div class="inner-page row-fluid">
          <div class="span6 social">
            <a href="#contact"><i class="icon-twitter"></i></a>
            <a href="#contact"><i class="icon-facebook-sign"></i></a>
            <a href="#contact"><i class="icon-google-plus-sign"></i></a>
          </div>
          <div class="span6 text-right copyright">
            &copy; 2014 <a href="http://remora.eu">remora.eu</a> | all rights reserved |  <a href="#top"   title="Got to top" class="scroll">To top <i class="icon-caret-up"></i></a>
          </div>
        </div>
      </footer>

  </body>
</html>
