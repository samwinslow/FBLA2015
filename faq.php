<?php

if (isset($_COOKIE['cyclefitness_email'])){
  $signedin = true;
  $signin_email = $_COOKIE['cyclefitness_email'];
  $signin_password = $_COOKIE['cyclefitness_password'];

  // Connect to server and select databse.
  mysql_connect("localhost", "root", "password") or die("cannot connect"); 
  mysql_select_db("cyclefitness") or die("cannot select DB");
  $result = mysql_query("SELECT * FROM users WHERE email_address = '".$signin_email."' and password = '".$signin_password."';");
  mysql_close();

  $users = array();
  while ($row = mysql_fetch_array($result)) {
    array_push($users, $row);
  }
  $user = $users[0];
}
if (isset($_GET['error'])){
  $page_error = $_GET['error'];
}

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Cycle Fitness</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="stylesheet" href="res/css/FBLA2015.min.css">
  <link rel="stylesheet" href="res/css/fonts.css">
  <script src="res/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
  <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">
            <img class="logo" alt="Cycle Fitness" src="res/img/logos/logo-white.png" title="Cycle Fitness">
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="bikes.php">Bikes</a></li>
            <li><a href="trips.php">Trips</a></li>
            <li><a href="seminars.php">Seminars</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="cart-li dropdown">
              <a href="#" data-toggle="dropdown" aria-expanded="false">
                <span class="badge">3</span> <span class="cart-money">$200</span></a>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li class="cart-number">
                  <span class="text-orange">3</span> items in your cart
                </li>
                <li class="">
                  <a href="#">Item 1</a>
                </li>
                <li class="">
                  <a href="#">Item 2</a>
                </li>
              </ul>
            </li>
            <?php if($signedin){ ?>
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" aria-expanded="false" style="color:#fff;">
                  <?php echo($user['first_name']." ".$user['last_name']); ?>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li class="">
                    <a href="mysql-admin/signout-user.php">Sign Out</a>
                  </li>
                </ul>
              </li>
            <?php } else { ?>
              <li><a href="#" style="color:#fff;" data-toggle="modal" data-target="#signinModal">Log In / Sign Up</a></li>
            <?php } ?>
          </ul>
        </div><!--/.navbar-collapse -->
  </nav>
  
  <!-- Modal -->
  <div class="modal fade" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="signinModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="col-md-7 gray-section">
            <h2>Register</h2>
            <form action="">
              <div class="col-md-6">
                <input type="text" class="form-control" id="registerFirstName" placeholder="FIRST NAME" required="">
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" id="registerLastName" placeholder="LAST NAME" required="">
              </div>
              <input type="email" class="form-control" id="registerEmail" placeholder="EMAIL ADDRESS" required="">
              <input type="password" class="form-control" id="registerPassword" placeholder="PASSWORD" required="">
              <p class="text-right"><button type="submit" class="btn btn-success btn-lg" role="button">Sign Up</button></p>
            </form>
          </div>
          <div class="col-md-5">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h2>Login</h2>
            <form action="">
              <input type="email" class="form-control" id="signinEmail" placeholder="EMAIL ADDRESS" required="">
              <input type="password" class="form-control" id="signinPassword" placeholder="PASSWORD" required="">
              <p><button type="submit" class="btn btn-success btn-ghost btn-lg small-chevron" role="button">
                Log In <span class="chevron-right chevron-orange"></span>
              </button></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Jumbotron -->
  <div class="jumbotron nhp-header faq-header">
    <h1>FAQs</h1>
    <p>Here are a list of frequently asked questions. Still can’t find what you’re looking for? <br> We’re always happy to help out. Drop us a message anytime through our <a href="contact.html"><u>contact form</u></a>.</p>
  </div><!--/Jumbotron -->
  
  <div class="container">   
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel-group" id="accordion-cat-1">
          <div class="panel panel-default panel-faq">
            <div class="panel-heading">
              <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-1">
                <h3 class="panel-title">
                  What year was my frame built?
                  <span class="pull-right panel-action"><img src="res/img/icons/panel-plus.png"></span>
                </h3>
              </a>
            </div>
            <div id="faq-cat-1-sub-1" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
        </div>

        <div class="panel-group" id="accordion-cat-2">
          <div class="panel panel-default panel-faq">
            <div class="panel-heading">
              <a data-toggle="collapse" data-parent="#accordion-cat-2" href="#faq-cat-2-sub-2">
                <h3 class="panel-title">
                  Do you have touch-up paint?
                  <span class="pull-right panel-action"><img src="res/img/icons/panel-plus.png"></span>
                </h3>
              </a>
            </div>
            <div id="faq-cat-2-sub-2" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
        </div>

        <div class="panel-group" id="accordion-cat-3">
          <div class="panel panel-default panel-faq">
            <div class="panel-heading">
              <a data-toggle="collapse" data-parent="#accordion-cat-3" href="#faq-cat-3-sub-3">
                <h3 class="panel-title">
                  How do I contact you?
                  <span class="pull-right panel-action"><img src="res/img/icons/panel-plus.png"></span>
                </h3>
              </a>
            </div>
            <div id="faq-cat-3-sub-3" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
        </div>

        <div class="panel-group" id="accordion-cat-4">
          <div class="panel panel-default panel-faq">
            <div class="panel-heading">
              <a data-toggle="collapse" data-parent="#accordion-cat-4" href="#faq-cat-4-sub-4">
                <h3 class="panel-title">
                  What types of bikes do you sell?
                  <span class="pull-right panel-action"><img src="res/img/icons/panel-plus.png"></span>
                </h3>
              </a>
            </div>
            <div id="faq-cat-4-sub-4" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 4 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 4 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
        </div>

        <div class="panel-group" id="accordion-cat-5">
          <div class="panel panel-default panel-faq">
            <div class="panel-heading">
              <a data-toggle="collapse" data-parent="#accordion-cat-5" href="#faq-cat-5-sub-5">
                <h3 class="panel-title">
                  Do you make bikes, or do you resell?
                  <span class="pull-right panel-action"><img src="res/img/icons/panel-plus.png"></span>
                </h3>
              </a>
            </div>
            <div id="faq-cat-5-sub-5" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 5 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 5 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
        </div>

        <div class="panel-group" id="accordion-cat-6">
          <div class="panel panel-default panel-faq">
            <div class="panel-heading">
              <a data-toggle="collapse" data-parent="#accordion-cat-6" href="#faq-cat-6-sub-6">
                <h3 class="panel-title">
                  Are there any discounts for large purchases?
                  <span class="pull-right panel-action"><img src="res/img/icons/panel-plus.png"></span>
                </h3>
              </a>
            </div>
            <div id="faq-cat-6-sub-6" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 6 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 6 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
        </div>

        <div class="panel-group" id="accordion-cat-7">
          <div class="panel panel-default panel-faq">
            <div class="panel-heading">
              <a data-toggle="collapse" data-parent="#accordion-cat-7" href="#faq-cat-7-sub-7">
                <h3 class="panel-title">
                  Do you over bike repair?
                  <span class="pull-right panel-action"><img src="res/img/icons/panel-plus.png"></span>
                </h3>
              </a>
            </div>
            <div id="faq-cat-7-sub-7" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 7 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 7 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
        </div>

        <div class="panel-group" id="accordion-cat-8">
          <div class="panel panel-default panel-faq">
            <div class="panel-heading">
              <a data-toggle="collapse" data-parent="#accordion-cat-8" href="#faq-cat-8-sub-8">
                <h3 class="panel-title">
                  How much do you charge for shipping?
                  <span class="pull-right panel-action"><img src="res/img/icons/panel-plus.png"></span>
                </h3>
              </a>
            </div>
            <div id="faq-cat-8-sub-8" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 8 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 8 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
        </div>

        <div class="panel-group" id="accordion-cat-9">
          <div class="panel panel-default panel-faq">
            <div class="panel-heading">
              <a data-toggle="collapse" data-parent="#accordion-cat-9" href="#faq-cat-9-sub-9">
                <h3 class="panel-title">
                  There’s something wrong with my bike. Can I get a refund?
                  <span class="pull-right panel-action"><img src="res/img/icons/panel-plus.png"></span>
                </h3>
              </a>
            </div>
            <div id="faq-cat-9-sub-9" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 9 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 9 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
        </div>

        <div class="panel-group" id="accordion-cat-10">
          <div class="panel panel-default panel-faq">
            <div class="panel-heading">
              <a data-toggle="collapse" data-parent="#accordion-cat-10" href="#faq-cat-10-sub-10">
                <h3 class="panel-title">
                  Does Cycle Fitness offer sponsorships?
                  <span class="pull-right panel-action"><img src="res/img/icons/panel-plus.png"></span>
                </h3>
              </a>
            </div>
            <div id="faq-cat-10-sub-10" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 10 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 10 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
        </div>

        <div class="panel-group" id="accordion-cat-11">
          <div class="panel panel-default panel-faq">
            <div class="panel-heading">
              <a data-toggle="collapse" data-parent="#accordion-cat-11" href="#faq-cat-11-sub-11">
                <h3 class="panel-title">
                  What kind of bike do I need?
                  <span class="pull-right panel-action"><img src="res/img/icons/panel-plus.png"></span>
                </h3>
              </a>
            </div>
            <div id="faq-cat-11-sub-11" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 11 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 11 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
        </div>

        <div class="panel-group" id="accordion-cat-12">
          <div class="panel panel-default panel-faq" style="border: 0px;">
            <div class="panel-heading">
              <a data-toggle="collapse" data-parent="#accordion-cat-12" href="#faq-cat-12-sub-12">
                <h3 class="panel-title">
                  My bike doesn’t have a manual. Can I get one from you?
                  <span class="pull-right panel-action"><img src="res/img/icons/panel-plus.png"></span>
                </h3>
              </a>
            </div>
            <div id="faq-cat-12-sub-12" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 12 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 12 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
        </div>

      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
