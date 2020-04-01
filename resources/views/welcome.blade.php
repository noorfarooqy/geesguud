@extends('mainlayout.layout')

@section('body-content')
    
        <!--// Main Banner \\-->
        <div class="ec-mainbanner">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="/extra-images/geesguud_banner_1.png" alt="">
                        <span class="ec-transparent-color"></span>
                        <div class="ec-caption">
                            <div class="container">
                                <div class="caption-inner-wrap">
                                    <time class="ec-bgcolor" datetime="2008-02-14 20:00">From the March 7, 2014</time>
                                    <div class="clearfix"></div>
                                    <h1>Welcome to Geesguud</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id justo a arcu viverra placerat in eget dolor. In hac habitasse platea dictumst. Etiam porta diam sed lacus pharetra, elementum molestie metus fermentum.</p>
                                    <a href="#" class="ec-bgcolor">Read More</a>
                                </div>
                                <div class="ec-caption-image"> <img src="/extra-images/banner-static.png" alt=""> </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="/extra-images/geesguud_banner_2.png" alt="">
                        <span class="ec-transparent-color"></span>
                        <div class="ec-caption">
                            <div class="container">
                                <div class="caption-inner-wrap">
                                    <time class="ec-bgcolor" datetime="2008-02-14 20:00">From the March 7, 2014</time>
                                    <div class="clearfix"></div>
                                    <h1>Welcome to Geesguud</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id justo a arcu viverra placerat in eget dolor. In hac habitasse platea dictumst. Etiam porta diam sed lacus pharetra, elementum molestie metus fermentum.</p>
                                    <a href="#" class="ec-bgcolor">Read More</a>
                                </div>
                                <div class="ec-caption-image"> <img src="/extra-images/banner-static.png" alt=""> </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--// Main Banner \\-->
        <!--// Main Content \\-->
        <div class="ec-main-content">
            <!--// Main Section \\-->
            <div class="ec-main-section ec-newsticker-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ec-newsticker">
                                <span class="ec-color"><small>Latest News</small></span>
                                <ul id="ec-news">
                                    <li><a href="#">September 29, 2014 - impressive seven in his first four games</a></li>
                                    <li><a href="#"> Bibendum bibendumuris suscipit convallis ultrices. - 11 September 2015 </a></li>
                                    <li><a href="#">Quisque eleifend auctor turpis mauris non convallis dui. - 12 August 2015</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            <!--// Main Section \\-->
            <div class="ec-main-section ec-promofull">
                <div class="container">
                    <div class="row">
                        <!--// Match Fixture \\-->
                        <div class="col-md-6">
                            <div class="ec-fancy-title">
                                <h2>Match Fixture</h2>
                            </div>
                            <div class="ec-fixture-list">
                                <ul>
                                    <li class="text-center">
                                        No Fixtures at the moment
                                    </li>
                                    {{-- <li>
                                        <div class="ec-cell"><span>03 Sep. Friday</span></div>
                                        <div class="ec-cell">
                                            <a href="#" class="ec-fixture-flag"><img src="/extra-images/fixer-flag-1.png" alt=""> Arsenal</a>
                                            <span class="ec-fixture-vs"><small>vs</small></span>
                                            <a href="#" class="ec-fixture-flag ec-next-flag"><img src="/extra-images/fixer-flag-2.png" alt=""> Premier</a>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        <!--// TablePoint \\-->
                        <div class="col-md-6">
                            <div class="ec-fancy-title">
                                <h2>Table Points</h2>
                            </div>
                            <div class="ec-table-point">
                                <ul class="ec-table-head">
                                    <li>
                                        <div class="ec-cell">S.#</div>
                                        <div class="ec-cell">Team</div>
                                        <div class="ec-cell">P</div>
                                        <div class="ec-cell">W</div>
                                        <div class="ec-cell">D</div>
                                        <div class="ec-cell">L</div>
                                    </li>
                                </ul>
                                <ul class="ec-table-list">
                                    <li class="text-center">
                                        No timetable to show
                                    </li>
                                </ul>
                                {{-- <ul class="ec-table-list">
                                    <li>
                                        <div class="ec-cell">1</div>
                                        <div class="ec-cell">Arsenal</div>
                                        <div class="ec-cell">20</div>
                                        <div class="ec-cell">28</div>
                                        <div class="ec-cell">5</div>
                                        <div class="ec-cell">5</div>
                                    </li>
                                    <li>
                                        <div class="ec-cell">2</div>
                                        <div class="ec-cell">1.FCK</div>
                                        <div class="ec-cell">30</div>
                                        <div class="ec-cell">23</div>
                                        <div class="ec-cell">9</div>
                                        <div class="ec-cell">6</div>
                                    </li>
                                    <li>
                                        <div class="ec-cell">3</div>
                                        <div class="ec-cell">Liver Pool</div>
                                        <div class="ec-cell">10</div>
                                        <div class="ec-cell">22</div>
                                        <div class="ec-cell">10</div>
                                        <div class="ec-cell">8</div>
                                    </li>
                                    <li>
                                        <div class="ec-cell">4</div>
                                        <div class="ec-cell">Real Madrid</div>
                                        <div class="ec-cell">5</div>
                                        <div class="ec-cell">21</div>
                                        <div class="ec-cell">14</div>
                                        <div class="ec-cell">10</div>
                                    </li>
                                    <li>
                                        <div class="ec-cell">5</div>
                                        <div class="ec-cell">Premier League</div>
                                        <div class="ec-cell">14</div>
                                        <div class="ec-cell">10</div>
                                        <div class="ec-cell">9</div>
                                        <div class="ec-cell">8</div>
                                    </li>
                                </ul> --}}
                            </div>
                        </div>
                        <!--// TablePoint \\-->
                        <!--// Partner \\-->
                        <div class="col-md-12">
                            <div class="ec-sponsored">
                                <div class="item">
                                    <a href="#"><img src="/extra-images/drongo_partner.png" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="/extra-images/partner-logo-2.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="/extra-images/drongo_partner.png" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="/extra-images/partner-logo-2.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="/extra-images/drongo_partner.png" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="/extra-images/partner-logo-2.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!--// Partner \\-->
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            <!--// Main Section \\-->
            <div class="ec-main-section ec-full-parallexbg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ec-parallex-info">
                                <span>ready to be Join</span>
                                <h2>Boss 'understands if striker wanted move</h2>
                                <p>Vardy has been one of the stars of the season so far and is currently the top scorer. in the Premier League with 10 goals to his name.</p>
                                <a href="#" class="ec-default-button">FREE ENTER</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            <!--// Main Section \\-->
            <div class="ec-main-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ec-fancy-title">
                                <h2>Next Match</h2>
                            </div>
                            <div class="ec-nextmatch">

                                <div class="ec-latest-result-wrap">
                                    <div class="ec-latest-result">
                                        <ul>
                                            <li>No results to show</li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- <div class="item"> --}}
                                    {{-- <ul class="ec-team-matches">
                                        <li>
                                            <a href="#"><img src="/extra-images/next-match-1.png" alt=""> <span>Arsenal</span></a>
                                        </li>
                                        <li><small>Thurseday</small>
                                            <time class="ec-color" datetime="2008-02-14 20:00">28 October</time> <small>15:00pm</small></li>
                                        <li>
                                            <a href="#"><img src="/extra-images/next-match-2.png" alt=""> <span>Premier League</span></a>
                                        </li>
                                    </ul>
                                    <div id="ec-Countdown" class="ec-match-countdown"></div>
                                    <a href="#" class="ec-ticket-button">Less Than 600 Tickets Left For Villa</a> --}}
                                {{-- </div> --}}
                                {{-- <div class="item">
                                    <ul class="ec-team-matches">
                                        <li>
                                            <a href="#"><img src="/extra-images/next-match-1.png" alt=""> <span>Arsenal</span></a>
                                        </li>
                                        <li><small>Thurseday</small>
                                            <time class="ec-color" datetime="2008-02-14 20:00">22 October</time> <small>15:00pm</small></li>
                                        <li>
                                            <a href="#"><img src="/extra-images/next-match-2.png" alt=""> <span>Premier League</span></a>
                                        </li>
                                    </ul>
                                    <div id="ec-Countdowntwo" class="ec-match-countdown"></div>
                                    <a href="#" class="ec-ticket-button">Less Than 600 Tickets Left For Villa</a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ec-fancy-title">
                                <h2>Latest Result</h2>
                                <span>On Live</span>
                            </div>
                            <div class="ec-latest-result-wrap">
                                <div class="ec-latest-result">
                                    <ul>
                                        <li>No results to show</li>
                                    </ul>
                                    {{-- <ul>
                                        <li>
                                            <span>Corner FC</span>
                                            <img src="/extra-images/latest-result-1.png" alt="">
                                            <span>Win</span>
                                        </li>
                                        <li>
                                            <div class="ec-result-time">
                                                <div class="ec-time-wrap">
                                                    3:1
                                                    <small>14 October 2016 21:00 (FT)</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <span>LiMax</span>
                                            <img src="/extra-images/latest-result-2.png" alt="">
                                            <span>Loss</span>
                                        </li>
                                    </ul> --}}
                                </div>
                                {{-- <div class="ec-skillst">
                                    <div class="skillbar" data-percent="40%">
                                        <div class="count-bar">
                                            <div class="count"></div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            <!--// Main Section \\-->
            <div class="ec-main-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ec-simple-title">
                                <h2>Controlling Related Videos</h2>
                                <p>Bafe Gomis’ header sealed the comeback for Garry Monk’s side, who went on to complete the double over Arsenal later</p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="ec-blog ec-blog-medium">
                                <ul class="row">
                                    <li class="col-md-12">
                                        <div class="ec-blog-wrap">
                                            <figure>
                                                <a href="#"><img src="/extra-images/geesguud254x146.png" alt=""></a>
                                                <figcaption>
                                                    <span><small>8:12</small></span>
                                                    <a href="#" class="fa fa-play ec-playbutton"></a>
                                                </figcaption>
                                            </figure>
                                            <div class="ec-blog-text">
                                                <ul class="ec-blog-option">
                                                    <li><i class="fa fa-user"></i> Admin by. <a href="#" class="ec-colorhover">Alexander Protikhin</a></li>
                                                </ul>
                                                <h2><a href="#">Stamford Bridge contact information</a></h2>
                                                <p>Africa has some of the most incredible soccer teams (referre to as “football” for. <a href="#" class="ec-color">Watch</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="ec-blog-wrap">
                                            <figure>
                                                <a href="#"><img src="/extra-images/geesguud254x146_2.png" alt=""></a>
                                                <figcaption>
                                                    <span><small>2:00</small></span>
                                                    <a href="#" class="fa fa-play ec-playbutton"></a>
                                                </figcaption>
                                            </figure>
                                            <div class="ec-blog-text">
                                                <ul class="ec-blog-option">
                                                    <li><i class="fa fa-user"></i> Admin by. <a href="#" class="ec-colorhover">Jonathan Yurek</a></li>
                                                </ul>
                                                <h2><a href="#">Barrow looking for a repeat Performance</a></h2>
                                                <p>Africa has some of the most incredible soccer teams (referre to as “football” for. <a href="#" class="ec-color">Watch</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="ec-blog-wrap">
                                            <figure>
                                                <a href="#"><img src="/extra-images/geesguud254x146_3.png" alt=""></a>
                                                <figcaption>
                                                    <span><small>1:26</small></span>
                                                    <a href="#" class="fa fa-play ec-playbutton"></a>
                                                </figcaption>
                                            </figure>
                                            <div class="ec-blog-text">
                                                <ul class="ec-blog-option">
                                                    <li><i class="fa fa-user"></i> Admin by. <a href="#" class="ec-colorhover">Dino Henderson</a></li>
                                                </ul>
                                                <h2><a href="#">We'll have to be at our best</a></h2>
                                                <p>Africa has some of the most incredible soccer teams (referre to as “football” for. <a href="#" class="ec-color">Watch</a></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="ec-frame">
                                <iframe src="https://player.vimeo.com/video/165441527" height="374"></iframe>
                            </div>
                            <div class="ec-gallery-slider gallery">
                                <div class="item">
                                    <a title="" rel="prettyPhoto[gallery1]" href="extra-images/banner-1.jpg"><img src="/extra-images/slider-gallery-1.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a title="" rel="prettyPhoto[gallery1]" href="extra-images/banner-2.jpg"><img src="/extra-images/slider-gallery-2.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a title="" rel="prettyPhoto[gallery1]" href="extra-images/banner-1.jpg"><img src="/extra-images/slider-gallery-3.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a title="" rel="prettyPhoto[gallery1]" href="extra-images/banner-2.jpg"><img src="/extra-images/slider-gallery-4.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            <!--// Main Section \\-->
            <div class="ec-main-section ec-full-counter">
                <span class="ec-transparent-bg"></span>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ec-counter">
                                <ul class="row">
                                    <li class="col-md-3">
                                        <i class="fa fa-globe"></i>
                                        <div class="ec-counter-info">
                                            <small>TOTAL GOALS</small>
                                            <span class="word-count ec-color">15,000</span>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <i class="fa fa-glass"></i>
                                        <div class="ec-counter-info">
                                            <small>Possession &nbsp; &nbsp;</small>
                                            <span class="word-count ec-color">7,000</span>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <i class="fa fa-hand-o-right"></i>
                                        <div class="ec-counter-info">
                                            <small>Win Match &nbsp; &nbsp; </small>
                                            <span class="word-count ec-color">3,000</span>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <i class="fa fa-heart-o"></i>
                                        <div class="ec-counter-info">
                                            <small>corner goal </small>
                                            <span class="word-count ec-color">1,000</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            <!--// Main Section \\-->
            <div class="ec-main-section blog-grid-full">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ec-simple-title">
                                <h2>Latest news</h2>
                                <p>Bafe Gomis’ header sealed the comeback for Garry Monk’s side, who went on to complete the double over Arsenal later</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ec-blog ec-blog-grid">
                                <ul class="row">
                                    <li class="col-md-4">
                                        <div class="ec-blog-wrap">
                                            <figure>
                                                <a href="#"><img src="/extra-images/blog-grid-1.jpg" alt=""></a> <span class="ec-featured-star ec-bgcolor"><i class="fa fa-star"></i></span></figure>
                                            <div class="ec-blog-text">
                                                <h2><a href="#">United, Palace Aim To Rebound From Setbacks</a></h2>
                                                <div class="ec-grid-time">
                                                    <span><i class="fa fa-clock-o"></i> 3 hours ago</span>
                                                    <a href="#" class="fa fa-angle-right"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <div class="ec-blog-wrap">
                                            <figure>
                                                <a href="#"><img src="/extra-images/blog-grid-2.jpg" alt=""></a>
                                            </figure>
                                            <div class="ec-blog-text">
                                                <h2><a href="#">The summer of 2014 was understandably all about the</a></h2>
                                                <div class="ec-grid-time">
                                                    <span><i class="fa fa-clock-o"></i> 1 hours ago</span>
                                                    <a href="#" class="fa fa-angle-right"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <div class="ec-blog-wrap">
                                            <figure>
                                                <a href="#"><img src="/extra-images/blog-grid-3.jpg" alt=""></a> <span class="ec-featured-star ec-bgcolor"><i class="fa fa-star"></i></span></figure>
                                            <div class="ec-blog-text">
                                                <h2><a href="#">Sevilla finished fifth and just out of the Champions League spots</a></h2>
                                                <div class="ec-grid-time">
                                                    <span><i class="fa fa-clock-o"></i> 1 day ago</span>
                                                    <a href="#" class="fa fa-angle-right"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            <!--// Main Section \\-->
            <div class="ec-main-section blog-grid-full">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ec-simple-title">
                                <h2>Meet Our Team</h2>
                                <p>Bafe Gomis’ header sealed the comeback for Garry Monk’s side, who went on to complete the double over Arsenal later</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ec-team ec-team-grid">
                                <ul class="row">
                                    <li class="col-md-3">
                                        <div class="ec-team-wrap">
                                            <figure>
                                                <a href="#"><img src="/extra-images/team-grid-1.jpg" alt=""></a>
                                            </figure>
                                            <div class="ec-team-info">
                                                <div class="ec-forinfo">
                                                    <h3><a href="#">KELVIN DAVIS</a></h3>
                                                    <small>gOALKEEPER</small>
                                                </div>
                                                <span class="ec-goal-counter ec-bgcolor">06</span>
                                                <span class="ec-plyer-info">Born August 31, 1988 <br> Medellin, Colombia</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="ec-team-wrap">
                                            <figure>
                                                <a href="#"><img src="/extra-images/team-grid-2.jpg" alt=""></a>
                                            </figure>
                                            <div class="ec-team-info">
                                                <div class="ec-forinfo">
                                                    <h3><a href="#">Debuchy Profile</a></h3>
                                                    <small>Defender</small>
                                                </div>
                                                <span class="ec-goal-counter ec-bgcolor">12</span>
                                                <span class="ec-plyer-info">Born August 31, 1988 <br> Medellin, Colombia</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="ec-team-wrap">
                                            <figure>
                                                <a href="#"><img src="/extra-images/team-grid-3.jpg" alt=""></a>
                                            </figure>
                                            <div class="ec-team-info">
                                                <div class="ec-forinfo">
                                                    <h3><a href="#">Laurent Koscielny</a></h3>
                                                    <small>Midfielder</small>
                                                </div>
                                                <span class="ec-goal-counter ec-bgcolor">10</span>
                                                <span class="ec-plyer-info">Born August 31, 1988 <br> Medellin, Colombia</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="ec-team-wrap">
                                            <figure>
                                                <a href="#"><img src="/extra-images/team-grid-4.jpg" alt=""></a>
                                            </figure>
                                            <div class="ec-team-info">
                                                <div class="ec-forinfo">
                                                    <h3><a href="#">Tomas Rosicky</a></h3>
                                                    <small>Striker</small>
                                                </div>
                                                <span class="ec-goal-counter ec-bgcolor">08</span>
                                                <span class="ec-plyer-info">Born August 31, 1988 <br> Medellin, Colombia</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            <!--// Main Section \\-->
            <div class="ec-main-section blog-grid-full">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ec-simple-title">
                                <h2>Welcome To Our Gallery</h2>
                                <p>Real Madrid and Barcelona. Barcelona and Real Madrid. Spanish football has been about those two massive</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ec-gallery ec-simple-gallery">
                                <ul class="row gallery">
                                    <li class="col-md-3">
                                        <figure>
                                            <a href="#"><img src="/extra-images/gallery-list-1.jpg" alt=""></a>
                                            <figcaption>
                                                <a title="" rel="prettyPhoto[gallery1]" href="extra-images/gallery-list-1.jpg" class="ec-color"><i class="fa fa-compress"></i></a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-3">
                                        <figure>
                                            <a href="#"><img src="/extra-images/gallery-list-2.jpg" alt=""></a>
                                            <figcaption>
                                                <a title="" rel="prettyPhoto[gallery1]" href="extra-images/gallery-list-2.jpg" class="ec-color"><i class="fa fa-compress"></i></a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-3">
                                        <figure>
                                            <a href="#"><img src="/extra-images/gallery-list-3.jpg" alt=""></a>
                                            <figcaption>
                                                <a title="" rel="prettyPhoto[gallery1]" href="extra-images/gallery-list-3.jpg" class="ec-color"><i class="fa fa-compress"></i></a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-3">
                                        <figure>
                                            <a href="#"><img src="/extra-images/gallery-list-4.jpg" alt=""></a>
                                            <figcaption>
                                                <a title="" rel="prettyPhoto[gallery1]" href="extra-images/gallery-list-4.jpg" class="ec-color"><i class="fa fa-compress"></i></a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-3">
                                        <figure>
                                            <a href="#"><img src="/extra-images/gallery-list-5.jpg" alt=""></a>
                                            <figcaption>
                                                <a title="" rel="prettyPhoto[gallery1]" href="extra-images/gallery-list-5.jpg" class="ec-color"><i class="fa fa-compress"></i></a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-3">
                                        <figure>
                                            <a href="#"><img src="/extra-images/gallery-list-6.jpg" alt=""></a>
                                            <figcaption>
                                                <a title="" rel="prettyPhoto[gallery1]" href="extra-images/gallery-list-6.jpg" class="ec-color"><i class="fa fa-compress"></i></a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-3">
                                        <figure>
                                            <a href="#"><img src="/extra-images/gallery-list-7.jpg" alt=""></a>
                                            <figcaption>
                                                <a title="" rel="prettyPhoto[gallery1]" href="extra-images/gallery-list-7.jpg" class="ec-color"><i class="fa fa-compress"></i></a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-3">
                                        <figure>
                                            <a href="#"><img src="/extra-images/gallery-list-8.jpg" alt=""></a>
                                            <figcaption>
                                                <a title="" rel="prettyPhoto[gallery1]" href="extra-images/gallery-list-8.jpg" class="ec-color"><i class="fa fa-compress"></i></a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
        </div>
        <!--// Main Content \\-->
@endsection