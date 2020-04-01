@extends('mainlayout.layout')

@section('body-content')
     <!--// Main Banner \\-->
     <div class="ec-mini-header">
        <span class="ec-blue-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ec-mini-title">
                        <h1>Contact Us</h1>
                    </div>
                    <div class="ec-breadcrumb">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Contact Us </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Main Banner \\-->
    <!--// Main Content \\-->
    <div class="ec-main-content">
        <!--// Main Section \\-->
        <div class="ec-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ec-map">
                            
                            <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJPwdslmeOT0YRQHwOKXiQAQQ&key=AIzaSyCmC1SYmEbORA5MrTnFAbxGS4s0TQOWvkg" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget widget-userinfo">
                            <div class="ec-fancy-title">
                                <h2>Location</h2>
                            </div>
                            <ul>
                                <li> <i class="fa fa-bank"></i>
                                    <p>Goteborg, Sweden</p>
                                </li>
                                <li> <i class="fa fa-phone"></i>
                                    <p>+46 73 766 78 88</p>
                                </li>
                                <li> <i class="fa fa-fax"></i>
                                    <p>+46 73 766 78 88</p>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget-userinfo">
                            <div class="ec-fancy-title">
                                <h2>Email Me</h2>
                            </div>
                            <ul>
                                <li> <i class="fa fa-envelope"></i>
                                    <p><a href="#">info@geesguud.se</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <!--// Comment Form //-->
                        <div class="ec-form">
                            <div class="ec-fancy-title">
                                <h2>Contact Form</h2> </div>
                            <form>
                                <p>
                                    <input type="text" value="Your Name" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }" name="usrname" required> </p>
                                <p>
                                    <input type="text" value="Email" onblur="if(this.value == '') { this.value ='Email'; }" onfocus="if(this.value =='Email') { this.value = ''; }" name="usrname" required> </p>
                                <p>
                                    <input type="text" value="Website" onblur="if(this.value == '') { this.value ='Website'; }" onfocus="if(this.value =='Website') { this.value = ''; }" name="usrname" required> </p>
                                <p class="ec-comment">
                                    <textarea placeholder="Comment"></textarea>
                                </p>
                                <p class="ec-submit">
                                    <input type="submit" value="Send" class="ec-bgcolor"> </p>
                            </form>
                        </div>
                        <!--// Comment Form //-->
                    </div>
                    <div class="col-md-12">
                        <!--// Partner \\-->
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
                        <!--// Partner \\-->
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->
    </div>
    <!--// Main Content \\-->
@endsection