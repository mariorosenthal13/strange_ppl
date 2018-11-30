<!-- START HEADER SECTION -->
@if(Session::has('message'))
    <div id="final_msg">
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    </div>
@endif
<style>
    header {
        position: relative;
        background-color: black;
        height: 75vh;
        min-height: 25rem;
        width: 100%;
        overflow: hidden;
    }

    header video {
        position: absolute;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: 0;
        -ms-transform: translateX(-50%) translateY(-50%);
        -moz-transform: translateX(-50%) translateY(-50%);
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
    }

    header .container {
        position: relative;
        z-index: 2;
    }

    header .overlay {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: black;
        opacity: 0.5;
        z-index: 1;
    }
    @media only screen and (max-width: 600px) {
        video {
            padding-top: 229px;
        }
    }


    @media (pointer: coarse) and (hover: none) {
        header {
            background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
        }
        header video {
            display: none;
        }
    }
</style>
<script>
    setTimeout(function() {
        $('#final_msg').fadeOut();
        $('#name, #email, #msg, #origin').val('')
    }, 10000 );
</script>
<section id="header">
    @include('includes.defaults.menu')
    {{--<!-- START SEARCH BAR SECTION -->--}}
    {{--<div class="search-bar">--}}
        {{--<!-- SEARCH BAR BACKGROUND IMAGE-->--}}
        {{--<div class="section_bg_image" style="background-image: url(https://picsum.photos/1920x900)"></div>--}}
        {{--<form class="form-inline my-2 my-lg-0 search_form">--}}
            {{--<input class="form-control mr-sm-2" type="search" placeholder="Search..." aria-label="Search">--}}
            {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>--}}
        {{--</form>--}}
    {{--</div>--}}
    {{--<!-- END SEARCH BAR SECTION  -->--}}
    <!-- HEADER BACKGROUND IMAGE  -->
    {{--<div class="bg_image" style="background-image: url(https://picsum.photos/1920x1280)"></div>--}}
    {{--<div class="bg_image" style="background-image: url({{ url('/img/ART-BASEL-12X24.gif') }})"></div>--}}
         {{--<video class="bg_image"  playsinline="playsinline" muted="muted"  autoplay="true" volume="0">--}}
            {{--<source src="{{ url('/vids/strangebaselvid.mp4') }}" type="video/mp4">--}}
        {{--</video>--}}
        <div class="overlay"></div>

        {{--<div class="overly"></div> --}}{{--TODO REMOVE --}}
    <div class="header-continer">
        <div class="section">
            <!-- LOGO -->
            <div class="logo"><a href="/"><img src="{{ url('/img/strange-people-white.png') }}"  alt="Logo"></a></div>
            <div class="header_items">
                {{--//TODO COMENT BACK MAIRO--}}
                {{--<div class="menu_icon">--}}
                    {{--<i class="fa fa-bars" aria-hidden="true"></i>--}}
                    {{--<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 15.642 15.642" enable-background="new 0 0 15.642 15.642" width="21" height="21">--}}
                        {{--<path fill-rule="evenodd" d="M8.882,7.821l6.541-6.541c0.293-0.293,0.293-0.768,0-1.061  c-0.293-0.293-0.768-0.293-1.061,0L7.821,6.76L1.28,0.22c-0.293-0.293-0.768-0.293-1.061,0c-0.293,0.293-0.293,0.768,0,1.061  l6.541,6.541L0.22,14.362c-0.293,0.293-0.293,0.768,0,1.061c0.147,0.146,0.338,0.22,0.53,0.22s0.384-0.073,0.53-0.22l6.541-6.541  l6.541,6.541c0.147,0.146,0.338,0.22,0.53,0.22c0.192,0,0.384-0.073,0.53-0.22c0.293-0.293,0.293-0.768,0-1.061L8.882,7.821z" fill="#FFFFFF"/>--}}
                    {{--</svg>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
    <!-- HEADER TITLE  -->
    <div class="section section_1_title">
        <div class="title-image">
            <!--<h1>beatswave</h1>-->
            <img style = "-webkit-filter: blur(3px); /* Safari 6.0 - 9.0 */
    filter: blur(3px); margin-top: 85px; position: fixed; z-index: 999; pointer-events: none;"  src="img/logo-white.png" alt="Logo 1">
        </div>
        <div class="header-title wow zoomIn">
<!--            --><?php
//            $titles = [
//                '<h1>We are <span>Strange</span> People</h1>',
//                '<h1><span>Strange</span> Music For <span>Strange</span> People</h1>',
//                '<h1>Welcome To Our <span>Strange</span> Label</h1>',
//                '<h1>Willing to <span>Strange</span> For Some Change</h1>',
//                '<h1>We All are <span>Strange</span> And Unusual</h1>',
//                '<h1><span>Strange</span> stuff</h1>',
//                '<h1>Welcome To the <span>Strange</span></h1>',
//                '<h1>People are <span>Strange</span></h1>',
//                '<h1><span>Strange</span> People Things</h1>',
//                '<h1>For the <span>Strange</span> Music Lovers</h1>',
//                '<h1><span>Strange</span> Enough</h1>',
//            ];
//            echo $titles[rand(0,9)];
//            ?>
        </div>
    </div>
</section>
<!-- END HEADER SECTION -->