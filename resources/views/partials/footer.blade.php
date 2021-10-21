<div class="map-area">
    <!-- google-map-area start -->
    <div class="google-map-area">
        <!--  Map Section -->
        <div id="contacts" class="map-area">
            <div id="googleMap" style="width:100%;height:380px;"></div>
        </div>
    </div>
</div>
<section class="newsletter-area bg-gray">
    <div class="container">
        <div class="row">
            <div class="newsletter-wrapper fix">
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="newsletter-content section-title text-center">
                        <h2>subscribe now for latest update!</h2> 
                        <div class="newsletter-form">
                            <form action="#" id="mc-form" class="mc-form fix">
                                <input id="mc-email" type="email" name="email" placeholder="Enter Your E-mail ID">
                                <button id="mc-submit" type="submit" class="default-btn" data-text="submit"><span>submit</span></button> 
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</section>
<footer class="footer-area bg-gray">
    <div class="footer-widget-area bg-3 pt-98 pb-90 fix">
        <div class="container">
            <div class="row">  
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-footer-widget">
                        <a href="index.html"><img src="img/logo/logo.png" alt="handstand"></a>
                        @foreach ($footer as $item)
                            
                        <p>{{$item->text}}</p>
                        <ul>
                            <li><i class="zmdi zmdi-email"></i> {{$item->email}}</li>
                            <li><i class="zmdi zmdi-phone"></i> ({{$item->number}})</li>
                            <li><i class="zmdi zmdi-home"></i>{{$item->adresse}}</li>
                        </ul>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-footer-widget">
                        <h3>Recent Tweets</h3>
                        <div class="single-twitt mb-10">
                            <div class="twitt-icon">
                                <i class="zmdi zmdi-twitter"></i>
                            </div>
                            <div class="twitt-content">
                                <p>@envato good News for today!! We got  2 psd templete weekly top selling quality template in technology category !!!</p>
                           <a href="https://twitter.com/login/">https://twitter.com/login</a>
                            </div>
                        </div>
                        <div class="single-twitt">
                            <div class="twitt-icon">
                                <i class="zmdi zmdi-twitter"></i>
                            </div>
                            <div class="twitt-content">
                                <p>@envato good News for today!! We got  2 psd templete weekly top selling quality template in technology category !!!</p>
                           <a href="https://twitter.com/login/">https://twitter.com/login</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm col-xs-12">
                    <div class="single-footer-widget">
                        <h3>get in touch</h3>
                        <form id="subscribe-form" action="https://whizthemes.com/mail-php/other/mail.php">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Name" name="con_name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Email" name="con_email">
                                </div>
                                <div class="col-sm-12">
                                    <textarea cols="30" rows="7" name="con_message" placeholder="subject"></textarea>
                                    <button type="submit">submit</button>
                                    <p class="subscribe-message"></p>
                                </div>
                            </div>
                        </form>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    <div class="footer-text-area fix bg-coffee ptb-18">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-text text-center">
                        <span>Copyright &copy; <a href="#">Hastech</a> 2017. All Rights Reserved.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>