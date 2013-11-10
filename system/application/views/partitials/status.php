<div id="main_content">
    <div id="left">
        <div class="profiles">
	       <h4>Status</h4>
            <div class="profiles-section">
                <div class="sidebar-module " id="sidebar-profiles-search">
                    <div class="sidebar-title">
	                   <h3 class="category title-profiles-search">Servers</h3>
                    </div>
                    <div class="sidebar-content">
					<div>
					<label for="type">
						<strong>Choose your Realm:</strong>
					</label>
					<select id="realmID" name="type">
					<?php
                    foreach($realms as $realm)
                    {
                       echo '<option value="'.$realm->getID().'">'.$realm->getName().'</option>';
                    }
                    ?>
					</select>
					</div>
                    </div>
                </div>
                <p class="profiles-tip">Tip: Select the Dropdown window to select your realm.</p>
                <span class="clear"><!-- --></span>
            </div>
        </div>
        <div class="main-feature">
            <div class="main-feature-wrapper">
                <!-- LEADERBOARDS -->
                <div class="sidebar-module " id="sidebar-leaderboards">
                    <div class="sidebar-title">
	                   <h3 class="category title-leaderboards">Server Status</h3>
                    </div>
                    <div class="sidebar-content">
                        <div id="challenge-mode" class="leaderboard-content-block">
                            <a href="#" class="leaderboard-content-title">World Server Status</a>
                            <span class="leaderboard-content-desc">This indicates the Status of the World Server. If this crashes you can't login to the World.</span>
                            <!-- FULL COLUMN -->
                            <div id="world-server-status">
                                <?php
                                if($realms[0]->getOnline()){
                                    echo '<div class="group">
                                            <a href="#">
                                            <span class="group-thumbnail-up"></span>
                                            <span class="group-name" style="color: #33FF00;">Online</span>
                                            <span class="clear"><!-- --></span>
                                            </a>
                                         </div>';
                                }else{
                                    echo '<div class="group">
                                            <a href="#">
                                            <span class="group-thumbnail-down"></span>
                                            <span class="group-name" style="color: #CC0000;">Offline</span>
                                            <span class="clear"><!-- --></span>
                                            </a>
                                        </div>';
                                }
                                ?>
                            </div>
                        </div>
                        <div id="pvp-ladder" class="leaderboard-content-block">
                            <a href="#" class="leaderboard-content-title">Auth Server Status</a>
                            <span class="leaderboard-content-desc">This indicates the status of the Authentication Server. If this crashes you can't login with your account.</span>
                            <div class="group">
                                <a href="#">
                                <span class="group-thumbnail-down"></span>
                                <span class="group-name" style="color: #CC0000;">Offline</span>
                                <span class="clear"><!-- --></span>
                                </a>
                            </div>
							<div class="group">
                                <a href="#">
                                <span class="group-thumbnail-up"></span>
                                <span class="group-name" style="color: #33FF00;">Online</span>
                                <span class="clear"><!-- --></span>
                                </a>
                            </div>
                        </div>
                        <div id="challenge-mode" class="leaderboard-content-block2">
                            <a href="#" class="leaderboard-content-title">Characters Online</a>
                            <span class="leaderboard-content-desc">This indicates how many Players are playing (real-time) in the Server.</span>
                            <!-- FULL COLUMN -->
                            <div class="group">
                                <a href="#">
                                <span class="group-thumbnail-chars"></span>
                                <span class="group-name" style="color: #33FF00;">300 are Online</span>
                                <span class="clear"><!-- --></span>
                                </a>
                            </div>
							<div class="group">
                                <a href="#">
                                <span class="group-thumbnail-chars"></span>
                                <span class="group-name" style="color: #33FF00;">300 are Online</span>
                                <span class="clear"><!-- --></span>
                                </a>
                            </div>
                        </div>
                        <div id="pvp-ladder" class="leaderboard-content-block3" style="margin-top: -220px;">
                            <a href="#" class="leaderboard-content-title">Accounts Online</a>
                            <span class="leaderboard-content-desc">This indicates how many Accounts are currenlty logged in.</span>
                            <div class="group">
                                <a href="#">
                                <span class="group-thumbnail-acc"></span>
                                <span class="group-name" style="color: #33FF00;">302 are Online</span>
                                <span class="clear"><!-- --></span>
                                </a>
                            </div>
							<div class="group">
                                <a href="#">
                                <span class="group-thumbnail-acc"></span>
                                <span class="group-name" style="color: #33FF00;">302 are Online</span>
                                <span class="clear"><!-- --></span>
                                </a>
                            </div>
                        </div>
                        <span class="clear"><!-- --></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>