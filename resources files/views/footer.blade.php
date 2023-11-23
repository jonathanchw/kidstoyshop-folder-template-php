<footer class="footer footer6 footer-background-color" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="mb-5 mb-lg-0">
                    <!--Title-->
                    <h5>About us</h5>
                    <div class="spacer primary-background-color"></div>
                    <!--/Title-->
                    <div class="footer-about">
                        <h2><span>{{ $content -> store_name ?? '' }}</span></h2>
                    </div>
                </div>
            </div>
            <!--Contact Block-->
            <div class="col-lg-3 col-sm-6">
                <div class="mb-5 mb-md-0">
                    <!--Title-->
                    <h5>Contact Details</h5>
                    <div class="spacer primary-background-color"></div>
                    <!--/Title-->
                    <!--Contact-->
                    <ul class="contact-widget">
                        <li class="d-flex">
                            <div class="info">
                                <span>{!! empty($page->corporation->address) ? '' : nl2br(e($page->corporation->address)) !!}</span>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="info">
                                <a href="javascript:void(0);">{{ $page->support_phone ?? '' }}</a>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="info">
                                <a href="javascript:void(0);">{{ $page->support_emai ?? '' }}</a>
                            </div>
                        </li>
                    </ul>
                    <!--Contact-->
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="mb-5 mb-md-0">
                    <!--Title-->
                    <div class="quick-links">
                        <h5>Quick Links</h5>
                        <div class="spacer primary-background-color"></div>
                        <!--/Title-->
                        <ul>
                            <!--If any 1 product in shop is set to bill model 2,3,4 then cancel link enable -->
                            <li><a href="/">Home</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/terms">Terms</a></li>
                            <li><a href="/privacy">Privacy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/Contact Block-->
            <!--Contact Block-->
            <div class="col-lg-3 col-sm-6">
                <div class="mb-5 mb-md-0">
                    <!--Title-->
                    <h5>Return Shipment</h5>
                    <div class="spacer primary-background-color"></div>
                    <!--/Title-->
                    <!--Contact-->
                    <ul class="contact-widget">
                        <li class="d-flex">
                            <div class="info">
                                <span>{!! empty($page->support_email) ? '' : nl2br(e($page-> support_email)) !!}</span>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="info">
                                <span class="js_website-return-address">{!! empty($page->support_return_address) ? '' : nl2br(e($page->support_return_address)) !!}</span>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="info">
                                <a href="tel:phonenumber">{!! empty($page->support_phone) ? '' : nl2br(e($page->support_phone)) !!}</a>
                            </div>
                        </li>
                    </ul>
                    <!--Contact-->
                </div>
                <!--/Contact Block-->
            </div>
        </div>
        <div class="copyright text-center">
            <div class="container">
                <p>
                    &copy; <span>{!! empty($page->corporation->year) ? '' : nl2br(e($page->corporation->website-year)) !!}</span>
                    <span>{{$page->corporation->name}} </span>
                </p>
                <div class="corp"><span></span>{{$page->corporation->name}}</div>
            </div>
        </div>
    </div>
</footer>