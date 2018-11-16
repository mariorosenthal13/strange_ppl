<style>
    .hr-bar {
        width: 110px;
        display: block;
        height: 1px;
        border: 0;
        border-top: 1px solid #ccc;
        margin: 1em 0;
        padding: 0;
    }
</style>
<!-- START TITLE SECTION -->
<section id="page-title">
    <div class="title-image">
        <!--<h1>beatswave</h1>-->
        <img style = "-webkit-filter: blur(3px); /* Safari 6.0 - 9.0 */ filter: blur(3px); margin-top: -125px; position: fixed; z-index: 1000; pointer-events: none;" src="{{ asset('img/logo-white.png') }}" alt="Logo 1">
    </div>
    <div class="global-title wow zoomIn">
        {{--<h1>{{ $artist->first_name }}</h1>--}}
        <div class="profile-header" style="display: inline-block;">
            <div>
                <p style="color:white"><?php echo $artist->first_name ?></p>
            </div>
            <div align="center" class="hr-bar"></div>
            <h2 style="color:white"><?php echo $artist->last_name ?></h2>
        </div>
    </div>
</section>
<!-- END TITLE SECTION -->

<!-- START MUSIC SINGLE SECTION -->
{{--<section id="video-post">--}}
    {{--<div class="section">--}}
        {{--<div class="embed-responsive embed-responsive-16by9">--}}
            {{--<div class="youtube" id="aJOTlE1K90k" data-src="resources/images/andy-lee.png"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<!-- END MUSIC SINGLE SECTION -->

<!-- START DISCOGRAPHY POST SECTION -->
<section id="discography-post">
    <div class="section">
        <div class="row j_c">
            <div class="col sec_2_content">
                <div class="cover-image">
                    <img src="{{ asset( "img/" . $artist->picture) }}" alt="Cover Image">
                </div>
                <div class="music_date">
                    <a href="#"><p><i class="fa fa-calendar" aria-hidden="true"></i><span>August 20, 2018</span></p></a>
                    <a href="#"><p><i class="fa fa-music" aria-hidden="true"></i><span>Tedeschi Trucks Band</span></p></a>
                    <a href="#"><p><i class="fa fa-tags" aria-hidden="true"></i><span>Masterworks</span></p></a>
                </div>
                <div class="music_after">
                    <p><a href="">Producer: Jim Scott, Derek Trucks</a></p>
                    <p><a href="">Number of discs: 1</a></p>
                </div>
                <div class="music_shop">
                    <a href="#" class="shop_cta">AMAZON</a>
                    <a href="#" class="shop_cta">ITUNES</a>
                    <a href="#" class="shop_cta">SOUNDCLOUD</a>
                    <a href="#" class="shop_cta">EBAY</a>
                    <a href="#" class="shop_cta">GOOGLE PLAY</a>
                </div>
            </div>
            <div class="col music">
                <div class="mp3 mp3_1" id="mp3_1">
                    <audio controls class="audio1"><source src="resources/sounds/Bruno_Mars-That_s_What_I_Like.mp3" type="audio/mpeg"></audio>
                </div>
                <div class="playlist" id="playlist">
                    <div class="playlist-title">
                        <h2>Surprise Without Flaws</h2>
                    </div>
                    <div class="music_line mus-1">
                        <div class="play-pause" data-src="resources/sounds/Bruno_Mars-That_s_What_I_Like.mp3">
                            <svg class="play-mp3" x="0px" y="0px" viewBox="0 0 357 357">
                                <polygon points="38.25,0 38.25,357 318.75,178.5" fill="#FFFFFF"/>
                            </svg>
                            <svg class="pause-mp3" x="0px" y="0px" viewBox="0 0 47.607 47.607">
                                <path d="M17.991,40.976c0,3.662-2.969,6.631-6.631,6.631l0,0c-3.662,0-6.631-2.969-6.631-6.631V6.631C4.729,2.969,7.698,0,11.36,0   l0,0c3.662,0,6.631,2.969,6.631,6.631V40.976z" fill="#FFFFFF"/>
                                <path d="M42.877,40.976c0,3.662-2.969,6.631-6.631,6.631l0,0c-3.662,0-6.631-2.969-6.631-6.631V6.631   C29.616,2.969,32.585,0,36.246,0l0,0c3.662,0,6.631,2.969,6.631,6.631V40.976z" fill="#FFFFFF"/>
                            </svg>
                        </div>
                        <span class="music-name">01. Bruno Mars - That's What I Like</span>
                        <div class="player-grig"></div>
                        <span class="plyr__time">
                            <span class="plyr__time--duration">03:55</span>
                        </span>
                    </div>
                    <div class="music_line mus-2">
                        <div class="play-pause" data-src="resources/sounds/Cardi-I_Like_It.mp3">
                            <svg class="play-mp3" x="0px" y="0px" viewBox="0 0 357 357">
                                <polygon points="38.25,0 38.25,357 318.75,178.5" fill="#FFFFFF"/>
                            </svg>
                            <svg class="pause-mp3" x="0px" y="0px" viewBox="0 0 47.607 47.607">
                                <path d="M17.991,40.976c0,3.662-2.969,6.631-6.631,6.631l0,0c-3.662,0-6.631-2.969-6.631-6.631V6.631C4.729,2.969,7.698,0,11.36,0   l0,0c3.662,0,6.631,2.969,6.631,6.631V40.976z" fill="#FFFFFF"/>
                                <path d="M42.877,40.976c0,3.662-2.969,6.631-6.631,6.631l0,0c-3.662,0-6.631-2.969-6.631-6.631V6.631   C29.616,2.969,32.585,0,36.246,0l0,0c3.662,0,6.631,2.969,6.631,6.631V40.976z" fill="#FFFFFF"/>
                            </svg>
                        </div>
                        <span class="music-name">02. Cardi - I Like It</span>
                        <div class="player-grig"></div>
                        <span class="plyr__time">
                            <span class="plyr__time--duration">03:55</span>
                        </span>
                    </div>
                    <div class="music_line mus-3">
                        <div class="play-pause" data-src="resources/sounds/Ed_Sheeran-Perfect.mp3">
                            <svg class="play-mp3" x="0px" y="0px" viewBox="0 0 357 357">
                                <polygon points="38.25,0 38.25,357 318.75,178.5" fill="#FFFFFF"/>
                            </svg>
                            <svg class="pause-mp3" x="0px" y="0px" viewBox="0 0 47.607 47.607">
                                <path d="M17.991,40.976c0,3.662-2.969,6.631-6.631,6.631l0,0c-3.662,0-6.631-2.969-6.631-6.631V6.631C4.729,2.969,7.698,0,11.36,0   l0,0c3.662,0,6.631,2.969,6.631,6.631V40.976z" fill="#FFFFFF"/>
                                <path d="M42.877,40.976c0,3.662-2.969,6.631-6.631,6.631l0,0c-3.662,0-6.631-2.969-6.631-6.631V6.631   C29.616,2.969,32.585,0,36.246,0l0,0c3.662,0,6.631,2.969,6.631,6.631V40.976z" fill="#FFFFFF"/>
                            </svg>
                        </div>
                        <span class="music-name">03. Ed Sheeran - Perfect</span>
                        <div class="player-grig"></div>
                        <span class="plyr__time">
                            <span class="plyr__time--duration">03:55</span>
                        </span>
                    </div>
                    <div class="music_line mus-4">
                        <div class="play-pause" data-src="resources/sounds/Ed_Sheeran-Shape_of_You.mp3">
                            <svg class="play-mp3" x="0px" y="0px" viewBox="0 0 357 357">
                                <polygon points="38.25,0 38.25,357 318.75,178.5" fill="#FFFFFF"/>
                            </svg>
                            <svg class="pause-mp3" x="0px" y="0px" viewBox="0 0 47.607 47.607">
                                <path d="M17.991,40.976c0,3.662-2.969,6.631-6.631,6.631l0,0c-3.662,0-6.631-2.969-6.631-6.631V6.631C4.729,2.969,7.698,0,11.36,0   l0,0c3.662,0,6.631,2.969,6.631,6.631V40.976z" fill="#FFFFFF"/>
                                <path d="M42.877,40.976c0,3.662-2.969,6.631-6.631,6.631l0,0c-3.662,0-6.631-2.969-6.631-6.631V6.631   C29.616,2.969,32.585,0,36.246,0l0,0c3.662,0,6.631,2.969,6.631,6.631V40.976z" fill="#FFFFFF"/>
                            </svg>
                        </div>
                        <span class="music-name">04. Ed Sheeran - Shape of You</span>
                        <div class="player-grig"></div>
                        <span class="plyr__time">
                            <span class="plyr__time--duration">03:55</span>
                        </span>
                    </div>
                    <div class="music_line mus-5">
                        <div class="play-pause" data-src="resources/sounds/Imagine_Dragons-Believer.mp3">
                            <svg class="play-mp3" x="0px" y="0px" viewBox="0 0 357 357">
                                <polygon points="38.25,0 38.25,357 318.75,178.5" fill="#FFFFFF"/>
                            </svg>
                            <svg class="pause-mp3" x="0px" y="0px" viewBox="0 0 47.607 47.607">
                                <path d="M17.991,40.976c0,3.662-2.969,6.631-6.631,6.631l0,0c-3.662,0-6.631-2.969-6.631-6.631V6.631C4.729,2.969,7.698,0,11.36,0   l0,0c3.662,0,6.631,2.969,6.631,6.631V40.976z" fill="#FFFFFF"/>
                                <path d="M42.877,40.976c0,3.662-2.969,6.631-6.631,6.631l0,0c-3.662,0-6.631-2.969-6.631-6.631V6.631   C29.616,2.969,32.585,0,36.246,0l0,0c3.662,0,6.631,2.969,6.631,6.631V40.976z" fill="#FFFFFF"/>
                            </svg>
                        </div>
                        <span class="music-name">05. Imagine Dragons - Believer</span>
                        <div class="player-grig"></div>
                        <span class="plyr__time">
                            <span class="plyr__time--duration">03:55</span>
                        </span>
                    </div>
                    <div class="music_line mus-6">
                        <div class="play-pause" data-src="resources/sounds/Imagine_Dragons-Thunder.mp3">
                            <svg class="play-mp3" x="0px" y="0px" viewBox="0 0 357 357">
                                <polygon points="38.25,0 38.25,357 318.75,178.5" fill="#FFFFFF"/>
                            </svg>
                            <svg class="pause-mp3" x="0px" y="0px" viewBox="0 0 47.607 47.607">
                                <path d="M17.991,40.976c0,3.662-2.969,6.631-6.631,6.631l0,0c-3.662,0-6.631-2.969-6.631-6.631V6.631C4.729,2.969,7.698,0,11.36,0   l0,0c3.662,0,6.631,2.969,6.631,6.631V40.976z" fill="#FFFFFF"/>
                                <path d="M42.877,40.976c0,3.662-2.969,6.631-6.631,6.631l0,0c-3.662,0-6.631-2.969-6.631-6.631V6.631   C29.616,2.969,32.585,0,36.246,0l0,0c3.662,0,6.631,2.969,6.631,6.631V40.976z" fill="#FFFFFF"/>
                            </svg>
                        </div>
                        <span class="music-name">06. Imagine Dragons - Thunder</span>
                        <div class="player-grig"></div>
                        <span class="plyr__time">
                            <span class="plyr__time--duration">03:55</span>
                        </span>
                    </div>
                    <div class="music_line mus-7">
                        <div class="play-pause" data-src="resources/sounds/J_Balvin-Mi_Gente.mp3">
                            <svg class="play-mp3" x="0px" y="0px" viewBox="0 0 357 357">
                                <polygon points="38.25,0 38.25,357 318.75,178.5" fill="#FFFFFF"/>
                            </svg>
                            <svg class="pause-mp3" x="0px" y="0px" viewBox="0 0 47.607 47.607">
                                <path d="M17.991,40.976c0,3.662-2.969,6.631-6.631,6.631l0,0c-3.662,0-6.631-2.969-6.631-6.631V6.631C4.729,2.969,7.698,0,11.36,0   l0,0c3.662,0,6.631,2.969,6.631,6.631V40.976z" fill="#FFFFFF"/>
                                <path d="M42.877,40.976c0,3.662-2.969,6.631-6.631,6.631l0,0c-3.662,0-6.631-2.969-6.631-6.631V6.631   C29.616,2.969,32.585,0,36.246,0l0,0c3.662,0,6.631,2.969,6.631,6.631V40.976z" fill="#FFFFFF"/>
                            </svg>
                        </div>
                        <span class="music-name">07. J.Balvin - Mi Gente</span>
                        <div class="player-grig"></div>
                        <span class="plyr__time">
                            <span class="plyr__time--duration">03:55</span>
                        </span>
                    </div>
                    <div class="music_line mus-8">
                        <div class="play-pause" data-src="resources/sounds/Jason_Derulo_feat_Nicki_Minaj-Swalla.mp3">
                            <svg class="play-mp3" x="0px" y="0px" viewBox="0 0 357 357">
                                <polygon points="38.25,0 38.25,357 318.75,178.5" fill="#FFFFFF"/>
                            </svg>
                            <svg class="pause-mp3" x="0px" y="0px" viewBox="0 0 47.607 47.607">
                                <path d="M17.991,40.976c0,3.662-2.969,6.631-6.631,6.631l0,0c-3.662,0-6.631-2.969-6.631-6.631V6.631C4.729,2.969,7.698,0,11.36,0   l0,0c3.662,0,6.631,2.969,6.631,6.631V40.976z" fill="#FFFFFF"/>
                                <path d="M42.877,40.976c0,3.662-2.969,6.631-6.631,6.631l0,0c-3.662,0-6.631-2.969-6.631-6.631V6.631   C29.616,2.969,32.585,0,36.246,0l0,0c3.662,0,6.631,2.969,6.631,6.631V40.976z" fill="#FFFFFF"/>
                            </svg>
                        </div>
                        <span class="music-name">08. Jason Derulo feat N.Minaj - Swalla</span>
                        <div class="player-grig"></div>
                        <span class="plyr__time">
                            <span class="plyr__time--duration">03:55</span>
                        </span>
                    </div>
                    <div class="music_line mus-9">
                        <div class="play-pause" data-src="resources/sounds/Nicky_Jam_feat_J_Balvin-X_EQUIS.mp3">
                            <svg class="play-mp3" x="0px" y="0px" viewBox="0 0 357 357">
                                <polygon points="38.25,0 38.25,357 318.75,178.5" fill="#FFFFFF"/>
                            </svg>
                            <svg class="pause-mp3" x="0px" y="0px" viewBox="0 0 47.607 47.607">
                                <path d="M17.991,40.976c0,3.662-2.969,6.631-6.631,6.631l0,0c-3.662,0-6.631-2.969-6.631-6.631V6.631C4.729,2.969,7.698,0,11.36,0   l0,0c3.662,0,6.631,2.969,6.631,6.631V40.976z" fill="#FFFFFF"/>
                                <path d="M42.877,40.976c0,3.662-2.969,6.631-6.631,6.631l0,0c-3.662,0-6.631-2.969-6.631-6.631V6.631   C29.616,2.969,32.585,0,36.246,0l0,0c3.662,0,6.631,2.969,6.631,6.631V40.976z" fill="#FFFFFF"/>
                            </svg>
                        </div>
                        <span class="music-name">09. Nicky Jam feat J.Balvin - X EQUIS</span>
                        <div class="player-grig"></div>
                        <span class="plyr__time">
                            <span class="plyr__time--duration">03:55</span>
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- END DISCOGRAPHY POST SECTION -->

<!-- START DISCOGRAPHY TEXT SECTION -->
<section id="discography-text">
    <div class="section">
        <div class="discography_description">
            <p>
               {{ $artist->bio }}
            </p>
        </div>
        <div class="social-icons">
            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
        </div>
    </div>
</section>
<!-- END DISCOGRAPHY TEXT SECTION -->