<?php
$isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile")); 
 
if($isMob){ 
?>
     <link rel="stylesheet" href="assets/css/mobile-control.css">
    
            <div id="video_wrapper">
            <div id="video_player" class="paused">
                <div class="video_status active">
                    <div class="skip_previous">
                        <span class="material-icons">
                            skip_previous
                         </span>
                    </div>
                    <div class="play_arrow">
                        <span class="material-icons">
                            play_arrow
                         </span>
                    </div>
                    <div class="skip_next">
                        <span class="material-icons">
                            skip_next
                         </span>
                    </div>
                </div>
                <div class="progress_area mobile">
                    <div class="progress_bar">
                        <span></span>
                    </div>
                    <div class="buffered_progress_bar"></div>
                </div>
                <div class="contorl-top active">
                    <span class="icon" style="z-index:1">
                        <i class="material-icons auto_play"></i>
                    </span>
                    <span class="icon" id="captionBTn" style="z-index:2">
                        <i class="material-icons">closed_caption</i>
                    </span>
                    <span class="icon" id="settingsBTn" style="z-index:2">
                        <i class="material-icons">settings</i>
                    </span>
                </div>
                <div class="control_bottom">
                    <div class="timer">
                        <span class="current">0:00</span> / <span class="duration">0:00</span>
                    </div>
                    <div class="sc-control">
                        <span class="icon" >
                            <i for="fc" class="material-icons mobile_fullscreen">fullscreen</i>
                            <input type="text-box" style="display:none" id="fc" value="portrait-secondary">
                        </span>
                        <span class="icon">
                            <i class="material-icons picture_in_picture">picture_in_picture_alt</i>
                        </span>
                    </div>

                </div>

              
                <div id="thumbnail"></div>
                <p class="caption_text"></p>
                <div class="progressAreaTime">0.00</div>
                <div id="spinner">
                    <div class="spinner">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="46" />
                    </svg>
                    </div>
                </div>
<?php
include 'video.php';
?>
                
            </div>
        </div>
        <div id="settings" class="">
            <div class="setting_menu">
                <ul>
                    <li id="quality">
                        <i class="material-icons">equalizer</i>
                        <span>quality</span>
                    </li>
                    <li id="subtitles_btn">
                        <i class="material-icons">subtitles</i>
                        <span>captions</span>
                    </li>
                    <li id="loop" class="">
                        <i class="material-icons">loop</i>
                        <span>loop video</span>
                    </li>
                    <li id="playback_speed">
                        <i class="material-icons">slow_motion_video</i>
                        <span>placyback speed</span>
                    </li>
                </ul>
            </div>
        </div>
        <div id="qualities" class="">
            <div class="qualities_menu">
                <span>Qualty for current video</span>
                <ul>
                  
                  <li data-quality="auto" class="active quality-auto">auto</li>
                
                </ul>
                <p>This selection only applies to the current video.For al videos got to setting</p>
            </div>
        </div>
        <div id="playback" class="">
            <div class="playback_menu">
                <ul>
                    <li data-speed="0.25">0.25x</li>
                    <li data-speed="0.5">0.5x</li>
                    <li data-speed="0.75">0.75x</li>
                    <li data-speed="1" class="active">Normal</li>
                    <li data-speed="1.25">1.25x</li>
                    <li data-speed="1.5">1.5x</li>
                    <li data-speed="1.75">1.75x</li>
                    <li data-speed="2">2x</li>        
                </ul>
            </div>
        </div>
        <div id="subtitles" class="">
            <div class="subtitles_menu">
                <ul>
                         
                </ul>
            </div>
        </div>
        <div id="captions"></div>

    
    
    
     <script src="assets/js/jquery.js"></script>
    <script src="assets/js/mobile-control.js"></script>
    <script src="assets/js/video-select.js"></script>
    <?php
}
else{ 
?>
        <link rel="stylesheet" href="assets/css/control.css">
    
    <section>
       
        <div id="video_wrapper">
            <div id="video_player" class="paused">
                <div class="volume_level">
                    <div class="volume_percentage">
                        75%
                    </div>
                    <div class="volume_icon">
                        <i class="material-icons">volume_up</i>
                    </div>
                </div>
                <div id="video_status">
                    <div class="">
                        <i class="material-icons">play_arrow</i>
                    </div>
                </div>
                <div class="duration_rewind first">
                    <div>10 seconds</div>
                    <div>
                        <i class="material-icons duration_rewind_icon">play_arrow</i>
                        <i class="material-icons duration_rewind_icon">play_arrow</i>
                        <i class="material-icons duration_rewind_icon">play_arrow</i>
                   </div>
                </div>
                <div class="duration_rewind second">
                    <div>10 seconds</div>
                    <div>
                        <i class="material-icons duration_rewind_icon">play_arrow</i>
                        <i class="material-icons duration_rewind_icon">play_arrow</i>
                        <i class="material-icons duration_rewind_icon">play_arrow</i>
                   </div>
                </div>



                    <div id="spinner">
                        <div class="spinner">
                        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="46" />
                        </svg>
                        </div>
                    </div>

<?php
include 'video.php';

?>


                <div id="thumbnail"></div>
                <p class="caption_text"></p>
                <div class="progressAreaTime">0.00</div>
                <div class="controls">
                    <div class="progress_area">
                        <div class="progress_bar">
                            <span></span>
                        </div>
                        <div class="buffered_progress_bar"></div>
                    </div>
                    <div class="control_list">
                        <div class="controls_left">
                            <span class="icon">
                                <i class="material-icons fast_rewind">replay_10</i>
                            </span>
                            <span class="icon">
                                <i class="material-icons play_pause">play_arrow</i>
                            </span>
                            <span class="icon">
                                <i class="material-icons fast_forward">forward_10</i>
                            </span>
                            <span class="icon">
                                <i class="material-icons volume" title = 'mute(m)'>volume_up</i>
                                <input type="range" min="0" max="100" id="volume_range">
                            </span>
                            <div class="timer">
                                <span class="current">0:00</span> / <span class="duration">0:00</span>
                            </div>
                        </div>
                        <div class="controls_right">
                            <span class="icon">
                                <i class="material-icons auto_play"></i>
                            </span>
                            <span class="icon">
                                <i class="material-icons captionBTn">closed_caption</i>
                            </span>
                            <span class="icon">
                                <i class="material-icons settingsBTn">settings</i>
                            </span>
                            <span class="icon">
                                <i class="material-icons picture_in_picture" title="picture in picture(i)">picture_in_picture_alt</i>
                            </span>
                            <span class="icon">
                                <i class="material-icons fullscreen" title="fullscreen(f)">fullscreen</i>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="settings" class="">
                    <div data-label="settingHome" class="parent">
                        <ul>
                            <li data-label="speed" class="" style="display:flex;justify-content:space-between;cursor: pointer;">
                                <span>Speed</span>
                                <i class="material-icons">
                                    arrow_forward_ios
                                </i>
                            </li>
                            <li data-label="quality" style="display:flex;justify-content:space-between;cursor: pointer;">
                                <span>Quality</span>
                                <i class="material-icons">
                                    arrow_forward_ios
                                </i>
                            </li>
                        </ul>
                    </div>
                    <div class="playback parent" data-label="speed" hidden>
                        <span style="cursor: pointer;">
                             <i class="material-icons back_setting" data-label="settingHome">arrow_back</i>
                             <span>Playback Speed</span>
                        </span>
                        <ul>
                            <li data-speed="0.25">0.25x</li>
                            <li data-speed="0.5">0.5x</li>
                            <li data-speed="0.75">0.75x</li>
                            <li data-speed="1" class="active">Normal</li>
                            <li data-speed="1.25">1.25x</li>
                            <li data-speed="1.5">1.5x</li>
                            <li data-speed="1.75">1.75x</li>
                            <li data-speed="2">2x</li>
                        </ul>
                    </div>
                    <div class="quality parent" data-label="quality" hidden>
                        <span style="cursor: pointer;">
                            <i class="material-icons back_setting" data-label="settingHome">arrow_back</i>
                            <span>Playback Quality</span>
                        </span>
                        <ul>

                            <li data-quality="auto" class="quality-auto active">auto</li>
                            
                        </ul>
                    </div>
                </div>
                <div id="captions" class="">
                    <div class="caption">
                        <span>Select Subtitile</span>
                        <ul>
                           
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
            <div id="captions"></div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/video-control.js"></script>
    <script src="assets/js/video-select.js"></script>
    
    <?php
   }
 ?>
    