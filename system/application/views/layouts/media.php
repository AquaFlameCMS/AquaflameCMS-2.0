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
   
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
   
        <!-- Le javascripts -->
        <script src="http://localhost/assets/javascript/jquery.min.js"></script>
        <script src="http://localhost/assets/javascript/jquery.flexslider.min.js"></script>
        <script src="http://localhost/assets/javascript/bootstrap.min.js"></script>
        <script src="http://localhost/assets/javascript/global.js"></script>
        <script src="http://localhost/assets/javascript/login.js"></script>
        <script src="http://localhost/assets/javascript/register.js"></script>
<style> .yt-overflow { overflow: visible !important; } </style>
</head>
<body>
<div id="wrapper">
<header id="main_header" class="clearfix">
         <div id="topbar">
                 <nav>
                         <a class="home" href=""><img src="http://localhost/assets/images/topbar-home.png" alt=""><span>Home</span></a>
                                <p><a data-toggle="modal" href="#loginframe">Login</a> or <a data-toggle="modal" href="#registerframe">Create Account</a></p>   <div class="modal hide" id="logoutframe">
                                 <button type="button" class="close" data-dismiss="modal">?</button>
                                        <div class="modal-body">
         <p></p><center>Are you sure you want to Logout?</center><p></p>
         <p></p><center><a href="#" class="lbutton" type="button" id="logoutYes">Yes</a>or<a href="#" type="button" class="closebutton" data-dismiss="modal">No</a></center><p></p>
                                        </div>
                                </div>
                                <div class="modal hide" id="loginframe">
                                 <button type="button" class="close" data-dismiss="modal">?</button>
                                        <div class="modal-body">
         <h1>Flame.Net</h1>
                                         <form>
          <p>
                                                        <label class="text">Username</label>
                                                        <input class="input" value="" id="accountName" maxlength="320" type="text" tabindex="1" placeholder="Username">
          </p>
          <p>
                                                        <label class="text">Password</label>
                                                        <input class="input" type="password" placeholder="Password" id="accountPassword">
         
                                                        <label class="checkbox">
                                                        <input type="checkbox"> Keep me logged in
                                                        </label>
         
                                                  </p><center><a id="loginSubmit" href="#" class="login-btn">Login</a></center><p></p>
                                                </form>
                                                <ul>
                                                 <p></p><li><a href="">Can't log in?</a></li><p></p>
                                                        <li>Learn how to <a href="">protect your account!</a></li>
                                                        <p></p><li>Dont have an account yet? <a href="">Sign up now!</a></li><p></p>
          
                                                </ul>
                                        </div>
                                </div>
        <div class="modal hide" id="registerframe">
                                 <button type="button" class="close" data-dismiss="modal">?</button>
                                        <div class="modal-body">
                                         <form>
          <p>
                                                        <label class="text">Username</label>
                                                        <input class="input" type="text" placeholder="Username" id="registerUsername">
          </p>
                                                <p>
                                                        <label class="text">E-Mail</label>
                                                        <input class="input" type="text" placeholder="E-Mail" id="registerEmail">
          </p>
          <p>
                                                        <label class="text">Password</label>
                                                        <input class="input" type="password" placeholder="Password" id="registerPassword">
          </p>
          <p>
           <label class="text">Confirm Password</label>
                                                        <input class="input" type="password" placeholder="Confirm Password" id="registerPasswordConfirm">
           <label class="checkbox">
                                                        <input type="checkbox" id="registerAcceptRules"> I accept the <a href="#">Terms of Use</a> applicable to my country of residence and if under 18 years old, agree and acknowledge that my parent or guardian has also reviewed and accepted the Terms of Use on my behalf.
                                                        </label>
          </p>
                                                        <center><a href="#" class="login-btn-c" id="registerSubmit">Create Account</a></center>
                                                </form>
                                                <ul>
                                                 <p></p><li><a href="">Got Problems with Registering?</a></li><p>
                                                        </p><li>Learn how to <a href="">protect your account!</a></li>
                                                        <p></p>
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
                 <div class="container_2" align="center" style="">
        
                <!-- Videos -->
                 <div class="media-container flleft half-w" align="left">
                   
                         <div class="media-c-header">
                          <h3>Videos</h3>
                                 <a class="view-alll" href="index.php?page=all-videos">View all</a>
                         </div>
                        
                           
           <div class="media-video-container" align="left">
                <div class="media-video-thumb container_frame">
                 <div class="cframe_inner">
                  <a href="#">
                  <!--Video THUMB Preview-->
                  <div class="image-thumb-preview" style="background-image:url('');"></div>
                  <div class="play-button-small"></div>
                  </a>
                 </div>
                </div>
                <div class="video-info">
                 <h3>- Trailer #1</h3>
                 <p>This is our first trailer.</p>
                 <a href="http://www.youtube.com/watch?v=q7VKHsrwGt0&amp;feature=g-all-u" class="youtube-link" target="_blank">Watch in YouTube</a>
                </div>
                <div class="clear"></div>
           </div>                          
                        </div>
                <!-- Videos.End -->
           
           <!-- Wallpapers -->
                 <div class="media-container flright half-w" align="left">
                   
                         <div class="media-c-header">
                          <h3>Wallpapers</h3>
                                 <a class="view-alll" href="#">View all</a>
                         </div>
                   
        <ul class="screanshots screanshots-media-page">
         <li>
          <a href="#" class="container_frame">
           <span class="cframe_inner" style="background-image:url();"></span>
          </a>
         </li>
                                        <li>
          <a href="#" class="container_frame">
           <span class="cframe_inner" style="background-image:url();"></span>
          </a>
         </li>
                                        <li>
          <a href="#" class="container_frame">
           <span class="cframe_inner" style="background-image:url();"></span>
          </a>
         </li>
                                        <li>
          <a href="#" class="container_frame">
           <span class="cframe_inner" style="background-image:url();"></span>
          </a>
         </li>
                                        <div class="clear"></div>
        </ul>
                           
                        </div>
                <!-- Wallpapers.End -->
                <div class="clear"></div>
                <br>
           
                <!-- Screanshots -->
                 <div class="media-container flright full-w" align="left">
                   
                         <div class="media-c-header">
                          <h3>Screenshots</h3>
                                 <a class="view-alll" href="index.php?page=all-screanshots">View all</a>
                         </div>
                                 
        <ul class="screanshots screanshots-media-page-two">
                                
                                   
           <li>
                <a href="#" class="container_frame" rel="shadowbox">
                 <span class="cframe_inner" style="background-image:url(); background-size: 100%; background-repeat: no-repeat;"></span>
                </a>
           </li>
           <li>
                <a href="#" class="container_frame" rel="shadowbox">
                 <span class="cframe_inner" style="background-image:url(); background-size: 100%; background-repeat: no-repeat;"></span>
                </a>
           </li>
           <li>
                <a href="#" class="container_frame" rel="shadowbox">
                 <span class="cframe_inner" style="background-image:url(); background-size: 100%; background-repeat: no-repeat;"></span>
                </a>
           </li>
           <li>
                <a href="#" class="container_frame" rel="shadowbox">
                 <span class="cframe_inner" style="background-image:url(); background-size: 100%; background-repeat: no-repeat;"></span>
                </a>
           </li>
           <li>
                <a href="#" class="container_frame" rel="shadowbox">
                 <span class="cframe_inner" style="background-image:url(); background-size: 100%; background-repeat: no-repeat;"></span>
                </a>
           </li>
           <li>
                <a href="#" class="container_frame" rel="shadowbox">
                 <span class="cframe_inner" style="background-image:url(); background-size: 100%; background-repeat: no-repeat;"></span>
                </a>
           </li>
           <li>
                <a href="#" class="container_frame" rel="shadowbox">
                 <span class="cframe_inner" style="background-image:url(); background-size: 100%; background-repeat: no-repeat;"></span>
                </a>
           </li>
           <li>
                <a href="#" class="container_frame" rel="shadowbox">
                 <span class="cframe_inner" style="background-image:url(); background-size: 100%; background-repeat: no-repeat;"></span>
                </a>
           </li>
           <li>
                <a href="#" class="container_frame" rel="shadowbox">
                 <span class="cframe_inner" style="background-image:url(); background-size: 100%; background-repeat: no-repeat;"></span>
                </a>
           </li>
           <li>
                <a href="#" class="container_frame" rel="shadowbox">
                 <span class="cframe_inner" style="background-image:url(); background-size: 100%; background-repeat: no-repeat;"></span>
                </a>
           </li>                                  
                                        <div class="clear"></div>
        </ul>
                                 <div class="clear"></div>
                           
                                                           
                        </div>
                   
                <!-- Screanshots.End -->
                <div class="clear"></div>
                
  </div>
   </div><!-- /main_content -->
                </div>   
        <div id="sidebar">
                 <div id="user_control">
        <a data-toggle="modal" href="#loginframe">
                                        <div id="user_control_deco">
                                                <!-- -->
                                        </div>
                                        <p><span>Log in now</span> to enhance and<br>personalize your experience!</p>
                                </a>                    </div>
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
                 © 2012 AquaFlame, INC. All rights reserved
                </div>
        </footer>
</div>
</body>
</html>