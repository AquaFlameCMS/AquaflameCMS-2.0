        <noscript> <!-- Show a notification if the user has disabled javascript -->
		<div class="notification error png_bg">
		  <div>Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly. Download From <a href="http://www.exet.tk">exet.tk</a></div>
        </div>
		</noscript>
		<!-- Page Head -->
        <h2>Welcome <?php echo $user->getUsername();?></h2>
        <p id="page-intro">What would you like to do?</p>
            <ul class="shortcut-buttons-set">
				<li><a class="shortcut-button" href="#"><span>
					<img src="<?php echo base_url();?>/assets/admin/images/icons/pencil_48.png" alt="icon" /><br />
					Write an Article</span></a>
                </li>
				<li><a class="shortcut-button" href="#"><span>
					<img src="<?php echo base_url();?>/assets/admin/images/icons/image_add_48.png" alt="icon" /><br />
					Upload an Image</span></a>
                </li>				
				<li><a class="shortcut-button" href="#"><span>
					<img src="<?php echo base_url();?>/assets/admin/images/icons/clock_48.png" alt="icon" /><br />
					Add an Event</span></a>
                </li>
				<li><a class="shortcut-button" href="#messages" rel="modal"><span>
					<img src="<?php echo base_url();?>/assets/admin/images/icons/comment_48.png" alt="icon" /><br />
					Open Modal</span></a>
                </li>
            </ul><!-- End .shortcut-buttons-set -->
			<div class="clear"></div> <!-- End .clear -->
			<div class="content-box"><!-- Start Content Box -->
				<div class="content-box-header">
                    <h3>Latest articles</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Articles</a></li> <!-- href must be unique and match the id of target div -->
					</ul>
					<div class="clear">
                    </div>
					
                </div> <!-- End .content-box-header -->
				<div class="content-box-content">
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						<div id="articlesTable"> test</div>						
					</div>					      					
				</div> <!-- End .content-box-content -->				
			</div> <!-- End .content-box -->				
			<div class="clear"></div>					
			<div id="footer">
				<small> <!-- Remove this notice or replace it with whatever you want -->
						&#169; Copyright 2012 AquaFlame.NET | Powered by <a href="#">AquaFlame.NET</a> | <a href="#">Top</a>
				</small>
			</div><!-- End #footer -->