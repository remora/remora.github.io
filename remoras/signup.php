<?php

include 'databaseAdapter.php';

try {
    $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch(Exception $e){
    die(var_dump($e));
}

if(!empty($_POST)) { 
    try {
        $email = $_POST['email'];
        $date = date("Y-m-d");

        $sql_insert = "INSERT INTO remora_newsletter (email, date) 
                   VALUES (?,?)";
        $stmt = $conn->prepare($sql_insert);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $date);
        $stmt->execute();
    }
    catch(Exception $e) {
        die(var_dump($e));
    }
}

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
          <h2 class="page-headline large"><strong>Thank for you interest!</strong></h2>
        </div>  
      </div>

      
      <!-- Features -->
      <div class="page color-4" id="features">
        <div class="row-fluid inner-page">
            <div class="ss-form span10 offset1">
              <h2 class="page-headline">One more thing...</h2><iframe id="hidden_iframe" name=
              "hidden_iframe" style="display:none;"></iframe>

              <form action=
              "https://docs.google.com/forms/d/1UzQhr8VgCO33Fwd6crEMoQik44uqGwo26vE7HZqpV_k/formResponse"
              method="post" id="ss-form" target="hidden_iframe" onsubmit="" name="ss-form">
                <div role="list">
                  <div class="ss-form-question errorbox-good" role="listitem">
                    <div dir="ltr" class="ss-item jfk-scrollbar ss-item-required ss-radio">
                      <div class="ss-form-entry">
                        <div class="ss-q-title">
                          <label aria-hidden="true" class="ss-q-item-label" for=
                          "entry_1851294075">On what basis do you need a desk? <span class=
                          "ss-required-asterisk">*</span></label>
                        </div>

                        <div class="ss-q-help ss-secondary-text" dir="ltr"></div>

                        <ul class="ss-choices" role="radiogroup" aria-label=
                        "On what basis do you need a desk?">
                          <li class="ss-choice-item"><label><span class=
                          "ss-choice-item-control goog-inline-block"><input type="radio" name=
                          "entry.1787986140" value="Short-term (up to 3 months)" id=
                          "group_1787986140_1" role="radio" class="ss-q-radio" aria-label=
                          "Short-term (up to 3 months)" required="" aria-required="true"></span>
                          <span class="ss-choice-label">Short-term (up to 3
                          months)</span></label></li>

                          <li class="ss-choice-item"><label><span class=
                          "ss-choice-item-control goog-inline-block"><input type="radio" name=
                          "entry.1787986140" value="Long-term (more than 3 months)" id=
                          "group_1787986140_2" role="radio" class="ss-q-radio" aria-label=
                          "Long-term (more than 3 months)" required="" aria-required="true"></span>
                          <span class="ss-choice-label">Long-term (more than 3
                          months)</span></label></li>

                          <li class="ss-choice-item"><label><span class=
                          "ss-choice-item-control goog-inline-block"><input type="radio" name=
                          "entry.1787986140" value="Undecided" id="group_1787986140_3" role="radio"
                          class="ss-q-radio" aria-label="Undecided" required="" aria-required=
                          "true"></span> <span class=
                          "ss-choice-label">Undecided</span></label></li>
                        </ul>

                        <div class="error-message"></div>

                        <div class="required-message">
                          This is a required question
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="ss-form-question errorbox-good" role="listitem">
                    <div dir="ltr" class="ss-item jfk-scrollbar ss-item-required ss-radio">
                      <div class="ss-form-entry">
                        <div class="ss-q-title">
                          <label aria-hidden="true" class="ss-q-item-label" for=
                          "entry_1304883338">How often do you need a desk? <span class=
                          "ss-required-asterisk">*</span></label>
                        </div>

                        <div class="ss-q-help ss-secondary-text" dir="ltr"></div>

                        <ul class="ss-choices" role="radiogroup" aria-label=
                        "How often do you need a desk?">
                          <li class="ss-choice-item"><label><span class=
                          "ss-choice-item-control goog-inline-block"><input type="radio" name=
                          "entry.349650306" value="Few days a month" id="group_349650306_1" role=
                          "radio" class="ss-q-radio" aria-label="Few days a month" required=""
                          aria-required="true"></span> <span class="ss-choice-label">Few days a
                          month</span></label></li>

                          <li class="ss-choice-item"><label><span class=
                          "ss-choice-item-control goog-inline-block"><input type="radio" name=
                          "entry.349650306" value="Few weeks a month" id="group_349650306_2" role=
                          "radio" class="ss-q-radio" aria-label="Few weeks a month" required=""
                          aria-required="true"></span> <span class="ss-choice-label">Few weeks a
                          month</span></label></li>

                          <li class="ss-choice-item"><label><span class=
                          "ss-choice-item-control goog-inline-block"><input type="radio" name=
                          "entry.349650306" value="Full time" id="group_349650306_3" role="radio"
                          class="ss-q-radio" aria-label="Full time" required="" aria-required=
                          "true"></span> <span class="ss-choice-label">Full
                          time</span></label></li>
                        </ul>

                        <div class="error-message"></div>

                        <div class="required-message">
                          This is a required question
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="ss-form-question errorbox-good" role="listitem">
                    <div dir="ltr" class="ss-item jfk-scrollbar ss-item-required ss-radio">
                      <div class="ss-form-entry">
                        <div class="ss-q-title">
                          <label aria-hidden="true" class="ss-q-item-label" for=
                          "entry_1978892996">How many people will need a desk? <span class=
                          "ss-required-asterisk">*</span></label>
                        </div>

                        <div class="ss-q-help ss-secondary-text" dir="ltr"></div>

                        <ul class="ss-choices" role="radiogroup" aria-label=
                        "How many people will need a desk?">
                          <li class="ss-choice-item"><label><span class=
                          "ss-choice-item-control goog-inline-block"><input type="radio" name=
                          "entry.1055062916" value="1 person" id="group_1055062916_1" role="radio"
                          class="ss-q-radio" aria-label="1 person" required="" aria-required=
                          "true"></span> <span class="ss-choice-label">1 person</span></label></li>

                          <li class="ss-choice-item"><label><span class=
                          "ss-choice-item-control goog-inline-block"><input type="radio" name=
                          "entry.1055062916" value="2 to 4 people" id="group_1055062916_2" role=
                          "radio" class="ss-q-radio" aria-label="2 to 4 people" required=""
                          aria-required="true"></span> <span class="ss-choice-label">2 to 4
                          people</span></label></li>

                          <li class="ss-choice-item"><label><span class=
                          "ss-choice-item-control goog-inline-block"><input type="radio" name=
                          "entry.1055062916" value="5 to 10 people" id="group_1055062916_3" role=
                          "radio" class="ss-q-radio" aria-label="5 to 10 people" required=""
                          aria-required="true"></span> <span class="ss-choice-label">5 to 10
                          people</span></label></li>

                          <li class="ss-choice-item"><label><span class=
                          "ss-choice-item-control goog-inline-block"><input type="radio" name=
                          "entry.1055062916" value="More than 10 people" id="group_1055062916_4"
                          role="radio" class="ss-q-radio" aria-label="More than 10 people"
                          required="" aria-required="true"></span> <span class=
                          "ss-choice-label">More than 10 people</span></label></li>
                        </ul>

                        <div class="error-message"></div>

                        <div class="required-message">
                          This is a required question
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="ss-form-question errorbox-good" role="listitem">
                    <div dir="ltr" class="ss-item jfk-scrollbar ss-checkbox">
                      <div class="ss-form-entry">
                        <div class="ss-q-title">
                          <label aria-hidden="true" class="ss-q-item-label" for=
                          "entry_2093778184">What other cities than Stockholm would you be
                          interested in?</label>
                        </div>

                        <div class="ss-q-help ss-secondary-text" dir="ltr"></div>

                        <ul class="ss-choices" role="group" aria-label=
                        "What other cities than Stockholm would you be interested in?">
                          <li class="ss-choice-item"><label><span class=
                          "ss-choice-item-control goog-inline-block"><input type="checkbox" name=
                          "entry.587939779" value="Only Stockholm" id="group_587939779_1" role=
                          "checkbox" class="ss-q-checkbox"></span> <span class=
                          "ss-choice-label">Only Stockholm</span></label></li>

                          <li class="ss-choice-item"><label><span class=
                          "ss-choice-item-control goog-inline-block"><input type="checkbox" name=
                          "entry.587939779" value="Berlin" id="group_587939779_2" role="checkbox"
                          class="ss-q-checkbox"></span> <span class=
                          "ss-choice-label">Berlin</span></label></li>

                          <li class="ss-choice-item"><label><span class=
                          "ss-choice-item-control goog-inline-block"><input type="checkbox" name=
                          "entry.587939779" value="London" id="group_587939779_3" role="checkbox"
                          class="ss-q-checkbox"></span> <span class=
                          "ss-choice-label">London</span></label></li>

                          <li class="ss-choice-item"><label><span class=
                          "ss-choice-item-control goog-inline-block"><input type="checkbox" name=
                          "entry.587939779" value="Paris" id="group_587939779_4" role="checkbox"
                          class="ss-q-checkbox"></span> <span class=
                          "ss-choice-label">Paris</span></label></li>

                          <li class="ss-choice-item"><label><span class=
                          "ss-choice-item-control goog-inline-block"><input type="checkbox" name=
                          "entry.587939779" value="Amsterdam" id="group_587939779_5" role=
                          "checkbox" class="ss-q-checkbox"></span> <span class=
                          "ss-choice-label">Amsterdam</span></label></li>

                          <li class="ss-choice-item"><label><span class=
                          "ss-choice-item-control goog-inline-block"><input type="checkbox" name=
                          "entry.587939779" value="Helsinki" id="group_587939779_6" role="checkbox"
                          class="ss-q-checkbox"></span> <span class=
                          "ss-choice-label">Helsinki</span></label></li>

                          <li class="ss-choice-item"><label><span class=
                          "ss-choice-item-control goog-inline-block"><input type="checkbox" name=
                          "entry.587939779" value="__other_option__" id="group_587939779_7" role=
                          "checkbox" class="ss-q-checkbox ss-q-other-toggle"></span> Other:</label>
                          <span class="ss-q-other-container goog-inline-block"><input type="text"
                          name="entry.587939779.other_option_response" value="" class="ss-q-other"
                          id="entry_587939779_other_option_response" dir="auto" aria-label=
                          "Other"></span></li>
                        </ul>

                        <div class="error-message"></div>

                        <div class="required-message">
                          This is a required question
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="ss-form-question errorbox-good" role="listitem">
                    <div dir="ltr" class="ss-item jfk-scrollbar ss-paragraph-text">
                      <div class="ss-form-entry">
                        <div class="ss-q-title">
                          <label aria-hidden="true" class="ss-q-item-label" for=
                          "entry_189707643">Questions or comments</label>
                        </div>

                        <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                        <textarea name="entry.189707643" rows="8" cols="0" class="ss-q-long" id=
                        "entry_189707643" dir="auto" aria-label="Questions or comments">
          </textarea>

                        <div class="error-message"></div>

                        <div class="required-message">
                          This is a required question
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="ss-form-question errorbox-good" role="listitem">
                    <div dir="ltr" class="ss-item jfk-scrollbar ss-text">
                      <div class="ss-form-entry">
                        <div class="ss-q-help ss-secondary-text" dir="ltr"></div><input type="hidden"
                        name="entry.1813668312" value="<?= $email; ?>" class="ss-q-short" id="entry_1813668312"
                        dir="auto" aria-label="Email" title="">

                        <div class="error-message"></div>

                        <div class="required-message">
                          This is a required question
                        </div>
                      </div>
                    </div>
                  </div><input type="hidden" name="draftResponse" value=
                  "[,,&quot;2079010841267190689&quot;] "> <input type="hidden" name="pageHistory"
                  value="0"> <input type="hidden" name="fromEmail" value="false"> <input type=
                  "hidden" name="fbzx" value="2079010841267190689">

                  <div class="ss-item ss-navigate">
                    <table id="navigation-table">
                      <tbody>
                        <tr>
                          <td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir=
                          "ltr">
                            <input type="submit" name="submit" value="Submit" id="ss-submit">

                            <div class="ss-password-warning ss-secondary-text">
                              Never submit passwords through Google Forms.
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </form>
            </div>

            <div id="thanks" style="display: none;" class="row-fluid inner-page">
                <div class="span10">
                  <h2>Thank you for your feedback.</h2>

                  <p>If you want to know more, feel free to drop any of us a line using the addresses listed below.</p>
                </div>
            </div>
          </div>
        </div>
        <hr>

        <!-- Team -->
        <!-- <div id="team" class="row-fluid inner-page team color-4">
          <h2 class="page-headline">remora was founded out of our own desire for a more flexible workspace</h2>
          <div class="span6">
            <img class="pull-left" src="assets/img/andrew.jpg" alt="Andrew" />
            <h4>Andrew Berezovskiy</h4>
            <p>Kiev, Ukraine</p>
            <ul>
              <li><a href="mailto:andriib@kth.se"><i class="icon-envelope-alt"></i>&nbsp;andriib@kth.se</a></li>
            </ul>
          </div>
          <div class="span6 team2">
            <img class="pull-left" src="assets/img/hendrik.jpg" alt="Hendrik" />
            <h4>Hendrik Heuer</h4>
            <p>Bremen, Germany</p>
            <ul>
              <li><a href="mailto:hendrikh@kth.se"><i class="icon-envelope-alt"></i>&nbsp;hendrikh@kth.se</a></li>
            </ul>
          </div>
          <div class="span6">
            <img class="pull-left" src="assets/img/irene.jpg" alt="Irene" />
            <h4>Irene Kolomvrezou</h4>
            <p>Athens, Greece</p>
            <ul>
              <li><a href="mailto:eirinik@kth.se"><i class="icon-envelope-alt"></i>&nbsp;eirinik@kth.se</a></li>
            </ul>
          </div>
          <div class="span6 team2">
            <img class="pull-left" src="assets/img/simon.jpg" alt="Simon" />
            <h4>Simon Kreiser</h4>
            <p>Cologne, Germany</p>
            <ul>
              <li><a href="mailto:kreiser@kth.se"><i class="icon-envelope-alt"></i>&nbsp;kreiser@kth.se</a></li>
            </ul>
          </div>
          <div class="span6">
            <img class="pull-left" src="assets/img/shaun.jpg" alt="Shaun" />
            <h4>Shaun Mulligan</h4>
            <p>Cape Town, South Africa</p>
            <ul>
              <li><a href="shaunmu@kth.se"><i class="icon-envelope-alt"></i>&nbsp;shaunmu@kth.se</a></li>
            </ul>
          </div>
        </div> -->
        <div class="row-fluid inner-page">
          <div class="span6 team2">
            <p>
              <a href="index.html" class="btn color-2">&larr; Back</a>
            </p>
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
          <form action="signup.php" method="post">
            <div class="span6">
              <input type="email" placeholder="your@e-mail.com" name="EMAIL" class="subscribe">
            </div>
            <div class="span2">
              <button type="submit"  class="btn pull-right subscribe">Subscribe</button>
            </div>
          </form>
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

  <script type="text/javascript">
    function formSubmitted() {
      $(".ss-form").hide();
      $("#thanks").show();
    }
    jQuery(document).ready(function($) {
      $("#hidden_iframe").load(function() {
        $(".ss-form").hide();
        $("#thanks").show();
      });
    });
  </script>

  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-38376204-5']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
  </body>
</html>
