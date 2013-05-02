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
            <div id="slider_wrapper">
            	<div id="slider">
                	<div id="slider_trickery">
                        <div id="slider_mask">
                            <!-- -->
                        </div>
                        <div class="flexslider">
                          <ul class="slides">
                            <li>
                              <img src="<?php echo base_url();?>assets/images/test/featured1.png" alt="" />
                            </li>
                            <li>
                              <img src="<?php echo base_url();?>assets/images/test/featured2.png" alt="" />
                            </li>
                            <li>
                              <img src="<?php echo base_url();?>assets/images/test/featured3.png" alt="" />
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
                <div id="news_thumbs" class="clearfix">
                	<ul>
                    	<?php echo $hottest; ?>
                    </ul>
                </div>
            </div>
            <div id="main_content">
        	<?php echo $news; ?>
            </div><!-- /main_content -->
        </div>