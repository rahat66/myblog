<hr>
<section class="bg-blue footer" id="contact">
    <div class="container">
        <div class="row pt-5 gutter-6">
            <div class="col-lg-4 center">
                <h4 class="text-white footer-title BebasNeue ">Related Links</h4>
                <div class="mt-3">
                    <ul class="list-unstyled">
                        <li><a href="#" target="_blank" class="text-white"><i class="mdi mdi-earth"></i> abc</a></li>
                        <li><a href="#" target="_blank" class="text-white"><i class="mdi mdi-earth"></i> xyz</a></li>
                      
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 text-center social-footer">
                <h4 class="text-white footer-title BebasNeue ">Follow My Updates</h4>
                <div class="mt-4">
                    <div class="text-center">
                        <form id="subscribersForm">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" id="message" placeholder="Enter your email address" name="email">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" id="sendRequest" type="button">Subscribe <i class="mdi mdi-arrow-right-bold"></i></button>
                                </div>
                            </div>
                           
                        </form>
                    </div>
                    <ul class="list-unstyled text-white footer-social list-inline">
                        <li class="list-inline-item"><a href="#" target="_blank"><i class="mdi mdi-facebook facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank"><i class="mdi mdi-instagram instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank"><i class="mdi mdi-twitter twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank"><i class="mdi mdi-youtube-play youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 text-right addr-footer">
                <h4 class="text-white footer-title BebasNeue">Address</h4>
                <div class="mt-4">
                    <address class="montserrat">
                        <p class="address line-height-9 text-white" style="margin-bottom: 0.5rem">abc</p>
                        <p class="address line-height-9 text-white" style="margin-bottom: 0.5rem">xyz</p>
                        <p class="email line-height-9" style="margin-bottom: 0.5rem"><a class="text-white" href=""><a class="text-white" href="index.html" target="_blank">www.SolaimanSalim.net.bd</a></p>
                        <p class="call line-height-9" style="margin-bottom: 0.5rem"><a class="text-white" href="tel:+880-1766-699999">+880-0000-000-000</a></p>
                    </address>
                </div>
            </div>
        </div>
        <div class="footer-border" style="margin-top: 10px;opacity: .2"></div>
        <div class="row">
            <div class="col-lg-12">
                <div class="float-left pull-none">
                    <p class="text-white mb-0 montserrat">All rights reserved By <span class="montserrat-bold">Solaiman Salim</span>
                    </p>
                </div>
                <div class="float-right pull-none">
                    <p class="footer-terms text-white">
                        <a href="#.html">Privacy &amp; Policy </a> |
                        <a href="#">Terms &amp; Condition</a> |
                        <a href="contact.html">Contact</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer end -->
<!-- Modal -->
<div class="card mfp-hide mx-auto border-0"  id="get-involved">
    <div class="row no-gutters">
        <div class="col-md-5" style="background-color: #eeeeee">
            <img src="frontEnd/images/dmd.png" class="card-img"
                 style="border-radius: 0" alt="...">
        </div>
        <div class="col-md-7 pr-4 pl-4 align-self-center">
            <h5 class="BebasNeue">Get an Appointment</h5>
            <hr style="margin-top:0;margin-bottom: 0.5rem">
            <div class="alert alert-success alert-dismissible fade show" style="display: none" role="alert">
                Appointment Request Successfully Sent.
            </div>

            <form id="appointmentForm">
                <div class="row">
                    <div class="form-group col-md-6" style="margin-bottom: 0.2rem">
                        <label for="name"><strong>Your Full Name</strong><span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name"
                               id="name">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group col-md-6"  style="margin-bottom: 0.2rem">
                        <label for="email"><strong>Your Email Address</strong><span
                                class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="email"
                               id="email">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group col-md-6"  style="margin-bottom: 0.2rem">
                        <label for="mobile"><strong>Mobile Number</strong><span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="mobile"
                               id="mobile">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group  col-md-6"  style="margin-bottom: 0.2rem">
                        <label for="appointment_date"><strong>Appointment Date</strong><span
                                class="text-danger">*</span></label>
                        <input type="text" autocomplete="off" class="form-control datePicker" name="app_date"
                               id="app_date">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-group col-md-12"  style="margin-bottom: 0.2rem">
                        <label for="agenda"><strong>Agenda</strong><span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="agenda" id="agenda">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="address"><strong>Address</strong><span class="text-danger">*</span></label>
                        <textarea class="form-control" name="address" id="address"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="m-auto text-center">
                    <button type="button" id="submitBtn" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- js placed at the end of the document so the pages load faster -->
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="frontEnd/js/jquery.min.js"></script>
<script src="../code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="frontEnd/js/popper.min.js"></script>
<script src="frontEnd/js/bootstrap.bundle.min.js"></script>
<script src="frontEnd/js/jquery.easing.min.js"></script>
<script src="frontEnd/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="frontEnd/plugin/fancybox-master/dist/jquery.fancybox.min.js" type="text/javascript"></script>
<script src="frontEnd/js/wow.js"></script>
    <script src="frontEnd/plugin/owl-2.3/dist/owl.carousel.min.js"></script>
    <script src="frontEnd/js/flickity.min.js"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
<script src="frontEnd/js/waypoints.min.js"></script>

<script src="frontEnd/js/notify.min.js"></script>
<!--common script for all pages-->
<script src="frontEnd/js/jquery.app.js"></script>
<script src="frontEnd/js/custom.min.js"></script>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            margin: 20,
            loop: true,
            items: 2,
            nav: false,
            dots: true,
            dotsData: true,
            autoplay: true,
            animateOut: 'fadeOut',
            responsiveClass: true,
            // navText: ["<span>←</span>", "<span>→</span>"],
            dotsContainer: '.owl-dots-container',
            responsive: {
                0: {
                    stagePadding: 0,
                    items: 1
                },
                768: {
                    items: 2
                },
                1000: {
                    stagePadding: 200
                }
            }
        });
    </script>

<script>
    </script>
</body>

</html>
