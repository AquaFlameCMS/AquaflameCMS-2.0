<div id="main_content">
    <article>
        <header>
            <header>
                <h1><a href=""><?php echo $article->getTitle(); ?></a></h1>
                <p class="meta">by <a href=""><?php echo $article->getAuthor(); ?></a> at <?php echo $article->getDate(); ?></p>
			</header>
        <span class="clear"><!-- --></span>
        <div class="header-image">
            <center><img src="<?php echo base_url().$article->getImage();?>" /></center>
        </div>
        <div class="content">
            <br/>
            <?php echo $article->getContent();?>
            <br/>
            <br/>
            <h2><a href="">Comments</a> <a href="">(<?php if(isset($comments)){ echo count($comments);}else{ echo "0"; }?>)</a></h2>
		</div>	
    </article>
    <article>
        <header>
        <?php
        if($loggedIn && $activeChar != NULL){
            echo'<div class="reply-navigation" id="show-reply">
			         <a href="#"><span>Add a Reply</span></a>
                 </div>';
        }
		      
        if($hasComments){
            foreach($comments as $comment){
                $character = $characters[$comment->getCharacterID()];
                echo '<div class="comment"><div class="portrait"><div class="avatar-interior">
                        <a href="#">
                        <img width="64" height="64" src="http://eu.battle.net/wow/static/images/2d/avatar/'.$character->getRace().'-'.$character->getGender().'.jpg" alt="" />
                        </a>
                      </div>
                    </div>
                    <div class="rate">
                        <div class="rate-feedback">';
                echo $loggedIn ? 'here should be the rating' : '<a data-toggle="modal" href="#loginframe">Login </a>to rate';
                echo '</div>
                    <span class="clear"><!-- --></span>
                    </div>
                    <div class="comment-interior">
                        <div class="character-info user">
                            <div class="user-name">
                            <span class="char-name-code" style="display: none">'.$character->getName().'</span>
                                <div class="ui-context">
                                    <div class="context">
                                        <div class="context-user">
                                            <strong>'.$character->getName().'</strong>
                                            <br />
                                            <span>Stormreaver</span>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="context-link wow-class-'.$character->getClass().'" rel="np">'.$character->getName().'</a>
                            </div>
                            <span class="time"><a href="#c-5724142593">'.$comment->getDatePosted().'</a></span>
                        </div>
                    <div class="reply-content">'.$comment->getContent().'</div><br/>
                </div>
            </div>';
            }
        }
        ?>
            <div class="new-post">
                <div class="comment">
                    <div class="portrait-b ajax-update">
                        <div class="avatar-interior">
                            <a href="#"><img height="64" width="64" src="http://eu.battle.net/wow/static/images/2d/avatar/<?php echo $activeChar->getRace().'-'.$activeChar->getGender() ?>.jpg" alt=""></a>
                        </div>
                    </div>									
                    <div class="comment-interior">
                        <div class="character-info user ajax-update">
                    <!--commentThrottle[]-->
                            <div class="user-name">
                                <a href="#" class="context-link" rel="np"><?php echo $activeChar->getName(); ?></a>
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