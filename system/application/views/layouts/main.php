<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>AquaFlameCMS Frontpage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A wow private server made with AquaFlameCMS">
    <meta name="author" content="AquaFlameCMS">
    
    <!-- Le styles -->
    <link href="<?php echo base_url();?>assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/stylesheets/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/stylesheets/main.css" rel="stylesheet" type="text/css">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- Le javascripts -->
    <script type="text/javascript"> window.baseUrl = "<?php echo base_url(); ?>";</script>
    <script src="<?php echo base_url();?>assets/javascript/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/javascript/jquery.flexslider.min.js"></script>
    <script src="<?php echo base_url();?>assets/javascript/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/javascript/global.js"></script>
    <script src="<?php echo base_url();?>assets/javascript/login.js"></script>
    <script src="<?php echo base_url();?>assets/javascript/register.js"></script>
</head>

<body>

<div id="wrapper">
	<header id="main_header" class="clearfix">
    	<div id="topbar">
        	<nav>
            	<a class="home" href=""><img src="<?php echo base_url();?>assets/images/topbar-home.png" alt="" /><span>Home</span></a></li>
                <?php
                if($loggedIn){
                    echo '<p>Welcome, '. strtolower($username) . ' | <a data-toggle="modal" href="#logoutframe">Logout</a></p>';
                }else{
                    echo '<p><a data-toggle="modal" href="#loginframe">Login</a> or <a data-toggle="modal" href="#registerframe">Create Account</a></p>';
                }
                ?>
				<div class="modal hide" id="logoutframe">
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
                            <input class="input" value="" id="accountName" maxlength="320" type="text" tabindex="1" placeholder="Username"/>
						</p>
						<p>
                            <label class="text">Password</label>
                            <input class="input" type="password" class="span3" placeholder="Password" id="accountPassword"/>
						
                            <label class="checkbox">
                            <input type="checkbox" /> Keep me logged in
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
            	<input placeholder="Search characters, items, forums and more..." type="text" />
            </form>
        </div>
    </header>
    
    <?php
    // here we load the correct view
    $this->load->view($subview,$subviewData);
    ?>
    
    <div id="sidebar">
        	<div id="user_control">
				<?php
                if($loggedIn){
                    echo '<a href="#">
                    <div id="user_control_deco">
                        <!-- -->
                    </div>
                    <p>Welcome,<span> '. $username . '</span><br /><span>Characters 0</span></p>
                </a><p>';
                }else{
                    echo '<a data-toggle="modal" href="#loginframe">
                    <div id="user_control_deco">
                        <!-- -->
                    </div>
                    <p><span>Log in now</span> to enhance and<br />personalize your experience!</p>
                </a>';
                }
                ?>
            </div>
            <div id="sidebar_content" class="clearfix">
            	<section class="advertisement">
                	<img src="<?php echo base_url();?>assets/images/test/advertisement.png" alt="" />
                </section>
                <section class="votingpanel">
                	<header>
                    	<!-- -->
                    </header>
                	<div class="content">
                    	<ul>
                        	<li><a href="">XtremeTop100</a></li>
                            <li><a href="">MGTop100</a></li>
                            <li><a href="">MotaFking100</a></li>
                        </ul>
                        <!-- <p><a href="">Login</a> to vote for our awesome sauce site!</p> -->
                    </div>
                    <footer>
                    	<a href=""><span>198 Vote Points Earned</span></a>
                    </footer>
                </section>
                <section class="ssotd">
                	<header>
                    	<h3><a href="">Screenshot of the day</a></h3>
                    </header>
                    <div class="content">
                    	<div class="ssotd-thumb">
                        	<img src="" alt="" style="background-image: url(assets/images/test/screenshot.png);" />
                            <div class="options">
                            	<a href="">Submit Screenshot</a>
                                <a class="pull-right" href="">All Screenshots</a>
                            </div>
                        </div>
                    </div>
                    <footer><!-- --></footer>
                </section>
                <section class="forumlatest">
                	<header>
                    	<h3><a href="">Popular Topics</a></h3>
                    </header>
                    <div class="content">
                    	<ul>
                        	<li><a href="">All YOUR WOOLS BELONG TO US!</a>General Discussion - 6/6/12 8:08 PM</li>
                            <li><a href="">Before the Internet, what did you do?</a>General Discussion - 6/6/12 8:08 PM</li>
                            <li><a href="">70s thread of Mario > Luigi</a>General Discussion - 6/6/12 8:08 PM</li>
                            <li><a href="">A fond farewell.</a>General Discussion - 6/6/12 8:08 PM</li>
                            <li><a href="">They finally found out I'm a guy In RL</a>General Discussion - 6/6/12 8:08 PM</li>
                            <li><a href="">Prove you played WoW before Wotlk.</a>General Discussion - 6/6/12 8:08 PM</li>
                            <li><a href="">Why can't Forsaken Procreate??</a>General Discussion - 6/6/12 8:08 PM</li>
                        </ul>
                    </div>
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
    