</div>

<footer>
    <div class="col-md-2">
      <img class="logo" alt="Cycle Fitness" src="res/img/logos/logo-white.png" title="Cycle Fitness" style="-webkit-filter: invert(1);">
    </div>
    <div class="col-md-2">
      <ul class="icon-truck">
        <li>FREE shipping on all orders</li>
      </ul>
      <ul class="icon-creditcard">
        <li>30 days money back guarantee</li>
      </ul>
    </div>
    <div class="col-md-2">
      <p>We accept</p>
      <p>
        <img class="credit-card" alt="PayPal" title="PayPal" src="res/img/icons/cc-paypal.png">
        <img class="credit-card" alt="Visa" title="Visa" src="res/img/icons/cc-visa.png">
        <img class="credit-card" alt="MasterCard" title="MasterCard" src="res/img/icons/cc-mastercard.png">
        <img class="credit-card" alt="American Express" title="American Express" src="res/img/icons/cc-amex.png">
        <img class="credit-card" alt="Chase Cards" title="Chase Cards" src="res/img/icons/cc-chase.png">
      </p>
    </div>
    <div class="col-md-3">
      <p>Get all the latest updates and discounts</p>
      <div class="input-group">
        <input type="email" class="form-control" id="signupEmail" placeholder="Your email address" width="24">
        <span class="input-group-btn">
          <button class="btn btn-form" id="signupButton" type="button">
            <img alt="Sign up" title="Sign up" src="res/img/icons/arrow-right-black.png">
          </button>
        </span>
      </div>
    </div>
    <div class="col-md-2 col-md-offset-1">
      <p>Connect with us</p>
      <p>
        <a href="http://facebook.com"><img class="social" alt="Facebook" title="Facebook" src="res/img/icons/facebook.png"></a>
        <a href="http://twitter.com"><img class="social" alt="Twitter" title="Twitter" src="res/img/icons/twitter.png"></a>
        <a href="http://instagram.com"><img class="social" alt="Instagram" title="Instagram" src="res/img/icons/instagram.png"></a>
        <a href="http://youtube.com"><img class="social" alt="YouTube" title="YouTube" src="res/img/icons/youtube.png"></a>
      </p>
    </div>
    <div class="col-md-12">
      <p class="footer-text">Copyright 2015 Cycle Fitness. Created by Andrew Shen and Samuel Winslow. No templates used. <a href="reference.html">Reference Page</a></p>
    </div>
  </footer>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="res/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
  <script src="res/js/vendor/bootstrap.min.js"></script><script src="res/js/vendor/jquery.easing.min.js"></script>
  <script src="res/js/main.js"></script>
  </body>
</html>