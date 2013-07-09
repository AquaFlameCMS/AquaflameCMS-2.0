<!DOCTYPE html>
<!--[if lt IE 7]>         <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>           <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>           <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html>
<head>
        <meta charset="utf-8">
        <title>AquaFlameCMS Frontpage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A wow private server made with AquaFlameCMS">
        <meta name="author" content="AquaFlameCMS">
   
        <!-- Le styles -->
        <link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/main.css" rel="stylesheet" type="text/css">
   
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
   
        <!-- Le javascripts -->
        <script src="assets/javascript/jquery.min.js"></script>
        <script src="assets/javascript/jquery.flexslider.min.js"></script>
        <script src="assets/javascript/bootstrap.min.js"></script>
        <script src="assets/javascript/global.js"></script>
        <script src="assets/javascript/login.js"></script>
        <script src="assets/javascript/register.js"></script>
</head>
<body>
<div id="wrapper">
<header id="main_header" class="clearfix">
         <div id="topbar">
                 <nav>
                         <a class="home" href=""><img src="assets/images/topbar-home.png" alt=""><span>Home</span></a></li>
                                <p><a data-toggle="modal" href="#loginframe">Login</a> or <a data-toggle="modal" href="#registerframe">Create Account</a></p>   <div class="modal hide" id="logoutframe">
                                 <button type="button" class="close" data-dismiss="modal">&#215;</button>
                                        <div class="modal-body">
         <p><center>Are you sure you want to Logout?</center></p>
         <p><center><a href="#" class="lbutton" type="button" id="logoutYes">Yes</a>or<a href="#" type="button" class="closebutton" data-dismiss="modal">No</a></center></p>
                                        </div>
                                </div>
                                <div class="modal hide" id="loginframe">
                                 <button type="button" class="close" data-dismiss="modal">&#215;</button>
                                        <div class="modal-body">
         <h1>Flame.Net</h1>
                                         <form>
          <p>
                                                        <label class="text">Username</label>
                                                        <input class="input" value="" id="accountName" maxlength="320" type="text" tabindex="1" placeholder="Username">
          </p>
          <p>
                                                        <label class="text">Password</label>
                                                        <input class="input" type="password" class="span3" placeholder="Password" id="accountPassword"/>
         
                                                        <label class="checkbox">
                                                        <input type="checkbox"> Keep me logged in
                                                        </label>
         
                                                        <center><a id="loginSubmit" href="#" class="login-btn">Login</a></center></p>
                                                </form>
                                                <ul>
                                                 <p><li><a href="">Can't log in?</a></li></p>
                                                        <li>Learn how to <a href="">protect your account!</a></li>
                                                        <p><li>Dont have an account yet? <a href="">Sign up now!</a></li></p>
          
                                                </ul>
                                        </div>
                                </div>
        <div class="modal hide" id="registerframe">
                                 <button type="button" class="close" data-dismiss="modal">&#215;</button>
                                        <div class="modal-body">
                                         <form>
          <p>
                                                        <label class="text">Username</label>
                                                        <input class="input" type="text" class="span3" placeholder="Username" id="registerUsername">
          </p>
                                                <p>
                                                        <label class="text">E-Mail</label>
                                                        <input class="input" type="text" class="span3" placeholder="E-Mail" id="registerEmail">
          </p>
          <p>
                                                        <label class="text">Password</label>
                                                        <input class="input" type="password" class="span3" placeholder="Password" id="registerPassword">
          </p>
          <p>
           <label class="text">Confirm Password</label>
                                                        <input class="input" type="password" class="span3" placeholder="Confirm Password" id="registerPasswordConfirm">
           <label class="checkbox">
                                                        <input type="checkbox" id="registerAcceptRules"> I accept the <a href="#">Terms of Use</a> applicable to my country of residence and if under 18 years old, agree and acknowledge that my parent or guardian has also reviewed and accepted the Terms of Use on my behalf.
                                                        </label>
          </p>
                                                        <center><a href="#" class="login-btn-c" id="registerSubmit">Create Account</a></center>
                                                </form>
                                                <ul>
                                                 <p><li><a href="">Got Problems with Registering?</a></li></p>
                                                        <li>Under 18 Years old? <a href="">Sign up with your Parent!</a></li>
                                                </ul>
                                        </div>
                                </div>
                                <ul class="pull-right">
                                 <li><a class="account" href="">Account</a></li>
                                        <li><a class="support" href="">Support</a></li>
                                        <li><a class="explore" href="">Explore</a></li>
                                </ul>
                        </nav>
                </div>
         <div id="logo">
                </div>
                <div id="searchbar">
                 <form>
                         <input placeholder="Search characters, items, forums and more..." type="text">
                        </form>
                </div>
        </header>
   
        <div id="content" class="clearfix">
                <div id="main">
                 <div id="main_navigation">
                         <nav>
                                 <ul>
                                         <li><a class="home" href=""><span>Home</span></a></li>
                                                <li><a class="media" href=""><span>Media</span></a></li>
                                                <li><a class="community" href=""><span>Community</span></a></li>
                                                <li><a class="status" href=""><span>Status</span></a></li>
                                                <li><a class="forums" href=""><span>Forums</span></a></li>
                                                <li><a class="services" href=""><span>Services</span></a></li>
                                        </ul>
                                </nav>
                        </div>
                        <div id="main_content">
   <div id="services">
   <div class="section-title">
        <span>World of Warcraft Account Services</span>
        <p>Use the account services available for World of Warcraft to easily upgrade your game and access a number of additional account options.</p>
   </div>
   <div class="main-services">
        <a href="#" class="main-services-banner left-bnr" style="background-image:url('#');">
        <span class="banner-title">Buy &amp; Subscribe</span>
        <span class="banner-desc">Learn more about WoW, its expansions and the various subscriptions and payment methods.</span>
        </a>
        <a href="#" class="main-services-banner right-bnr" style="background-image:url('#');">
        <span class="banner-title">Scroll of Resurrection</span>
        <span class="banner-desc">Get an Exclusive Faction Mount when you bring a friend back to World of Warcraft.</span>
        </a>
        <a href="#" class="main-services-banner left-bnr" style="background-image:url('#');">
        <span class="banner-title">WoW Mobile Armory</span>
        <span class="banner-desc">Browse the World of Warcraft Armory from anywhere with your phone!</span>
        </a>
        <a href="#" class="main-services-banner right-bnr" style="background-image:url('#');">
        <span class="banner-title">Recruit a Friend</span>
        <span class="banner-desc">Earn epic rewards for each friend you recruit to play World of Warcraft.</span>
        </a>
        <a href="#" class="main-services-banner left-bnr" style="background-image:url('#');">
        <span class="banner-title">Blizzard Store</span>
        <span class="banner-desc">Visit the Blizzard store and check out World of Warcraft gaming peripherals, comics, and much more!</span>
        </a>
        <a href="#" class="main-services-banner right-bnr" style="background-image:url('#');">
        <span class="banner-title">Support</span>
        <span class="banner-desc">Find information, assistance, and solutions for common issues on our support website</span>
        </a>
        <span class="clear"><!-- --></span>
   </div>
   </div>
   <!-- /main_content -->
   </div>
                </div>   
        <div id="sidebar">
                 <div id="user_control">
                         <a data-toggle="modal" href="#loginframe">
                                        <div id="user_control_deco">
                                                <!-- -->
                                        </div>
                                        <p><span>Log in now</span> to enhance and<br>personalize your experience!</p>
                                </a>
                        </div>
                        <div id="sidebar_content" class="clearfix">
                         <div class="sub-services-section">
                <div class="sub-title">
                 <span>CHARACTER SERVICES</span>
                </div>
                <ul>
                   <li>
                        <a href="#" class="character-transfer">
                         <span>Character Transfer</span>
                        </a>
                   </li>
                   <li>
                        <a href="#" class="character-name-change">
                         <span>Name Change</span>
                        </a>
                   </li>
                   <li>
                        <a href="#" class="character-race-change">
                         <span>Race Change</span>
                        </a>
                   </li>
                   <li>
                        <a href="#" class="character-faction-change">
                         <span>Faction Change</span>
                        </a>
                   </li>
                   <li>
                        <a href="#" class="character-customization">
                         <span>Appearance Change</span>
                        </a>
                   </li>
                   <li>
                        <a href="#" class="character-free-move">
                         <span>Free Character Migration</span>
                        </a>
                   </li>
                   <li>
                        <a href="#" class="character-ptr">
                         <span>Public Test Realm</span>
                        </a>
                   </li>
                   <li>
                        <a href="#" class="character-item-restoration">
                         <span>Item Restoration</span>
                        </a>
                   </li>
                </ul>
           </div>
           <div class="sub-services-section">
                <div class="sub-title">
                 <span>OTHER SERVICES AND PROMOTIONS</span>
                </div>
                <ul>
                   <li>
                        <a href="#" class="etc-raf">
                         <span>Recruit-A-Friend</span>
                        </a>
                   </li>
                   <li>
                        <a href="#" class="etc-sor">
                         <span>Scroll of Resurrection</span>
                        </a>
                   </li>
                   <li>
                        <a href="#" class="etc-mobile-armory">
                         <span>WoW Mobile Armory</span>
                        </a>
                   </li>
                   <li>
                        <a href="#" class="etc-anti-gold">
                         <span>Impact of Buying Gold</span>
                        </a>
                   </li>
                </ul>
           </div>
           <div class="sub-services-section">
                <div class="sub-title">
                 <span>Account Services</span>
                </div>
                <ul>
                   <li>
                        <a href="#" class="account-security">
                         <span>Account Security</span>
                        </a>
                   </li>
                   <li>
                        <a href="#" class="account-recovery">
                         <span>Account Recovery</span>
                        </a>
                   </li>
                   <li>
                        <a href="#" class="account-authenticator">
                         <span>Add an Authenticator</span>
                        </a>
                   </li>
                   <li>
                        <a href="#" class="account-authenticator-faq">
                         <span>Authenticator FAQ</span>
                        </a>
                   </li>
                </ul>
           </div>
           <div class="sub-services-section">
                <div class="sub-title">
                 <span>GET WORLD OF WARCRAFT</span>
                </div>
                <ul>
                   <li>
                        <a href="#" class="get-wow-buy">
                         <span>Buy World of Warcraft</span>
                        </a>
                   </li>
                   <li>
                        <a href="#" class="get-wow-gift">
                         <span>Gift World of Warcraft</span>
                        </a>
                   </li>
                   <li>
                        <a href="#" class="get-wow-free-trial">
                         <span>Free Starter Edition</span>
                        </a>
                   </li>
                   <li>
                        <a href="#" class="get-wow-online-digital">
                         <span>Online Digital Upgrade</span>
                        </a>
                   </li>
                </ul>
           </div>
           <br><br><br><br>
                                        <footer><!-- --></footer>
                                </section>
                        </div>
                </div>
        </div>
        <footer>
         <div id="lower_nav" class="clearfix">
                 <nav>
                         <ul>
                                 <li class="header">AquaFlame Home</li>
                                 <li><a href="">Whats AquaFlame?</a></li>
                                        <li><a href="">Donate for us</a></li>
                                        <li><a href="">Account Panel</a></li>
                                        <li><a href="">Support</a></li>
                                        <li><a href="">Make free account</a></li>
                                </ul>
                        </nav>
                        <nav>
                         <ul>
                                 <li class="header">Account</li>
                                 <li><a href="">Forgot Password?</a></li>
                                        <li><a href="">Go Premium/Vip</a></li>
                                        <li><a href="">Forum User CP</a></li>
                                        <li><a href="">Game User CP</a></li>
                                        <li><a href="">Report Abuse</a></li>
                                </ul>
                        </nav>
                        <nav>
                         <ul>
                                 <li class="header">Support</li>
                                 <li><a href="">OMFG I got hacked</a></li>
                                        <li><a href="">Banned, why?</a></li>
                                        <li><a href="">Forums</a></li>
                                        <li><a href="">FAQ</a></li>
                                        <li><a href="">Rules</a></li>
                                </ul>
                        </nav>
                        <div id="logos">
                         <a href=""><span>AquaFlameCMS</span></a>
                                <a class="id820" href=""><span>ID820</span></a>
                        </div>
                </div>
         <div id="credits">
                 <nav class="pull-right">
                         <ul>
                                 <li><a href="">Terms of Use</a></li>
                                        <li><a href="">Legal</a></li>
                                        <li><a href="">Privacy Policy</a></li>
                                </ul>
                        </nav>
                 &copy; 2012 AquaFlame, INC. All rights reserved
                </div>
        </footer>
</div>
</body>
</html>