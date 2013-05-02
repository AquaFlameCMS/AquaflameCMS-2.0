        <noscript> <!-- Show a notification if the user has disabled javascript -->
		<div class="notification error png_bg">
		  <div>Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly. Download From <a href="http://www.exet.tk">exet.tk</a></div>
        </div>
		</noscript>
		<!-- Page Head -->
        <h2>Welcome back, <?php echo $user->getUsername();?></h2>
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
                    <h3>Write an Article</h3>
					<div class="clear">
                    </div>
					
                </div> <!-- End .content-box-header -->
				<div class="content-box-content">		
					<div class="tab-content default-tab" id="tab1">
						<form action="#" method="post">							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->								
								<p>
									<label>Title</label>
										<input class="text-input small-input" type="text" id="small-input" name="small-input" /> <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
										<br /><small>This will be the title for the Page.</small>
								</p>	
								<!--<p>
									<label>Medium form input</label>
									<input class="text-input medium-input datepicker" type="text" id="medium-input" name="medium-input" /> <span class="input-notification error png_bg">Error message</span>
								</p>								
								<p>
									<label>Large form input</label>
									<input class="text-input large-input" type="text" id="large-input" name="large-input" />
								</p>							
								<p>
									<label>Checkboxes</label>
									<input type="checkbox" name="checkbox1" /> This is a checkbox <input type="checkbox" name="checkbox2" /> And this is another checkbox
								</p>								
								<p>
									<label>Radio buttons</label>
									<input type="radio" name="radio1" /> This is a radio button<br />
									<input type="radio" name="radio2" /> This is another radio button
								</p>-->									
								<p>
									<label>Select your News image.</label>              
									<select name="dropdown" class="small-input">
										<option value="option1">Option 1</option>
										<option value="option2">Option 2</option>
										<option value="option3">Option 3</option>
										<option value="option4">Option 4</option>
									</select> 
								</p>								
								<p>
									<label>Textarea with WYSIWYG</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="textfield" cols="79" rows="15"></textarea>
								</p>								
								<p>
								<input class="button" type="submit" value="Submit" />
								</p>								
							</fieldset>							
							<div class="clear"></div><!-- End .clear -->							
						</form>						
					</div> <!-- End #tab2 -->        					
				</div> <!-- End .content-box-content -->				
			</div> <!-- End .content-box -->
			<div id="footer">
				<small> <!-- Remove this notice or replace it with whatever you want -->
						&#169; Copyright 2012 AquaFlame.NET | Powered by <a href="#">AquaFlame.NET</a> | <a href="#">Top</a>
				</small>
			</div><!-- End #footer -->