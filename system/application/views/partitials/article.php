<div id="content" class="clearfix">
        <div id="main">
        	<div id="main_navigation">
            	<nav>
                	<ul>
                    	<li><a class="home" href="<?php echo base_url(); ?>"><span>Home</span></a></li>
                        <li><a class="media" href=""><span>Media</span></a></li>
                        <li><a class="community" href=""><span>Community</span></a></li>
                        <li><a class="status" href=""><span>Status</span></a></li>
                        <li><a class="forums" href=""><span>Forums</span></a></li>
                        <li><a class="services" href=""><span>Services</span></a></li>
                    </ul>
                </nav>
			</div>
        <div id="main_content">
		<article>
			<header>
					<header>
						<h1><a href=""><?php echo $article->getTitle(); ?></a></h1>
						<p class="meta">by <a href=""><?php echo $article->getAuthor(); ?></a> at <?php echo $article->getDate(); ?></p>
					</header>
			<span class="clear"><!-- --></span>
			<div class="header-image">
				<center><img a src="<?php echo base_url()."/".$article->getImage();?>" /></center>
			</div>
            <div class="content">
			<br/>
				<?php echo $article->getContent();?>
			<br/><br/>
		<h2><a href="">Comments</a> <a href="">(<?php if(isset($comments)){ echo count($comments);}else{ echo "0"; }?>)</a></h2>
		</div>	
			</article>
		<article>
		<header>
		<div class="reply-navigation" id="show-reply">
			<a href="#"><span>Add a Reply</span></a>
        </div>
		<?php        
        if($hasComments)
        {
            foreach($comments as $comment)
            {
                $character = $characters[$comment->getCharacterID()];
                echo '<div class="comment"><div class="portrait"><div class="avatar-interior">
                    <a href="#">
                    <img width="64" height="64" src="http://eu.battle.net/wow/static/images/2d/avatar/'.$character->getRace().'-'.$character->getGender().'.jpg" alt="" />
                  </a>
                </div></div><div class="rate"><div class="rate-feedback">
                    <a href="?login">Login</a> to rate
                </div>
                <span class="clear"><!-- --></span>
            </div>
            <div class="comment-interior">
                <div class="character-info user">
                    <div class="user-name">
                        <span class="char-name-code" style="display: none">Tayuya</span>
                            <div class="ui-context">
                                <div class="context">
                                    <div class="context-user">
                                        <strong>Tayuya</strong>
                                        <br />
                                        <span>Stormreaver</span>
                                    </div>
                                </div>
                        </div>
                        <a href="#" class="context-link wow-class-11" rel="np">Tayuya</a>
                    </div>
                    <span class="time"><a href="#c-5724142593">'.$comment->getDatePosted().'</a></span>
                </div>
                <div class="reply-content">Lawl'.$comment->getContent().'</div><br/>
            </div>
        </div>';
            }
        }
        ?>
        <div class="new-post">
            <div class="comment">
                <div class="portrait-b ajax-update">
                    <div class="avatar-interior">
                        <a href="#"><img height="64" width="64" src="images/avatars/2d/eagle.gif" alt=""></a>
                    </div>
                </div>
														
                <div class="comment-interior">
                    <div class="character-info user ajax-update">
                    <!--commentThrottle[]-->
                        <div class="user-name">
                            <a href="#" class="context-link" rel="np">Alex</a>
                        </div>
                </div>
															
                <div class="content">
                    <div class="comment-ta">
                        <textarea id="comment-ta" cols="78" rows="3" name="detail" onfocus="textAreaFocused = true;" onblur="textAreaFocused = false;"></textarea>
                    </div>
                        <div class="action">
                            <div class="cancel">
                                <span class="spacer">|</span>
                                <a href="javascript:;" onclick="$('#comment-form-reply').slideUp();">Cancel</a>
                            </div>
                            <div class="submit">
                                <div class="reply-navigation" id="submit-comment">
                                    <a href="#"><span>POST</span></a>
                                </div>
                            </div>
                            <span class="clear"><!-- --></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		</header>
		</article>
		</div>
		</div>