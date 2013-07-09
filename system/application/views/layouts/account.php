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
        <link href="http://localhost/assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="http://localhost/assets/stylesheets/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
        <link href="http://localhost/assets/stylesheets/main.css" rel="stylesheet" type="text/css">
        <link href="http://localhost/assets/stylesheets/account.css" rel="stylesheet" type="text/css">
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
   
        <!-- Le javascripts -->
        <script type="text/javascript"> window.baseUrl = "http://localhost/";</script>
        <script src="http://localhost/assets/javascript/jquery.min.js"></script>
        <script src="http://localhost/assets/javascript/jquery.flexslider.min.js"></script>
        <script src="http://localhost/assets/javascript/bootstrap.min.js"></script>
        <script src="http://localhost/assets/javascript/global.js"></script>
        <script src="http://localhost/assets/javascript/login.js"></script>
        <script src="http://localhost/assets/javascript/register.js"></script>
</head>
<body>
<div id="wrapper">
<header id="main_header" class="clearfix">
         <div id="topbar">
                 <nav>
                         <a class="home" href="http://localhost/#"><img src="http://localhost/assets/images/topbar-home.png" alt=""><span>Home</span></a></li>
                                <p>Welcome, failzord | <a data-toggle="modal" href="#logoutframe">Logout</a></p>        <div class="modal hide" id="logoutframe">
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
                                                 <p><li><a href="">Got Problems with Registering?</a></li><p>
                                                        <li>Learn how to <a href="">protect your account!</a></li>
                                                        </p>
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
                        <div class="container_2 account" align="center">
         <div class="cont-image">
        
                           
         <!-- Main Account info -->
                <div class="container_3 account_light_cont" align="left">
                 <div class="account_info" align="left">
                 
                   
                 <ul class="account_avatar">
                   <li class="avatar"><span style="background:url(../assets/images/misc/avatar.jpg) no-repeat; background-size: 100%;"></span></li>
                         <li class="change_avatar"><a href="#">(Click to change)</a></li>
                  </ul>
  
                  <ul class="account_info_main">
                         <li id="displayname"><span>Display name:</span><p>FailZorD</p></li>
                         <li><span>Username:</span><p>FailZorD</p></li>
                         <li><span>Email:</span><p>alexfred@live.com</p></li>
                         <li><span>Gold Coins:</span><p>10</p></li>
                         <li><span>Silver Coins:</span><p>0</p></li>
                         <li><span>Messages:</span><p><a href="#">0</a></p></li>
                  </ul>
                   
                        <ul class="account_info_second">
        <li><span>Referred members:</span><p><a href="#">0</a></p></li>
                          <br>
        <li><span>Last login:</span><p>2012-12-04 15:31:05</p></li>
        <li><span>Last IP Address:</span><p>79.114.10.95</p></li>
                          <br>
        <li><span>Registration date:</span><p>2012-09-13 23:02:46</p></li>
                        </ul>              
                 </div>
                </div>
                <!-- Main Account info.End -->
           
                           
                <!-- Main Account menu -->
                <ul class="accoun-panel-menu">
           
                 <li>
                         <a href="#">
                                 <div id="icon" class="store"></div>
                                 <span>
                                  <p>Store</p>
                                  Spend your coins here.
                                 </span>
                         </a>
                        </li>
                   
                        <li>
                         <a href="#">
                                 <div id="icon" class="vote"></div>
                                 <span>
                                  <p>Vote</p>
                                  Vote for us and earn silver coins.
                                 </span>
                         </a>
                        </li>
                   
                        <li>
                         <a href="#">
                                 <div id="icon" class="b-coins"></div>
                                 <span>
                                  <p>Buy Coins</p>
                                  Purchase gold coins.
                                 </span>
                         </a>
                        </li>
                   
                        <li>
                         <a href="#">
                                 <div id="icon" class="tele"></div>
                                 <span>
                                  <p>Teleporter</p>
                                  Teleport your characters.
                                 </span>
                         </a>
                        </li>
                   
                        <li>
                         <a href="#">
                                 <div id="icon" class="unst"></div>
                                 <span>
                                  <p>Unstuck</p>
                                  Unstuck and revive your charcaters.
                                 </span>
                         </a>
                        </li>
                   
                        <li>
                         <a href="#">
                                 <div id="icon" class="p-store"></div>
                                 <span>
                                  <p>Premium Store</p>
                                  Exchange your gold coins for rewards.
                                 </span>
                         </a>
                        </li>
                   
                </ul>
                <!-- Main Account menu.End -->
           
                <!-- Account page end -->
                 <div class="acc-page-end-holder">
                
                 <!-- Quick account menu -->
                 <ul class="quick-acc-menu">
                         <li><a href="#">Refund Items</a></li>
                  <li><a href="#">Change password</a></li>
                         <li><a href="#">Change email</a></li>
                         <li><a href="#">Change display name</a></li>
                 </ul>
                        <ul class="quick-acc-menu">
                         <li><a href="#">Account activity</a></li>
                         <li><a href="#">Store activity</a></li>
                         <li><a href="#">Coins activity</a></li>
                 </ul>
                 <!-- Quick account menu.End -->
                   
                        <!-- Recruit a Friend Banner -->
                         <div class="recruit-a-friend">
                         <a href=""><span></span><p></p></a>
                         </div>
                   
                  </div> 
                 <!-- Account page end.End -->
   
         </div>
</div>
                                                 
                </div>   
        <div id="sidebar">
                 <div id="user_control">
        <a href="#">
                                        <div id="user_control_deco">
                                                <!-- -->
                                        </div>
                                        <p>Welcome,<span> FAILZORD</span><br><span>Characters 0</span></p>
                                </a><p>                 </div>
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